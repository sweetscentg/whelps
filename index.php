<?php 
include 'function.php'; 
include 'visit.php';
require 'conn.php';

function generateRandomUsername() {
    $prefix = "Guest";
    $suffix = rand(1000, 9999);
    return $prefix . $suffix;
}
function generateRandomUserId() {
    return rand(100000, 999999);
}

if (check_login(false)) {
    $_SESSION['user_name'] = $_SESSION['USERNAME'];
    $_SESSION['user_id'] = $_SESSION['USER_ID'];
    $userID = $_SESSION['user_id'];
    $result = $conn->query("SELECT image, user_type FROM users WHERE id = $userID");
            if ($row = $result->fetch_assoc()) {
                $image = $row['image'];
                $_SESSION['image'] = $image;
                $_SESSION['user_type'] = $row['user_type'];
            } else {
            echo 'Image not found';
            }

} else {
    $_SESSION['user_name'] = generateRandomUsername();
    $_SESSION['user_id'] = generateRandomUserId();
    $_SESSION['user_type'] = "site visitor";
    $imagePath = "../Images/Default.png";
    $_SESSION['image'] = $imagePath;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta property="og:image" content="Whelps.ico">
<link rel="icon" href="Whelpss2.ico" type="image/x-icon">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400..800&family=Caveat+Brush&family=Delicious+Handrawn&family=Inter:wght@100..900&family=Vujahday+Script&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>Whelps | Home</title>
<style>
     {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
    margin: 0;
    padding: 0; 
    font-family: "Inter", sans-serif;
  }

  li a.active {
      color: #FFC719; 
      }

   /*------Header and navbar styles------*/
 
  .navbar-container {
    background: transparent;
    display: flex;
    align-items: center;
    justify-content: space-between;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }

  /* Logo styles */
  .logo img {
      margin: 10px;
      width: 100px;
      height: 100px;
  }

  nav {
    display: flex;
    align-items: center;
  }

  nav ul {
    list-style-type: none;
    display: flex;
    align-items: center;
    margin-left: auto; /* Push the menu to the right */
  }

  nav ul li {
    margin-right: 20px;
  }

  nav ul li:last-child {
    margin-right: 0;
  }

  nav ul li a {
    text-decoration: none;
    color: #FFFFFF;
    font-weight: bold;
  }

  nav ul li a:hover {
    color: #FFC719;
  }

  /*  button styles */
  .login .btn {
    background-color: #FFC719;
    color: #fff;
    padding: 10px 50px;
    border-radius: 50px;
    text-decoration: none;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .login .btn:hover {
    background-color: #0F1010;
  }

  /* Center the dropdown icon */
  #menu-icon {
    display: none; /* Initially hide the icon */
  }

  /* Media query for responsiveness */
  @media (max-width: 768px) {
    .navbar-container {
      flex-direction: column;
      align-items: center;
    }

    nav ul {
      display: none;
      width: 100%;
      flex-direction: column;
      padding-top: 10px;
    }

    nav ul.open {
      display: flex;
    }

    nav ul li {
      margin-right: 0;
      margin-bottom: 10px;
    }

    .login {
      margin-top: 20px;
    }

    #menu-icon {
      display: flex; /* Show the icon when in mobile view */
    }
  }
  


  section{
  
  }

  .header-title{
    font-family: "Baloo Thambi 2", system-ui;
 
  }

  /*front page style*/
.front-page {
  position: relative;
  width: 100%;
  height: auto;  
  overflow: hidden; /* Hide any overflow content */
}

.front-page video {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  transform: translate(-50%, -50%);
  z-index: -1; /* Send the video behind other content */
}

.tagline {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  color: #ffffff;
}

.tagline h1 {
  font-family: "Vujahday Script", cursive;
  background: linear-gradient(to right, #FFC719, #BF033B);
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
  font-size: 4rem;
  
}
 
.tagline img{
  width: 50%;
}

@media screen and (max-width: 600px) {
      .tagline img {
        width: 80%; /* Adjust the width for smaller screens */
      }
    }

.tagline p {
  font-size: 1rem;
  line-height: 1.5;
}

/* Media queries for responsiveness */
@media (max-width: 768px) {
  .tagline {
    position: relative; /* Change position to relative */
    margin-top: 300px; /* Adjust margin-top for smaller screens */
    padding-top: 50px; /* Add padding-top to create space */
    
  }

  .tagline h1 {
    font-size: 2rem; /* Decrease the font size for smaller screens */
    margin-bottom: 10px; /* Decrease margin bottom for smaller screens */
  }

  .tagline p {
    padding: 20px;
    font-size: 0.8rem; /* Decrease the font size for smaller screens */
    line-height: 1.2; /* Adjust line height for better readability */
    margin-bottom: 20px; /* Keep margin bottom for consistency */
  }

  .joints {
    position: relative; /* Change position to relative */
    margin-top: 50px; /* Adjust margin-top for smaller screens */
    padding-top: 50px; /* Add padding-top to create space */
  }
}

.btn-adoptnow {
  font-family: "Baloo Thambi 2", system-ui;
  font-weight: 700;
  display: inline-block;
  padding: 10px 20px;
  background-color: #FFC719;
  color: #0F1010;
  text-decoration: none;
  border-radius: 5px;
  font-size: 1.2rem;
  transition: background-color 0.3s ease;
}

.btn-adoptnow:hover {
  color: #E82B2B;
}

/* Media query for responsiveness */
@media (max-width: 768px) {
  .btn-adoptnow {
    font-size: 1rem; /* Decrease the font size for smaller screens */
    padding: 8px 16px; /* Adjust padding for smaller screens */
  }
}

.joints {
    color: #ffffff;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    margin-top: 10px;
    margin-right: 10px;
  }

  .joints h3{
      font-size: 20px;
    font-weight: 700;
  }
  .joints img {
    width: 60px;
    height: auto;
  }

   /*media query responsive for joints logo*/
   @media screen and (max-width: 768px) {
    .joints {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 20px;
    bottom: 250px;
  }
  
  .joints img {
    margin: 0 auto; /* Center the image horizontally */
  }
}

   /*------front page style------*/


  /*style of featured pets*/
  
  .featured-pets h2{
      padding-top: 20px;
  }
  .featured-pets{
     background-image: url("Images/home/featured bg.jpg");
     background-size: cover;
     width: 100%;
     min-height: 100vh;
}
  /* Carousel Styles */
.carousel-container {
  position: relative;
  width:100%; /* Adjusted width */
  max-width: 700px;
  margin: 30px; /* Remove the auto margin */
  overflow: hidden; /* Ensure captions don't overflow */
}

/* Media query for responsiveness */
@media (max-width: 768px) {
  .carousel-container {
      width: 90%; /* Adjusted width for smaller screens */
      margin-left: 10px; /* Adjusted margin for smaller screens */
  }
}

.carousel-slide {
    display: none;
    text-align: center; /* Center captions */
    position: relative; /* Needed for absolute positioning */
}
.carousel-slide.active {
    display: block;
}
.carousel-navigation {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.carousel-navigation button {
    background: none;
    border: none;
    font-size: 24px;
    cursor: pointer;
    color: #555;
    transition: color 0.3s ease;
}
.carousel-navigation button:hover {
    color: #fff; /* Change color on hover */
}
.carousel-caption {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    text-align: center;
    color: #ffffff;
}
.caption-list {
    display: flex;
    justify-content: center;
    list-style: none;
    padding: 0;
}

.carousel-slide .caption-list {
    position: relative;
    height: auto;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.5);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
  }
  .carousel-slide:hover .caption-list {
    opacity: 1;
  }
.caption-list li {
    color: #ffffff;
    margin: 0 10px;
}

@media screen and (max-width: 768px) {
  .carousel-caption {
      text-align: center;
  }

  .caption-list {
      margin-top: 10px; /* Adjust the margin as needed */
  }
 }
.fa-regular-heart,
.fa-solid-heart {
    color: #FFC719;
    cursor: pointer;
    position: absolute;
    top: 10px;
    right: 10px;
}
  .fa-regular-heart.hide,
  .fa-solid-heart.hide {
      display: none;
  }
  /* Image Styles */
  .carousel-slide img {
      width: 100%; /* Image fills its container */
      height: auto; /* Maintain aspect ratio */
  } 
   /*------style of featured pets------*/
    

   /*style of rating and review*/
          .ratings-review{
              width: 100%;
              padding: 20px;
             min-height: 100vh;
             background-color: #FFC719;
             overflow-y: auto;
         }

    .comment-section {
            margin: 0 auto;
            padding: 20px;
          
            
        }
        
        .review {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: column;
        }
        
        .review:last-child {
            margin-bottom: 0;
        }
        
        .profile-pic {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 15px;
        }
        
        .review-info {
            flex: 1;
        }
        
        .review .author {
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .review .date {
            color: #666;
            font-size: 0.9em;
            margin-bottom: 10px;
        }
        
        .review .rating {
            color: #FFD700; /* Gold color */
            font-size: 1.2em;
            margin-bottom: 10px;
        }
        
        .review .content {
            font-size: 1.1em;
            line-height: 1.4;
            margin-bottom: 10px;
        }
        
        .review .comment-form {
            margin-top: 15px;
        }
        
        .review .comment-form textarea {
            width: 100%;
            padding: 10px;
            font-size: 1em;
            margin-bottom: 10px;
        }
        
        .review .comment-form input[type="submit"] {
            padding: 8px 15px;
            background-color: #FFC719;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .review .comment-form input:hover[type="submit"] {
        background-color: #EC9F05;
        }
        .comment-form {
            margin-top: 20px;
        }
        
        .comment-form label {
            display: block;
            margin-bottom: 5px;
        }
        
        .comment-form input[type="text"],
        .comment-form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        
        .comment-form button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
        .comment-form button:hover {
            background-color: #0056b3;
        }
        .comment-form {
            margin-top: 20px;
        }
        
        .comment-form label {
            display: block;
            margin-bottom: 5px;
        }
        
        .comment-form input[type="text"],
        .comment-form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }


    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .ratings {
        text-align: center;
        margin-bottom: 20px;
    }

    .ratings h3 {
        margin-bottom: 10px;
    }

    .ratings input[type="radio"] {
        display: none;
    }

    .ratings label {
        cursor: pointer;
        color: #ccc;
    }

    .ratings label i {
        font-size: 24px;
    }
    .ratings label:hover,
        .ratings label:hover 
        .ratings label {
                color: #FFC719;
            }

        .ratings input[type="radio"]:checked ~ label {
            color: #FFC719;
        }

    .review-input {
        width: 100%;
        padding: 8px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    .rating-scale {
        text-align: center;
        margin-bottom: 10px;
    }
    .comment-button {
        background-color: #FFC719;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        
    }
    .comment-button:hover {
        background-color: #EC9F05;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .ratings {
        text-align: center;
        margin-bottom: 20px;
    }

    .ratings h3 {
        margin-bottom: 10px;
    }

    .ratings input[type="radio"] {
        display: none;
    }

    .ratings label {
        cursor: pointer;
        color: #ccc;
    }

    .ratings label i {
        font-size: 24px;
    }
    .ratings label:hover,
        .ratings label:hover 
        .ratings label {
                color: #FFC719;
            }

        .ratings input[type="radio"]:checked ~ label {
            color: #FFC719;
        }

    .review-input {
        width: 100%;
        padding: 8px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    .rating-scale {
        text-align: center;
        margin-bottom: 10px;
    }
    .comment-button {
        background-color: #FFC719;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        
    }
    .comment-button:hover {
        background-color: #EC9F05;
    }

    
      

   /*style for adoption process*/
.Adoption-Process {
  padding: 20px;
  text-align: center;
}

.video-container {
    max-width: 100%;
    overflow: hidden;
    border-radius: 15px;
}

#myVideo {
    width: 50%;
    height: auto;
}

.Process-Content {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 20px;
}

.Adoption-Process h2{
  color: #EC9F05;
}

.Adoption-Process p{

}

.Process-Content div {
    flex: 0 1 calc(33.33% - 20px);
    margin: 10px;
    text-align: center;
}

.Process-Content img {
    width: 100%;
    max-width: 200px;
    height: auto;
}

.Process-Content1 img{
  margin-top: 55px;
}



@media (max-width: 768px) {
    .Process-Content div {
        flex-basis: 100%;
    }
    
    #myVideo{
        width: 100%;
    }
}

   /*------style for adoption process------*/

   /*style for contact and follow us*/
.Contact-Us {
    padding: 20px;
    text-align: center;
    font-family: "Baloo Thambi 2", system-ui;
    background-image: url("Images/home/contactus bg.jpg");
    background-size: cover;  
    color: #ffffff; 
   
    
}

.contact-section {
        display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}


.contact-info{
    display: flex;
    flex-direction: column;
}

.icon-envelope, .icon-phone{
    margin-bottom: 10px;
}

.contact-info, .follow-us {
 
    flex: 1;
    margin: 10px;
}

.social-icons {
    
    list-style: none;
    padding: 0;
}

.social-icons li {
    display: inline-block;
    margin-right: 10px;
}

.contact-icon {
    font-size: 24px;
    margin-right: 5px;
}

      .social-icons a {
      color: #333;
      text-decoration: none;
      font-size: 24px;
      transition: color 0.3s ease-in-out;
      }
      .social-icons a:hover {
      color: #FFC719;
      }

      .social-icons i {
      color: #333;
      text-decoration: none;
      font-size: 24px;
      transition: color 0.3s ease-in-out;
      }

      .social-icons i:hover {
      color: #FFC719;
      }

@media (max-width: 768px) {
    .contact-info, .follow-us {
        flex-basis: 100%;
    }
}

  /*------style for contact and follow us------*/

          /*style for footer*/
        footer {
            position: relative;
            padding: 20px; /* Adjust padding as needed */
            text-align: center;
            background-color: #0F1010;
    
        }

        footer img {
            width: 50px; /* Adjust width as needed */
            height: 50px; /* Maintain aspect ratio */
        }

        .copyright {
            margin-top: 10px; /* Adjust margin as needed */
            font-family: "Baloo Thambi 2", system-ui;
            font-size: 14px;
            color: #555;
        }

        @media (min-width: 768px) {
            footer {
                padding: 20px 50px; /* Adjust padding as needed for larger screens */
            }
        }
         .user-image {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-left: 10px;
        }
</style>
</head>
<body>
  <section class="front-page">
       <div class="navbar-container">
      <div class="logo">
         <img src="Images/Whelps logo/Whelpss2.ico">
      </div>
      <nav>
        <div id="menu-icon"><i class="fa-solid fa-bars"></i></div>
        <ul>
          <li><a class="active" href="index.php?user_id=<?php echo isset($_SESSION['user_id']) ? $_SESSION['user_id'] : ''; ?>">Home</a></li>
          <li><a href="user/pet_gallery.php?user_id=<?php echo isset($_SESSION['user_id']) ? $_SESSION['user_id'] : ''; ?>">Pet Gallery</a></li>
          <li><a href="user/adopt.php?user_id=<?php echo isset($_SESSION['user_id']) ? $_SESSION['user_id'] : ''; ?>">Adopt</a></li>
          <li><a href="user/donate.php?user_id=<?php echo isset($_SESSION['user_id']) ? $_SESSION['user_id'] : ''; ?>">Donate</a></li>
          <li><a href="user/about_us.php?user_id=<?php echo isset($_SESSION['user_id']) ? $_SESSION['user_id'] : ''; ?>">About Us</a></li>
        </ul>
      </nav>
      <div class="login">
      <?php
           if(check_login(false)){
            $image_session = $_SESSION['image'];
            $user_image = str_replace('../', '', $image_session);
            echo '<form action="logout.php" method="post"><input type="submit" value="Logout" class="btn"><a href="account_settings.php?user_id=' . (isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '') . '"><img src="' . $image . '" class="user-image"></a></form>';
          } else {
                echo '<a href="login.php" class="btn">Login</a>';
            }
      ?>
      </div>
    </div>
  <video autoplay muted loop>
      <source src="Videos/BG.mp4" type="video/mp4">
    </video>
    
      <!--tagline-->
    <div class="tagline">
      <h1>Discover love at first purr!</h1>
      <p>Purr-fect and wag-tastic companionship matchmaking adoption website.<br>
      At Whelps we're here to connect you with your feline pet or tail-wagging canine friend.<br>
        Get ready to embark on a journey of endless bond, one paw at a time!</p>
        <img src="Images/Whelps logo/whelpslogo2.png">
      <a href="check_login.php" class="btn-adoptnow">Adopt Now!</a>
    </div>
    
    <!--Joints-->
      <div class="joints">
      <h3>Whelps for a cause</h3>
    <a href="https://www.facebook.com/WhelpsPetSuppliesStore?mibextid=ZbWKwL">
        <img src="Images/Joints logo/whelps.png">
      </a>
      <h3>Joints</h3>
      <a href="https://web.facebook.com/LuckypetcarePH">
        <img src="Images/Joints logo/joints1.png">
      </a>
      <a href="https://www.facebook.com/maopulilan?mibextid=ZbWKwL">
        <img src="Images/Joints logo/joints2.png">
      </a>
      <a href="https://www.facebook.com/TheLittleBarkyard?mibextid=ZbWKwL">
        <img src="Images/Joints logo/joints3.png">
      </a>
      <a href="https://www.facebook.com/smcenterpulilan?mibextid=ZbWKwL">
        <img src="Images/Joints logo/joints4.png">
      </a>
      <a href="https://www.facebook.com/cachoinsurance?mibextid=ZbWKwL">
        <img src="Images/Joints logo/joints5.png">
      </a>
      <a href="https://www.facebook.com/Home4PawsInc?mibextid=ZbWKwL">
        <img src="Images/Joints logo/joints6.png">
      </a>
      <a href="https://www.facebook.com/tychogallery?mibextid=ZbWKwL">
        <img src="Images/Joints logo/joints7.png">
      </a>
      <a href="https://www.facebook.com/arttokart?mibextid=ZbWKwL">
        <img src="Images/Joints logo/joints8.png">
      </a>
    </div>
  </section>
    <section class="featured-pets">
         <h2 class="header-title">Featured Pets</h2>
         <div class="carousel-container">
            <?php
               require 'conn.php';
                $sql = "SELECT * FROM pets ORDER BY RAND() LIMIT 10"; 
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $pet_id = $row['pet_id'];
                        $pet_name = $row['pet_name'];
                        $pet_image = $row['pet_image'];
                        $pet_sex = $row['pet_sex']; 
                        $personality = $row['personality'];
                        $pet_age = $row['pet_age'];
                        $breed = $row['breed'];
                        $userId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';
                       
                      
                        $isFavorite = false;
                        $favoritesResult = $conn->query("SELECT * FROM favorites WHERE user_id = $userId AND pet_id = $pet_id");
                        if ($favoritesResult->num_rows > 0) {
                            $isFavorite = true; 
                        }
                        $image_path = str_replace('../', '', $pet_image);
                        echo '<div class="carousel-slide" data-pet-id="' . $pet_id . '">
                                <img src="' . $image_path . '" alt="' . $pet_name . '">';
                                if ($isFavorite) :
                                echo '<i class="fas fa-heart fa-solid-heart"></i>
                                    <i class="far fa-heart fa-regular-heart hide"></i>';
                            else :
                            echo    '<i class="far fa-heart fa-regular-heart"></i>
                                <i class="fas fa-heart fa-solid-heart hide"></i>';
                            endif;
                                echo '<div class="carousel-caption">
                                    <h2>' . $pet_name . '</h2>  
                                    <ul class="caption-list">
                                    <li>' . $pet_sex . '</li>
                                    <li>' . $personality . '</li>
                                    <li>' . $pet_age . '</li>
                                    <li>' . $breed . '</li>
                                </ul>
                                </div>
                            </div>';
                    }
                } else {
                    echo "No pets found.";
                }
                $conn->close();
            ?>
        <div class="carousel-navigation">
            <button onclick="prevSlide()"><i class="fas fa-chevron-left"></i></button>
            <button onclick="nextSlide()"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>

    <script>
           function addToFavorites(petId) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "add_to_favorites.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                }
            };
            xhr.send("pet_id=" + petId); 
        }
    
        function removeFromFavorites(petId) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "remove_from_favorites.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                }
            };
            xhr.send("pet_id=" + petId);
        }
    
    
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-slide');
        let slideInterval; 
    
        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }
    
        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }
    
        function showSlide(index) {
            slides.forEach((slide, i) => {
                if (i === index) {
                    slide.classList.add('active');
                } else {
                    slide.classList.remove('active');
                }
            });
        }
    
        function startAutoSlide() {
            slideInterval = setInterval(nextSlide, 3000); 
        }
    
        function stopAutoSlide() {
            clearInterval(slideInterval);
        }
    
        function checkIfFavorite(petId) {
            var userId = <?php echo isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 'null'; ?>;
            if (userId) {
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "check_favorite.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        var isFavorite = xhr.responseText === 'true';
                        toggleHeartIcons(petId, isFavorite);
                    }
                };
                xhr.send("pet_id=" + petId + "&user_id=" + userId);
            }
        }
    
        function toggleHeartIcons(petId, isFavorite) {
            var slide = document.querySelector('.carousel-slide[data-pet-id="' + petId + '"]');
            var regularHeart = slide.querySelector('.fa-regular-heart');
            var solidHeart = slide.querySelector('.fa-solid-heart');
    
            if (isFavorite) {
                regularHeart.classList.add('hide');
                solidHeart.classList.remove('hide');
            } else {
                regularHeart.classList.remove('hide');
                solidHeart.classList.add('hide');
            }
        }
    
        document.querySelectorAll('.carousel-slide').forEach(function(slide) {
            var petId = slide.dataset.petId;
            checkIfFavorite(petId);
        });
    
        document.querySelectorAll('.fa-heart').forEach(function(icon) {
            icon.addEventListener('click', function() {
                var petId = this.parentElement.dataset.petId;
                var isFavorite = !this.classList.contains('fa-solid-heart');
                toggleHeartIcons(petId, isFavorite);
                if (isFavorite) {
                    addToFavorites(petId);
                } else {
                    removeFromFavorites(petId);
                }
            });
        });
    
        startAutoSlide();
    </script>
    
      </section>

      <section class="Adoption-Process">
    <h2 class="header-title">Adopt Now!</h2>
    <p>Adoption process is just 3 easy steps</p>
    <div class="video-container">
        <video autoplay muted loop id="myVideo">
            <source src="Videos/Adoptionprocess.mp4" type="video/mp4">
        </video>
    </div>
    <div class="Process-Content">
        <div class="Process-Content1">
            <img class="content-img1" src="Images/home/3step/sample1.png">
            <h3>Step 1:<br>Initial Approval<br></h3>
            <p>Submit an adoption application with basic information. Will review the application to ensure it aligns with the pet's needs. Will contact applicants for additional details or clarification.</p>
        </div>
        <div class="Process-Content2">  
            <img class="content-img2" src="Images/home/3step/sample2.png">
            <h3>Step 2:<br>Home Visitation<br></h3>
            <p>Upon initial approval, will scheduled a home visit. Will assess the living environment for safety and suitability. Will provide guidance on creating a pet-friendly space if needed.</p>
        </div>  
        <div class="Process-Content3">
            <img class="content-img3" src="Images/home/3step/sample3.png">
            <h3>Step 3:<br>Final Approval<br></h3>
            <p>Following a successful home visit, the shelter owner will grant final approval. Adoption paperwork is completed are processed. Adopters receive information on pet care, vaccinations, and scheduled follow-ups.</p>
        </div>  
    </div>       
</section>
<section class="Contact-Us">
    <div class="contact-section">
        <div class="contact-info">
            <h3>Contact Us</h3>
            <ul class="social-icons">
                <div class="icon-envelope">
                <li><a href="mailto:chiel_anne.d@whelps.org"><i class="fas fa-envelope contact-icon"></i></a> Email: chiel_anne.d@whelps.org</li>
                </div>
                   <div class="icon-phone">
                <li><a href="tel:09778321152"><i class="fas fa-phone contact-icon"></i></a> Phone: 09778321152</li>
                   <div>
            </ul>
        </div>
        <div class="follow-us">
            <h3>Follow us</h3>
            <ul class="social-icons">
                <li><a href="https://www.facebook.com/Whelps.ph" target="_blank"><i class="fab fa-facebook"></i></a></li>
            </ul>
        </div>
    </div>
</section>
     <footer>
        <img src="Whelpss2.ico">
       <div class="copyright">
           &copy; 2024 Whelps Philippines. All rights reserved.
        </div>
    </footer>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const menuIcon = document.getElementById('menu-icon');
      const nav = document.querySelector('nav ul');

      menuIcon.addEventListener('click', function () {
        nav.classList.toggle('open');
      });
    });
  </script>
</body>
</html>
