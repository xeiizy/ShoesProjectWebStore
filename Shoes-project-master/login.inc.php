<?php

    if(isset($_POST["login"])) {

        $email = $_POST["email"];
        $password = $_POST["password"];


        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';


        loginUser($conn, $password , $email);
    }
    else{
        header("location: Register.php");
        exit();

    }