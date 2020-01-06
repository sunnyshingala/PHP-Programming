<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mail_from = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    

    $mailTo = "sunny.singala@gmail.com";
    $headers = "From: " . $mail_from;
    $txt = "you have and reaceived  an email from " . $name . ".\n\n" . $message;
    mail($mailTo, $subject,$txt,$headers);
    header("Location: index.php?mailsent");
}