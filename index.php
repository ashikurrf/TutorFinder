<?php
$link = mysqli_connect("localhost", "root", "", "tutor_db");
$query = "select * from user_information";
$result = mysqli_query($link,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuitor</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="head">
        <ul >
            <li><a href="#">TutorFinder
                </a></li>
            <li><form action="/action_page.php">
                <input type="search" id="gsearch" name="gsearch" placeholder="Search Subject">
                <input type="submit">
              </form></li>
            <li><a href="#">Contact</a></li>
            <li><a href="./registration.php"> Teacher Registration</a></li>
          </ul>
    </div>
    <div class="main-content">
        <div class="grid-container">
        <?php
                while($row = mysqli_fetch_array($result))
                {
                    echo '<div class="info">
                        <h6>Name : '.$row['name'].'</h6>
                        <h6>Qualification:  '.$row['qualification'].'</h6>
                        <h6> Email :  '.$row['email'].'</h6>
                        <h6>Phone :  '.$row['phone'].'</h6>
                        <h6>Subject Name:  '.$row['subject'].'</h6>
                    </div>';
                }
            ?>  
    </div>
</div>
    </div>
    <footer class="footer">
        <ul>
             <li>TutorFinder</li>
            <li>Riadh</li>
        </ul>

    </footer>
</body>
</html>