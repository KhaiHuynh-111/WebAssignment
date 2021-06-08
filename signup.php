<?php
include 'config.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $about = $_POST["about"];
    $result = mysqli_query($db_con, "INSERT INTO users VALUES (10, '$firstName', '$lastName','$username', '$password', '$phone', '$address', '$about')");
}

var_dump($_POST);
// header("Location: http://localhost");
// exit;
