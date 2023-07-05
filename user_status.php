<?php
session_start();
include("configure.php");

##取貨按鈕更改狀態

$number_detial = isset($_GET["ID"]) ? $_GET["ID"] : null;

$link = new PDO('mysql:host=' . $hostname . ';dbname=' . $database . ';charset=utf8', $username, $password);
$query = "UPDATE `order` SET `status`='已取貨' WHERE `number`='$number_detial'";
$count = $link->exec($query);

echo "<script>alert('狀態修改完成！')</script>";
echo "<meta http-equiv=REFRESH CONTENT=0;url='user_manager.php?ID=$number_detial'>";