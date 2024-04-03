<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/8606f03eb9.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <title>Loged view</title>
</head>
<body>
    <header>
        <div class="inner">
            <div class="logo">
            <a href="loged.php"> <!-- <img src="images/logo.png"> -->
                    <h1> LUX Chipici<span></span></h1></a>
            </div>
            <nav>
                <li><span><a href="loged.php">Home</a></span></li>
                <li><span><a href="upload.product.php">Upload phone</a></span></li>
                <li><span><a href="all.phones.php">All phones</a></span></li>
                <?php 
                    if(isset($_SESSION["usersID"]))
                     {
                        echo "<li><span><a href='logout.inc.php'>Log out</a></span></li>";
                     }
                     else{
                        echo"<li><span><a href='Register.php'>Log in</a></span></li>";

                      }
    ?>
                <div class="icons-header">
                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                   <a href=""><i class="fa-solid fa-user"></i></a>
                </div>
            </nav>
        </div>
    </header>

        <div class="background-cart">
        <div class="cart">
                      <div class="img-cart">
                      <img src="images/HUAWEI.png">
                      </div>
                      <div class="caption">
                      <p class="cart-name">NIKE AIRMAX</p>
                    <p class="cart-price">450$</p>
                    <button class="remove">Remove </button> 
                      </div>
        </div>
        </div>



    </body>
</html>