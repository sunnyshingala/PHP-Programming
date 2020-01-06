<?php 
$path = "upload/profile1.jpg";
if (!unlink($path)){
    echo "you have an error";
}else{
    echo "You have delete file!";
    header("Location: index.php?delete success");
}