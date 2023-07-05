<?php
session_start();
include("configure.php");

$link = new PDO('mysql:host=' . $hostname . ';dbname=' . $database . ';charset=utf8', $username, $password);

#login_帳號密碼 = user輸入的帳號密碼
$login_ACC = isset($_POST["login_acc"]) ? $_POST["login_acc"] : null;
$login_PWD = isset($_POST["login_pwd"]) ? $_POST["login_pwd"] : null;

$query = "SELECT * FROM `account` WHERE `Account`='$login_ACC'";
$result = $link->query($query);

$ID = "";
$ACC = "";
$PWD = "";

#$_ID帳號密碼 = 資料庫中的資料
foreach ($result as $row) {
  $ID = $row["ID"];
  $ACC = $row["Account"];
  $PWD = $row["Password"];
}

#帳號不為空值的狀態下帳號密碼相同
if (($ACC == $login_ACC) && ($PWD == $login_PWD) && ($ACC != "")) {
  #利用$_SESSION['userID']紀錄現在登入的帳號
  $_SESSION['userID'] = $ID;
  echo "<script>alert('" . $ACC . "，登入成功～！')</script>";
  echo "<meta http-equiv=REFRESH CONTENT=0;url='user.php'>";
}
#密碼錯誤
else if (($ACC == $login_ACC) && ($PWD != $login_PWD)) {
  echo "<script>alert('密碼錯誤，請再試一次！')</script>";
  echo "<meta http-equiv=REFRESH CONTENT=0;url='user_login.php'>";
}
#帳號不存在
else {
  echo "<script>alert('帳號不存在，歡迎註冊帳號ㄛ！')</script>";
  echo "<meta http-equiv=REFRESH CONTENT=0;url='user_login.php'>";
}
?>
