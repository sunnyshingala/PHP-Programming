<?php
session_start();
include_once 'dbh.php';

$id = $_SESSION['id'];
if(isset($_POST["submit"])){
     $file = $_FILES['file'];
     $filename = $_FILES['file']['name'];
     $filetmpName = $_FILES['file']['tmp_name'];
     $fileSize = $_FILES['file']['size'];
     $fileError = $_FILES['file']['error'];
     $fileType = $_FILES['file']['type'];

     $file_ext = explode('.', $filename);
     $fileActualExtension = strtolower(end($file_ext));
     
     $allowd = array("jpg", "jpeg", 'png', 'pdf');

     if (in_array($fileActualExtension, $allowd)) {
         if($fileError === 0){
            if($fileSize < 1000000){
                $fileNameNew = "profile" .$id. "." .$fileActualExtension;
                $fileDestination = 'upload/' .$fileNameNew;
                move_uploaded_file($filetmpName, $fileDestination);
                $sql = "UPDATE profileimg SET status = 0 WHERE userid = '$id';";
                $sql = "UPDATE profileimg SET status = 0 WHERE userid = '$id';";
                $result = mysqli_query($conn, $sql);
                header('Location: index.php?uploadsuccess');
            }else{
                echo "Your file is too big!";
            }
         }else{
             echo "There was and error with you upload file";
         }
     }else {
         echo "you can not upload file of this type!!";
     }

}