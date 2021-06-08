<?php
session_start();
include("../config.php");

$productId = isset($_REQUEST['productId']) ? $_REQUEST['productId'] : "";
$quantity = isset($_REQUEST['quantity']) ? $_REQUEST['quantity'] : "";


if (@!isset($_SESSION["cart"][$productId])) {
    $_SESSION["cart"][$productId] = 0;
}

$_SESSION["cart"][$productId] += $quantity;

if (@!isset($_SESSION["quantitySum"])) {
    $_SESSION["quantitySum"] = 0;
}
$_SESSION["quantitySum"] += $quantity;
var_dump($_SESSION);
?>