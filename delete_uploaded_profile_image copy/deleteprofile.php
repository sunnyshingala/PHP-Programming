<?php

session_start();
include_once 'dbh.php';

$session_id = $_SESSION['id'];

$filename = "upload/profile" .$session_id. "*";
$fileinfo = glob($filename);
$fileext = explode(".", $fileinfo[0]);
$file_actual_ext = $fileext[1];

$file = "uploads/profile".$session_id.".".$file_actual_ext;

if(!unlink($link)){
    echo "File was not deleted!"; 
}else{
    echo "File was deleted!"; 
}

$sql = "UPDATE profileimg SET status =1 WHERE userid= '$session_id';";

mysqli_query($conn, $sql);

header("Location: index.php? deletesuccess");