<?php

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
                $fileNameNew = uniqid('', true). "." . $fileActualExtension;
                $fileDestination = 'upload/' .$fileNameNew;
                move_uploaded_file($filetmpName, $fileDestination);
                header('Location: index.php?upload:success');
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