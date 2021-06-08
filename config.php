<?php
$db_name = "web_db";
$db_username = "root";
$db_password = "";
$db_host = "127.0.0.1";
$db_port = "3307";

$db_con = mysqli_connect($db_host, $db_username, $db_password, $db_name, $db_port);
if(!$db_con)
    $db_con = mysqli_connect($db_host, $db_username, $db_password, $db_name);
if(!$db_con)
    die("Cant connect to database");
?>