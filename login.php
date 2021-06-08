<?php
session_start();

include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    // $password = md5($_POST["password"]);
    $query = "SELECT id FROM users WHERE username='$username' and password='$password'";
    $result = mysqli_query($db_con, $query);
    echo $query;
    if(!$result) die("Cant connect");

    while ($row = mysqli_fetch_array($result)) {
        $_SESSION["userId"] = $row["id"];
        $_SESSION["username"] = $username;
    }

    header("Location: http://localhost");
    exit;
}
