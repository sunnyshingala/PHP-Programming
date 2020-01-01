<?php
    include 'dbh.inc.php';

    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $password =  mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
     VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(! mysqli_stmt_prepare($stmt, $sql)){
        echo "Sql error"; 
    }else{
        mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $password);
        mysqli_stmt_execute($stmt);
    }
    mysqli_query($conn, $sql);


    header("Location: ../index.php?signup=success");