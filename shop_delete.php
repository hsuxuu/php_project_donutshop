<?php
session_start();
include("configure.php");

$shop_ID = $_GET["shop_ID"];

$link = new PDO('mysql:host=' . $hostname . ';dbname=' . $database . ';charset=utf8', $username, $password);
$query = "DELETE FROM `car` WHERE $shop_ID = `ID`";
$count=$link->exec($query);
header("Location: shop.php");
?>