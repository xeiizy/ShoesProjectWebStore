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
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <title>Products</title>
</head>
<body>
    
<header>
        <div class="inner">
            <div class="logo">
            <a href="index.php"> <!-- <img src="images/logo.png"> -->
                    <h1>LUX Chipici<span></span></h1></a>
            </div>
            <nav>
                <li><span><a href="loged.php">Home</a></span></li>
                <li><span><a href="upload.product.php">Upload Products</a></span></li>
                <li><span><a href="all.phones.php">All Products</a></span></li>
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


  
  
    <div class="product-main">
            <div class="product-upload">
            <div class="form-product">
            <h1>Upload Products</h1>
            <form action="upload.inc.php" method="post" autocomplete="off" enctype="multipart/form-data">
                <div class="input-box">
                    <input type="text" name="name" required>
                    <label>Brand</label>
                </div>
                <div class="input-box">
                    <input type="text" name="model" required>
                    <label>Model</label>
                </div>
               
                <div class="input-box">
                    <input type="text" name="price" required>
                    <label>Price</label>
                </div>
                <div class="img-upload">
                    <input type="file" name="file" id="file" required/>
                    <label for="file"><i class="fa-solid fa-upload"></i> Choose a Picture</label>
                </div>
                <button type="submit" name="submit" class="btn">Upload</button>
            </form>
        </div>
  
        





</body>
</html>