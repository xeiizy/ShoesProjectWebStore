<?php
    // if(isset($_POST["register"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        
        require_once 'functions.inc.php';
        require_once 'dbh.inc.php';
    //     


    //     if (uidExists($conn, $name, $email) !== false){
    //     echo
    //     "<script>
    //     alert('Username or Email taken');
    //     document.location.href='Register.php';
    //     </script>";
    //     exit();
    //    }


       

    // }
    createUser($conn, $name, $email, $password);

    //  else{
    //     header("location: Register.php");
    // }