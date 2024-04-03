<?php
    require 'dbh.inc.php';
    session_start();
    $sql = "SELECT * FROM products";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
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
            <a href="loged.php"> <!-- <img src="images/logo.png"> -->
                    <h1>LUX Chipici<span></span></h1></a>
            </div>
            <nav>
                <li><span><a href="loged.php">Home</a></span></li>
                <li><span><a href="upload.product.php">Upload</a></span></li>
                <li><span><a href="all.phones.php">Products</a></span></li>
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


    <div class="div-p1">
    <?php
if($resultCheck > 0){
    
while ($row = mysqli_fetch_assoc($result))
{
?>
        <div class="box-item">
        <div class="img-data">
           <a href="">
           <img src="imgupload/<?php echo $row["IMAGE"];?>"></a>
        </div>
        <div class="pr-caption">
            <p class="product-name"><?php echo $row["NAME"];?></p>
            <p class="product-price"><?php echo $row["PRICE"];?></p>
            <p class="product-model"><?php echo $row["MODEL"];?></p>
        </div>
         <button class="add-item"  data-id="<?php echo $row["ID"]; ?>">Add to cart</button> 
         </div> 
         <?php
         }
        }
        ?>
     </div>       
     <script>
        var phonesID = document.getElementsByClassName("add-item");
        for(var i = 0; i<phonesID.length; i++){
            phonesID[i].addEventListener("click",function(event){
                var target = event.target;
                var id = target.getAttribute("data-id");


                alert(id);
            })
        }
        </script>
</body>
</html>