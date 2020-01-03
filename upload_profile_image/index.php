<?php
session_start();
include_once 'dbh.php';
?>

<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
        $sql = "SELECT * FROM user";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $sqlImg = "SELECT * FROM profileimg WHERE userid = '$id' ";
                $resultImg = mysqli_query($conn, $sqlImg);
                
                while ($rowImg = mysqli_fetch_assoc($resultImg)) {
                    echo "<div class='user-container'>";
                    if ($rowImg['status'] == 0) {
                        echo "<img src ='upload/profile" . $id . ".jpg?' ".mt_rand().">";
                    } else {
                        echo "<img src ='upload/profiledefault.png'>";
                    }
                    echo '<p>'. $row['username'] .'</p>';
                    echo "</div>";
                }
            }
        } else {
            echo "There are no user Yet!";
        }
        if (isset($_SESSION['id'])) {
            if ($_SESSION['id'] == 1) {
                echo "You're logged in as a user #1";
            }
            echo "<form action='upload.php' method='POST' enctype='multipart/form-data'>
                <input type='file' name='file'>
                <button type='submit' name='submit'> Upload</button>
            </form>";
        } else {
            echo "you are not logged in!";
            echo "<form action='signup.php' method='POST'>
                <input type = 'text' name='first' placeholder= 'First Name'> 
                <input type = 'text' name='last' placeholder= 'Last Name'> 
                <input type = 'text' name='uid' placeholder= 'User  Name'> 
                <input type = 'password' name='pwd' placeholder= 'Password'> 
                <button type='submit' name='submitsignup'>SignUp</button>
            </form>";
        }
    ?>
        <p>Login As User!</p>
        <form action="login.php" method="POST">
            <button type="submit" name="submitlogin">Login</button>
        </form>
        <p>Logout As User!</p>
        <form action="logout.php" method="POST">
            <button type="submit" name="submitlogout">Logout</button>
        </form>
</body>

</html>