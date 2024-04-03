<?php 

    require 'dbh.inc.php';
    if(isset($_POST["submit"])){

        $name = $_POST["name"];
        $price = $_POST["price"];
        $model = $_POST["model"];
       
        
        if($_FILES["file"]["error"] === 4){
            echo
            "<script> alert ('Image Does Not Exist'); </script>";
        }
        else{
            $fileName = $_FILES["file"]["name"];
            $fileSize = $_FILES["file"]["size"];
            $tmpName = $_FILES["file"]["tmp_name"];


            $validImageExtension = ['jpg', 'jpeg', 'png'];
            $imageExtension = explode('.', $fileName);
            $imageExtension = strtolower(end($imageExtension));
            if(!in_array($imageExtension, $validImageExtension)){
                echo
                "<script> alert ('Invalid Image Extension'); </script>";
            }
            else if($fileSize > 1000000){
                echo
                "<script> alert ('Image size is too large!'); </script>";
            }
            else{
                $newImageName = uniqid();
                $newImageName .= '.' . $imageExtension;
                
                move_uploaded_file($tmpName,'imgupload/' . $newImageName);
                $query = "INSERT INTO products (NAME,PRICE,IMAGE,MODEL) VALUES ( '$name', '$price', '$newImageName', '$model')";
                mysqli_query($conn, $query);
                echo
                "<script>
                alert('Successfully Added');
                document.location.href='loged.php';
                </script>";
            }
        }







    }