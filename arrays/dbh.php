<?php 

$server = "localhost";
$username = "root";
$password = "root";
$db_name = "array_test";

$conn = mysqli_connect($server, $username, $password, $db_name);

if(!$conn){
    die("Connection Failed :" . mysqli_connect_error());
}