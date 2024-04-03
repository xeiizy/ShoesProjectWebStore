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
            <a href="loged.php">  <!-- <img src="images/logo1.png"> -->
                    <h1>LUX Chipici<span></h1></a>
            </div>
            <nav>
                <li><span><a href="loged.php">Home</a></span></li>
                <li><span><a href="upload.product.php">Upload Products</a></span></li>
                <li><span><a href="all.phones.php">Products</a></span></li>
                <li><span><a href='logout.inc.php'>Log out</a></span></li>
                <div class="icons-header">
                    <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
                   <a href=""><i class="fa-solid fa-user"></i></a>
                </div>
            </nav>
        </div>
    </header>



    <div class="text-box">
        <h1>Find your new shoes</h1>
        <p>Be up to date and shop all the latest models 
        of your favorite brands - join today!</p>
        <a href="all.phones.php">Shop now</a>
    </div>
    <div class="user-box">
    <img src="images/Background.jpg">
    </div>



    <section class="section-p1">
    <div class="features-box">
     <img src="images/free-delivery.png">
        <h6>Free Shipping</h6>
    </div>
    <div class="features-box">
        <img src="images/online-order.png">
           <h6>Online Order</h6>
       </div>
       <div class="features-box">
        <img src="images/salary_2.png">
           <h6>Save Money</h6>
       </div>
       <div class="features-box">
        <img src="images/deal_2.png">
           <h6>Happy Sell</h6>
       </div>
       </div>
    </section>
    


    <section class="section-p2">
        <div class="featured-products">
            <h2>Featured Products</h2>
        <div class="product-container">
        <div class="product">
            <a href="#"><img src="images/Nike.png"></a>
        <div class="descripton">
           
        </div>
          </div>
          <div class="product">
            <a href="#"><img src="images/Adidas.png"></a>
            <div class="descripton">
               
            </div>
              </div>
              <div class="product">
                <a href="#"><img src="images/New Balance.png"></a>
                <div class="descripton">
                   
                </div>
                  </div>
                  <div class="product">
                    <a href="#"><img src="images/Puma.png"></a>
                    <div class="descripton">
                       
                    </div>
                      </div>                          
                        </div>
                        </div>
    </section>


    <section class="section-banner">
        <div class="background">
        <h2>Our goal</h2>
        <h4>Give the best god daim pair of sneekers in the world!</h4>
    </div>
    </section>


    <section class="section-news">
        <div class="title-txt">
        <h2>Motivational qutes</h2>
        </div>
            <div class="news-box">
                <div class="news">
                    <a href="#"><img src="images/Nike2.png">
                    <div class="overlay"></div>
                    <div class="news-desc">
                        <h3>Nike</h3>
                        <p>Train Insane or Remain The Same </p>
                        <p>Hard Stuck Plat 4 </p>
                    </a>
                    </div>
                </div>
                <div class="news">
                    <a href="#"><img src="images/Adidas2.webp">
                    <div class="overlay"></div>
                    <div class="news-desc">
                        <h3>ADIDAS</h3>
                        <p>Put on your adidas and step off</p>
                    </a>
                    </div>
                <!--</div>
                <div class="news">
                    <a href="#"><img src="images/Puma2.jpg">
                    <div class="overlay"></div>
                    <div class="news-desc">
                        <h3>REVIEW: PUMA</h3>
                        <p>"It's very easy to be diffrent but very difficult to be better"</p>
                    </a>
                    </div>
                </div>
                <div class="news">
                    <a href="#"><img src="images/nb2.jpg">
                    <div class="overlay"></div>
                    <div class="news-desc">
                        <h3>NEW BALANCE XD</h3>
                        <p>"Strong is the new run with balance"</p>
                    </a>
                    </div>
                </div>
            </div>  --> 


    </section>


<footer class="footer">
 <div class="container-footer">
    <div class="row">
        <div class="footer-col">
            <h4>company</h4>
            <ul>
                <li><a href="#">About us</a></li>
                <li><a href="#">Our services</a></li>
                <li><a href="#">Advertisement</a></li>
                <li><a href="#">Privacy police</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>Useful links</h4>
            <ul>
                <li><a href="#">News</a></li>
                <li><a href="#">Reviews</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>Useful links</h4>
            <ul>
                <li><a href="#">News</a></li>
                <li><a href="#">Reviews</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>
        </div>
        <div class="footer-col">
           <div class="social-links">
            <h4>Follow us</h4>
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
    </div>
 </div>

    </footer>



</body>
</html>