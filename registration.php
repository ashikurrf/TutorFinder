<?php
$link = mysqli_connect("localhost", "root", "", "tutor_db");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if( isset($_POST['submit']) ){
    
    $name = $_POST['name'];
    $qualification = $_POST['qualification'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $search = $_POST['search'];

   if( !empty($_POST['name']) && !empty($_POST['qualification']) &&  !empty($_POST['email']) && !empty($_POST['phone'])  && !empty($_POST['subject']) &&  !empty($_POST['search']) )
    {
        $query = "INSERT INTO user_information(name,qualification,email,phone,subject,search) values ('$name','$qualification','$email', '$phone','$subject','$search')";
	    $result = mysqli_query($link,$query);
        // var_dump( $result );
    }   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div class="head">
        <ul >
            <li><a href="index.php">TutorFinder
                </a></li>
            <li><a href="#">Contact</a></li>
          </ul>
    </div>
    <div class="head-reg">
        <h1>Teacher Register</h1>
    </div>
    <div class="registration">
        <form class="reg" method="POST" actiion="">
            <label for="name">Username</label>
            <br>
            <input type="text" name="name" placeholder="Enter Your Name" required>
            <br><br>
            <label for="qualification">Qualification</label>
            <br>
            <input type="text" name="qualification" placeholder="Enter Your Qualification" required>
            <br><br>
            <label for="email">Email</label>
            <br>
            <input type="text" name="email" placeholder="yourname@mail.com" required>
            <br><br>
            <label for="phone">Phone</label>
            <br>
            <input type="tel" name="phone" placeholder="phone" required>
            <br><br>
            <label for="subject">Subject Name</label>
            <br>
            <input type="text" name="subject" placeholder="Enter your subject's " required> 
            <br><br>
            <label for="search">Search key</label>
            <br>
            <input type="text" name="search" placeholder="Enter your Search key " required>
            <br><br>
            <button type="submit" name="submit">Submit</button>
        </form>  
    </div>
  
</body>
</html>