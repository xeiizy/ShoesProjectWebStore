<?php

function uidExists($conn, $password, $email){
    $sql = "SELECT * FROM Users WHERE EMAIL = ? OR PASSWORD = ?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo
        "<script>
        alert('Username taken');
        document.location.href='Register.php';
        </script>";
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss",$email, $password);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}





function createUser($conn, $name, $email, $password) {
    $sql = "INSERT INTO USERS (USERNAME, EMAIL, PASSWORD) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo
        "<script>
        alert('Username taken');
        document.location.href='Register.php';
        </script>";
        exit();
    }


    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    echo
        "<script>
        alert('Registered successfully!');
        document.location.href='loged.php';
        </script>";
    exit();
}

function loginUser($conn, $password, $email){
    $uidExists = uidExists($conn, $password, $email);
    if($uidExists == false){
        echo
        "<script>
        alert('User not found');
        document.location.href='Login.php';
        </script>";
        exit();
    }

    $passwordHashed = $uidExists["PASSWORD"];
    $checkPassword = password_verify($password, $passwordHashed);

    if($checkPassword === false)
    {
        echo
        "<script>
        alert('Wrong Login');
        document.location.href='Login.php';
        </script>";
    }
    else if ($checkPassword === true){
        
        $_SESSION["EMAIL"] = $uidExists["EMAIL"];
        echo
        "<script>
        alert('Logged successfully!');
        document.location.href='loged.php';
        </script>";
        exit();
    }
}