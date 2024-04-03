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
        <script src="https://kit.fontawesome.com/8606f03eb9.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
        <title>Register</title>
    </head>
    <body>
        <header>
            <div class="inner">
                <div class="logo">
                        <a href="index.php">
                        <h1> LUX Chipici<span></span></h1></a>
                </div>
                <nav>
                    <li><span><a href="">Reviews</a></span></li>
                    <li><span><a href="">Products</a></span></li>
                    <li><span><a href="">Advertisement</a></span></li>
                    <div class="icons-header">
                        <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                        <a href="Login.php"><i class="fa-solid fa-user"></i></a>
                    </div>
                </nav>
            </div>
        </header>
        
        <div class="wrapper-main">
            <div class="wrapper">
                <div class="form-box login">
                    <h2>Registration</h2>
                    <form action="signup.inc.php" method="post">
                        <div class="input-box">
                            <span class="icon"><i class="fa-solid fa-user"></i></span>
                            <input type="text" name="name" required>
                            <label>Username</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                            <input type="email" name="email" required>
                            <label>Email</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><i class="fa-solid fa-lock"></i></span>
                            <input type="password" name="password" required>
                            <label>Password</label>
                        </div>
                        <div class="remember-forgot">
                            <label><input type="checkbox" required>
                                I agree to the terms & conditions</label>
                        </div>
                        <button type="submit" name="submit" class="btn">Register</button>
                        <div class="login-register">
                            <p>Already have an account?<a href="Login.php" class="login-link"> Login</a></p>
                        </div>
                    </form>
                </div>
            </div>  
        </div>

        <script src="script.js"></script>


    </body>
</html>