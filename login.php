<?php  
require "function.php";

$errors = array();
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $errors = login($_POST);
    if(count($errors) == 0)
    {        
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            if (check_admin()){
                header("Location: admin/admindash.php");
                $_SESSION['USER_ID'] = $_SESSION['USER']->id;
                $_SESSION['USERNAME'] = $_SESSION['USER']->username;
            }
            else{
                $_SESSION['USER_ID'] = $_SESSION['USER']->id;
                $_SESSION['USERNAME'] = $_SESSION['USER']->username;
                header("Location: index.php");
            }
        }
        die;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400..800&family=Caveat+Brush&family=Delicious+Handrawn&family=Inter:wght@100..900&family=Vujahday+Script&display=swap" rel="stylesheet">
<meta http-equiv="Content-Security-Policy" content="frame-src https://accounts.google.com;">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<script src="https://apis.google.com/js/platform.js" async defer></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link rel="icon" href="../Whelpss2.ico" type="image/x-icon">
<title>Login Form</title>
<style>
  body {
    background-image: url("Images/login/loginbg5.jpg");
    background-size: cover;
    background-position: center;
    background-attachment: fixed; 
    font-family: "Inter", sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  
  .container {
    padding: 30px;
    border-radius: 10px;
    background: rgba(255, 255, 255, 0.3); /* Adjust the alpha value for transparency */
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.3); /* Shadow for the glass effect */
    width: 400px; 
    text-align: center;
    position: relative; /* To position the back button */
    margin-right: auto; /* Add this line to align container to the left */
    margin-left: 20px; /* Add this line to add a bit of space from the left */

  }

  .close-btn{
    position: absolute;
    top: 10px;
    right: 10px;
  }
  
  .input-container {
    position: relative;
    margin-bottom: 20px;
  }
  
  .input-container input {
    background: rgba(255, 255, 255, 0.3);
    width: calc(100% - 30px);
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    outline: none;
    transition: border-color 0.3s ease;
  }

  .input-container input:focus {
    border-color: #FFC719; /* Change border color when input is focused */
}
  
  .btn {
    color: white;
    padding: 15px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-bottom: 10px;
    width: 100%;
      transition: background-color 0.3s ease;
  }
  .sign-up{
    text-decoration: none;
    color: white;
  }
  
    .sign-up:hover{
     background-color: #FEC84E;
  }
  
  .login-btn {
    background-color: #FFC719; /* Login button background color */
  }
  
  .login-btn:hover{
     background-color: #FEC84E;
  }
  
  
  .create-account-btn {
    background-color: #EC9F05; /* Create new account button background color */
  }
  
  .create-account-btn:hover {
    background-color: #FEC84E; /* Create new account button background color */
  }
  
  .divider {
    margin: 10px 0;
    position: relative;
  }
  
  .divider::before, .divider::after {
    content: "";
    display: block;
    border-top: 1px solid #ccc;
    position: absolute;
    top: 50%;
    width: 40%;
  }
  
  .divider::before {
    left: 0;
  }
  
  .divider::after {
    right: 0;
  }
  
   .content{
    font-family: "Inter", sans-serif;
    font-optical-sizing: auto;
    font-weight: <weight>;
    font-style: normal;
    font-variation-settings: "slnt" 0;
    margin-bottom: 10px;
   }

    .content1{
    font-family: "Inter", sans-serif;
    font-size: 30px;
    color: #FFC719;
  }

   .content2{
    font-style: bold;
     color: #000000;
   }
     
   .content3{
     color: #555555;
   }

  .logo-container {
    margin-bottom: 10px;
  }
  
  .logo-container img {
    width: 30%;
    margin-bottom: 10px;
  }

  .g-signin2 {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    background-color: #f0f0f0; /* Gray-white background */
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    color: black;
    font-weight: bold;
    text-decoration: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .g-signin2:hover {
    background-color: #e0e0e0; /* Lighter gray on hover */
  }

  .google-icon {
    width: 20px;
    margin-right: 10px; /* Space between icon and text */
  }

  @media screen and (max-width: 480px) {
    .container {
      width: 90%;
      margin: 20px;
    }
  }


  .error {
    color: #ff0000;
    font-size: 14px;
    margin-top: 5px;
}
  /* Add CSS for error styles*/
.input-container {
    position: relative;
    margin-bottom: 20px;
} 

.input-container input {
    padding-right: 30px; /* Adjust as needed based on the width of the icon */
}

.fa-eye {
    color: #000000;
    position: absolute;
    top: 30%;
     right: 10px;
    transform: translateY(-50%);
    cursor: pointer;
    margin-top: 5px; 
}

  


/* Apply red border to input fields with errors */
.input-container input.error {
    border-color: #ff0000;
}

/* Position the exclamation mark icon */
.input-container input.error + .error::after {
    content: "\26A0";
    position: absolute;
    top: 30%;
    right: 10px;
    transform: translateY(-50%);
    color: #ff0000;
    font-weight: bold;
     font-size: 14px;
    margin-top: 5px; 
}
.fa-eye-slash {
      color: #000000;
    position: absolute;
    top: 30%;
     right: 10px;
    transform: translateY(-50%);
    cursor: pointer;
    margin-top: 5px; 
}


</style>
</head>
<body>

<form id="login" action="#" class="container" method="POST">
  
 <a href="index.php" class="close-btn">
    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M3.88457 3.88457C4.00631 3.76266 4.15089 3.66594 4.31004 3.59995C4.46919 3.53397 4.63978 3.5 4.81207 3.5C4.98436 3.5 5.15495 3.53397 5.3141 3.59995C5.47325 3.66594 5.61783 3.76266 5.73957 3.88457L10.4996 8.64282L15.2596 3.88457C15.3814 3.76277 15.526 3.66615 15.6851 3.60023C15.8443 3.53431 16.0148 3.50039 16.1871 3.50039C16.3593 3.50039 16.5299 3.53431 16.689 3.60023C16.8482 3.66615 16.9928 3.76277 17.1146 3.88457C17.2364 4.00637 17.333 4.15097 17.3989 4.31011C17.4648 4.46925 17.4988 4.63982 17.4988 4.81207C17.4988 4.98432 17.4648 5.15489 17.3989 5.31403C17.333 5.47317 17.333 5.61777 17.1146 5.73957L12.3563 10.4996L17.1146 15.2596C17.3606 15.5056 17.4988 15.8392 17.4988 16.1871C17.4988 16.535 17.3606 16.8686 17.1146 17.1146C16.8686 17.3606 16.535 17.4988 16.1871 17.4988C15.8392 17.4988 15.5056 17.3606 15.2596 17.1146L10.4996 12.3563L5.73957 17.1146C5.49358 17.3606 5.15995 17.4988 4.81207 17.4988C4.46419 17.4988 4.13056 17.3606 3.88457 17.1146C3.63858 16.8686 3.50039 16.535 3.50039 16.1871C3.50039 15.8392 3.63858 15.5056 3.88457 15.2596L8.64282 10.4996L3.88457 5.73957C3.76266 5.61783 3.66594 5.47325 3.59995 5.3141C3.53397 5.15495 3.5 4.98436 3.5 4.81207C3.5 4.63978 3.53397 4.46919 3.59995 4.31004C3.66594 4.15089 3.76266 4.00631 3.88457 3.88457Z" fill="black"/>
    </svg>
  </a>
  <div class="logo-container">
    <img src="Images/Whelps logo/whelpslogo1.png">
  </div>
  <div class="content">
    <div class="content1">Welcome</div> 
    <div class="content2">It’s seems like you’re new here!</div> 
    <div class="content3">Please log in or sign up to continue using our matchmaking features.</div>
  </div>
  <div class="input-container">
        <input type="text" name="email" placeholder="Email" <?php if(isset($errors['email'])) echo 'class="error"'; ?>>
        <!-- Placeholder for email error -->
        <?php if(isset($errors['email'])): ?>
            <div class="error"><?php echo $errors['email']; ?></div>
        <?php endif; ?>
    </div>
    <div class="input-container">
        <input type="password" name="password" placeholder="Password" <?php if(isset($errors['password'])) echo 'class="error"'; ?>>
      <i class="fa-regular fa-eye" id="togglePassword"></i>
     
        <!-- Placeholder for password error -->
        <?php if(isset($errors['password'])): ?>
            <div class="error"><?php echo $errors['password']; ?></div>
        <?php endif; ?>
    </div>
  <button type="submit" name="btnsbt" class="btn login-btn">Login</button>
  <div class="divider">or</div>
  <button class="btn create-account-btn"><a href="sign_up.php" class="sign-up">Create New Account</a></button>
  <!-- <div class="g-signin2" data-onsuccess="onSignIn"></div> -->


 
</form>


<script>
     // Function to handle the sign-in process
    function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
        console.log('ID: ' + profile.getId());
        console.log('Name: ' + profile.getName());
        console.log('Image URL: ' + profile.getImageUrl());
        console.log('Email: ' + profile.getEmail());
        // You can send this information to your PHP backend using AJAX
    }

    // Initialize the Google API client with your API key and client ID
    function initGoogleApiClient() {
        gapi.load('auth2', function() {
            gapi.auth2.init({
                client_id: '723025816430-s2akpsab6sc12morsbvcnpkv98n3n1g9.apps.googleusercontent.com',
                // Add any additional scopes required
            });
        });
    }

   document.addEventListener('DOMContentLoaded', function() {
    initGoogleApiClient();
});


  


    // Get all input elements
    const inputs = document.querySelectorAll('.input-container input');

    // Loop through each input element
    inputs.forEach(input => {
        // Add event listener for input event
        input.addEventListener('input', function() {
            // Remove the error class from the input
            input.classList.remove('error');
            // Hide the error message associated with this input
            const errorMessage = input.nextElementSibling;
            if (errorMessage && errorMessage.classList.contains('error')) {
                errorMessage.style.display = 'none';
            }
        });
    });
    
    
    
    // Function to handle the click event on the eye icon
document.getElementById("togglePassword").addEventListener("click", function() {
    // Get the password input field
    var passwordField = document.querySelector('input[name="password"]');
  
    // Toggle the type attribute of the password input field
    if (passwordField.type === "password") {
        passwordField.type = "text"; // Show the password
        this.classList.remove("fa-eye"); // Change the eye icon to open eye
        this.classList.add("fa-eye-slash"); // Add the closed eye icon class
    } else {
        passwordField.type = "password"; // Hide the password
        this.classList.remove("fa-eye-slash"); // Change the eye icon to closed eye
        this.classList.add("fa-eye"); // Add the open eye icon class
    }
});


</script>

</body>
</html>
