<?php
    
    if(isset($_POST['submit'])){
        include 'dbh.inc.php';
        $first = $_POST["first"];
        $last = $_POSTlast["last"];
        $email = $_POST["email"];
        $uid = $_POST["uid"];
        $password = $_POST["password"];

        if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($password)){
            header("Location: ../index.php?signup=empty");
        }else{
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location: ../index.php?signup=invalide mail");
            } else{
                echo "Sign Up the user";
            }
        }
    }else{
        header("Location: ../index.php?signup=error");
    }