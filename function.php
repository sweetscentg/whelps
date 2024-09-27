<?php 

session_start();

//DATABASE CONNECTION
function database_run($query,$vars = array())
{
	$string = "mysql:host=localhost;dbname=whelps_db";
	$con = new PDO($string,'root','');

	if(!$con){
		return false;
	}

	$stm = $con->prepare($query);
	$check = $stm->execute($vars);

	if($check){
		
		$data = $stm->fetchAll(PDO::FETCH_OBJ);
		
		if(count($data) > 0){
			return $data;
		}
	}

	return false;
}

//SIGN UP
function signup($data)
{
	//ERROR TRAPPING
	$errors = array();
 
	//CHECK FOR EXIXTING EMAIL
	$check = database_run("select * from users where email = :email limit 1",['email'=>$data['email']]);
	if(is_array($check)){
		$errors['email'] = "That email already exists";
	}
	
	//CHECK FOR EMAIL VALIDITY
	if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL)){
		$errors['email'] = "Please enter a valid email";
	}

	//VALIDATE
	if(!preg_match('/^[a-zA-Z]+$/', $data['username'])){
		$errors['username'] = "Please enter a valid username";
	}

	//PASSWORD LENGTH
	if(strlen(trim($data['password'])) < 4){
		$errors['password'] = "Password must be at least 4 characters long";
	}

	//CONFIRM PASSWORD == PASSWORD
	if($data['password'] != $data['cpass']){
		$errors['confirm password'] = "Password does not match";
	}

	if(empty($_POST['g-recaptcha-response'])) {
        $errors['captcha'] = "Please complete the CAPTCHA.";
    }

	if (empty($_POST['first_name'])) {
        $errors['first name'] = "This field cannot be empty";
    }
    
    if (empty($_POST['last_name'])) {
        $errors['last name'] = "This field cannot be empty";
    }

	if (empty($_POST['birthday'])) {
        $errors['birthday'] = "Please select your birthday";
    }

	   // Validate radio button
	   if (!isset($_POST['gender'])) {
        $errors['gender'] = "Please select your gender";
    }
		
	if(empty($errors)) {
		
       
			// Store user data in session variables
			$_SESSION['FIRST_NAME'] = $data['first_name'];
			$_SESSION['LAST_NAME'] = $data['last_name'];
			$_SESSION['USERNAME'] = $data['username'];
			$_SESSION['EMAIL'] = $data['email'];
			$_SESSION['PASSWORD'] = hash('sha256', $data['password']);
			$_SESSION['BIRTHDAY'] = $data['birthday'];
			$_SESSION['GENDER'] = $data['gender'];
		
			// Proceed with CAPTCHA verification
			// Redirect to verify.php after CAPTCHA verification
	
		

		$_SESSION['SIGNED_UP'] = true;
		$_SESSION['EMAIL'] = $data['email'];
		$_SESSION['USERNAME'] = $data['username'];
		trigger_verification_email($data['email']);

    }

    return $errors;
}

function trigger_verification_email($email) {

    $verification_code = rand(10000, 99999);

    $existing_code = database_run("SELECT code FROM verify WHERE email = :email", ['email' => $email]);
    if ($existing_code && count($existing_code) > 0) {
        $query = "UPDATE verify SET code = :code, expires = :expires WHERE email = :email";
    } else {
        $query = "INSERT INTO verify (code, expires, email) VALUES (:code, :expires, :email)";
    }

    //SAVE VERIFICATION CODE AND EMAIL TO DB
    $vars = [
        'code' => $verification_code,
        'expires' => (time() + (60 * 10)),
        'email' => $email
    ];
    database_run($query, $vars);

    require_once "mail.php"; 
    $message = "Your verification code is " . $verification_code;
    $subject = "Email Verification";

    // SEND EMAIL
    $send_result = send_mail($email, $subject, $message);

    if ($send_result) {
        header("Location: verify.php");
    } else {
        echo "Failed to send verification code to $email. Please try again later.";
        error_log("Failed to send verification code email to $email.");
    }
}



// RESEND VERIFICATION CODE
function resend_verification_code($email) {

    $verification_code = rand(10000, 99999);
    $query = "UPDATE verify SET code = :code, expires = :expires WHERE email = :email";
    $vars = array(
        'code' => $verification_code,
        'expires' => (time() + (60 * 2)), 
        'email' => $email
    );
    database_run($query, $vars);

    // SEND NEW VERIFICATION CODE TO EMAIL
    require_once "mail.php"; 
    $message = "Your new verification code is " . $verification_code;
    $subject = "Email Verification";
    send_mail($email, $subject, $message);
}



//LOG IN
function login($data)
{
	$errors = array();
 
	//EMAIL VALIDITY
	if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL)){
		$errors['email'] = "Please enter a valid email.";
	}

	if(strlen(trim($data['password'])) < 4){
		$errors['password'] = "Password must be at least 4 characters.";
	}
 
	//CHECK EMAIL AND PASSWORD
	if(count($errors) == 0){

		$arr['email'] = $data['email'];
		$password = hash('sha256', $data['password']);

		$query = "select * from users where email = :email limit 1";
		$row = database_run($query,$arr);

		if(is_array($row)){
			$row = $row[0];
			if ($password === $row->password) {
				if ($row->status == 'Activated') {
					$username = $row->username;
					$user_type = $row->user_type;
					$activity = 'Logged in';
	
					$query = "INSERT INTO activity_log (username, user_type, activity) VALUES (:username, :user_type, :activity)";
					$arr = array('username' => $username, 'user_type' => $user_type, 'activity' => $activity);
					database_run($query, $arr);
	
					$_SESSION['USER'] = $row;
					$_SESSION['USER_TYPE'] = $user_type;
					$_SESSION['LOGGED_IN'] = true;
				} else {
					$errors['password'] = "Your account is deactivated";
				}
			} else {
				$errors['email'] = "Wrong email or password";
				$errors['password'] = "Wrong email or password";
			}

		}else{
			$errors[] = "<div class='l1'>Error</div>";
		}
	}
	return $errors;
}

//CHECK LOGIN
function check_login($redirect = true){

	if(isset($_SESSION['USER']) && isset($_SESSION['LOGGED_IN'])){
		return true;
	}

	if($redirect){
		header("Location: login.php");
		die;
	}else{
		return false;
	}
	
}


//CHECK ACCOUNT VERIFICATION
function check_verified(){

	$id = $_SESSION['USER']->id;
	$query = "select * from users where id = '$id' limit 1";
	$row = database_run($query);

	if(is_array($row)){
		$row = $row[0];
		if($row->verified == 'yes'){
			return true;
		}
	}
	return false;	
}

//CHECK IF ADMIN
function check_admin(){

	$user_type = $_SESSION['USER']->user_type;
	$query = "select * from users where user_type = '$user_type' limit 1";
	$row = database_run($query);

	if(is_array($row)){
		$row = $row[0];
		if($row->user_type == 'admin'){
			return true;
		}
	}	
	return false;
}