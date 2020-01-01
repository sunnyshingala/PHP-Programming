<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
</head>

<body>
        <form action = "./includes/signup.inc.php" method="POST">
            <input type="text" name="first" placeholder="First name">
            <br>
            <input type="text" name="last" placeholder="Last name">
            <br>
            <input type="text" name="email" placeholder="email">
            <br>
            <input type="text" name="uid" placeholder="user id">
            <br>
            <input type="text" name="password" placeholder="Password">
            <br>
            <button type="submit" name="submit">Sign Up</button>
        </form>
        
</body>

</html>