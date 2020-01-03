<?php 

    $input = "test@123";
    echo $hased_pwd_indb = password_hash("test@123", PASSWORD_DEFAULT);
    echo '<br>';
    echo password_verify($input, $hased_pwd_indb);
?>