<?php
    include './includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Include</title>
</head>

<body>
        <form action="">
            <input type="text" name="first" placeholder="First name">
            <br>
            <input type="text" name="last" placeholder="Last name">
            <br>
            <input type="text" name="email" placeholder="email">
            <br>
            <input type="text" name="uid" placeholder="user id">
            <br>
            <input type="password" name="password" placeholder="Password">
            <br>
            <button type="submit" name="submit">Sign Up</button>
        </form>
        <?php
        // select Data start
        // $sql = "SELECT * from users WHERE user_first = 'Sunny';";
        // $result = mysqli_query($conn, $sql);
        
        // $result_check = mysqli_num_rows($result);
        
        // if($result_check > 0){
        //     while ($row = mysqli_fetch_assoc($result)) {
        //         echo '<pre>';
        //         echo $row['user_uid'] . '<br>';
        //     }
        // }else {
        //     echo "No data found";
        // }
        
        // select Data end

        // insert Data start
        $sql = "insert into users (user_first, user_last, user_email, user_uid, user_pwd) values ('Viv', 'shingala', 'vivs@gmail.com', 'viv1', 'test0002');";
        mysqli_query($conn, $sql);
        // insert Data end
        ?>
</body>

</html>