<?php 
    session_start();
    //GLOBALS
    //$_GET
   
    
    // $x = 10;
    
    // function somthing(){
    //     $y = 10;
    //     echo $GLOBALS['x'];
    // }
    // something();

    //$_POST
    
    //$_COOKIE

    //$_SESSION

    ECHO $_GET['name'];
?>
<html>
    <head>

    </head>
    <body>
        <form method="GET">
            <input type="hidden" name="name" value="Suny">
            <button type="submit">Press Me!!</button>
        </form>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </body>


    <?php
        $_SESSION['username'] = "sunny0908";
        echo $_SESSION['username']; 

        if(!isset($_SESSION['username'])){
            echo "you are not logged in ";
        }
        else{
            echo "You are loggedin";
        }
    ?>
</html>