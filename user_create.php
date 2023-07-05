<?php
session_start();
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
  <form method="POST" action=" ">
    <h5>註 冊 會 員</h5>
    歡迎加入我們的會員❤<br>
    <div class="donut darkbg" style="margin:0 auto;">
      <center>
        <br>
        <input type="text" class="form-control" placeholder="請輸入帳號（登入時使用）*" name="new_acc" style="width:50%">
        <br>
        <input type="password" class="form-control" placeholder="請輸入密碼*" name="new_pwd" style="width:50%">
        <br>
        <input type="password" class="form-control" placeholder="請再次輸入密碼*" name="double_pwd" style="width:50%">
        <hr>
        <input type="text" class="form-control" placeholder="請輸入您的真實姓名*" name="new_name" style="width:50%">
        <br>
        <input type="text" class="form-control" placeholder="請輸入電話（如:0912345678）*" name="new_phone" maxlength="10" style="width:50%">
        <br>
        <button type="submit" class="btn btn-danger">加入會員❤</button>
        <button type="button" class="btn btn-outline-danger" onclick="location.href='user_login.php'">暫時不加入</button>
        <br><br>
      </center>
  </form>
  </div>
  <br>

  <!--註冊-->
  <?php

  include("configure.php");
  $link = new PDO('mysql:host=' . $hostname . ';dbname=' . $database . ';charset=utf8', $username, $password);

  $new_acc = isset($_POST["new_acc"]) ? $_POST["new_acc"] : null;
  $new_pwd = isset($_POST["new_pwd"]) ? $_POST["new_pwd"] : null;
  $double_pwd = isset($_POST["double_pwd"]) ? $_POST["double_pwd"] : null;
  $new_name = isset($_POST["new_name"]) ? $_POST["new_name"] : null;
  $new_phone = isset($_POST["new_phone"]) ? $_POST["new_phone"] : null;

  $query = "SELECT * FROM `account` WHERE 1";
  $result = $link->query($query);

  foreach ($result as $row) {

    $gacc = $row["Account"];

    if ($new_acc != null) {
      #判斷帳號是否有人使用
      if ($new_acc == $gacc) {
        echo "<script>alert('拍謝！此帳號已有人使用ㄌ！')</script>";
        echo "<meta http-equiv=REFRESH CONTENT=0;url='user_create.php'>";
        break;
      }
      #判斷帳號無人使用
      else {
        #當密碼不為空值時
        if ($new_pwd != null) {

          #當帳號為空值時
          if ($new_acc == null || $new_name == null || $new_phone == null) {
            echo "<script>alert('請填寫完整資訊！')</script>";
            echo "<meta http-equiv=REFRESH CONTENT=0;url='user_create.php'>";
            break;
          } else if ($new_pwd == $double_pwd) {
            $query = "INSERT INTO `account`(`Account`,`Password`,`name`,`phone`)VALUES('$new_acc','$new_pwd','$new_name','$new_phone')";
            $count = $link->exec($query);
            echo "<script>alert('註冊成功！請重新登入！')</script>";
            echo "<meta http-equiv=REFRESH CONTENT=0;url='user_login.php'>";
            break;
          }
          #有帳號、密碼及驗證密碼不相同
          else {
            echo "<script>alert('拍謝！兩次密碼不相同，請再輸入一次！')</script>";
            echo "<meta http-equiv=REFRESH CONTENT=0;url='user_create.php'>";
            break;
          }
        }
      }
    }
  }
  ?>


  <!--頁尾-->
  <script language="javascript" src="footer.js"></script>
  <!--頁尾結束-->

  <!-- Java script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>