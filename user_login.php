<?php
session_start();
include("configure.php");
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link href="mystyle.css" rel="stylesheet">
  <link rel="icon" href="images/icon.png" type="image/x-icon">
  <title>歡迎光臨！XXX Donut！</title>
</head>

<body>
  <!--導覽列開始-->
  <script language="javascript" src="navbar.js"></script>
  <!--導覽列結束-->

  <!-- 內文 -->
  <br><br><br><br>
  <form method="POST" action="user_check.php">
    <h5>登 入</h5>
    歡迎您的蒞臨❤<br>
    <div class="donut darkbg" style="margin:0 auto;">
      <center>
        <br>
        <input type="text" class="form-control" placeholder="帳號" name="login_acc" style="width:50%">
        <br>
        <input type="password" class="form-control" placeholder="密碼" name="login_pwd" style="width:50%">
        <br>
        <!--傳送帳號密碼-->
        <button type="submit" class="btn btn-danger">登入</button>
        <button type="button" class="btn btn-outline-danger" onclick="location.href='user_create.php'">沒有帳號嗎？註冊</button>
        <br><br>
      </center>
  </form>
  </div>

  <br>

  <!--頁尾-->
  <script language="javascript" src="footer.js"></script>
  <!--頁尾結束-->

  <!-- Java script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>