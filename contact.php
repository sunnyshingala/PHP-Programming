<?php
    session_start();
    echo "contact Page";
    if(!isset($_SESSION['username'])){
        echo "you are not logged in ";
    }
    else{
        echo "You are loggedin";
    }
    echo $_SESSION['username']; 
?>