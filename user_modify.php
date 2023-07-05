<?php
session_start();
include("configure.php");

#假如$_SESSION['userID']為空值表示沒有登入
if ($_SESSION['userID'] == null) {
  echo "<script>alert('請先登入會員！')</script>";
  echo "<meta http-equiv=REFRESH CONTENT=0;url='user_login.php'>";
} else {
  $link = new PDO('mysql:host=' . $hostname . ';dbname=' . $database . ';charset=utf8', $username, $password);

  $query = "SELECT * FROM `account` WHERE `ID`='$_SESSION[userID]'";
  $result = $link->query($query);

  $ID = "";
  $ACC = "";
  $PWD = "";
  $NAME = "";
  $PHONE = "";

  #獲取現在登入者的帳號密碼
  foreach ($result as $row) {
    $ID = $row["ID"];
    $ACC = $row["Account"];
    $PWD = $row["Password"];
    $NAME = $row["name"];
    $PHONE = $row["phone"];
  }
}

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
  <title>修改資訊</title>
</head>

<body>
  <!--頁首-->
  <script language="javascript" src="footer.js"></script>
  <!--頁首結束-->
  <!-- 內文 -->
  <img src="images/logo.png" width="30%">
  <h2>修改個人資訊</h2>
  （不輸入即不修改該資料）
  <hr>
  <center>
    <form method="POST" action="">
      <h5>姓名</h5>
      <input class="form-control" type="text" value="<?php echo $NAME; ?>" readonly style="width:50%;">
      <br>
      <h5>修改電話號碼</h5>
      <input type="text" class="form-control" placeholder="目前電話：<?php echo $PHONE; ?>" name="new_phone" maxlength="10" style="width:50%">
      <br>
      <h5>修改密碼</h5>

      <input type="password" class="form-control" placeholder="請輸入密碼" name="new_pwd" style="width:50%">

      <input type="password" class="form-control" placeholder="請再次輸入密碼" name="double_pwd" style="width:50%">
      <hr>

      <h5>請輸入現在的密碼以完成修改</h5>
      <input type="password" class="form-control" value="" name="g_pwd" style="width:50%">
      <br>
      <button type="submit" class="btn btn-outline-danger">確認修改</button>
      <button type="button" class="btn btn-danger" onclick="window.close();">取消</button>
      <br><br>
    </form>
  </center>
  <!--頁尾-->
  <script language="javascript" src="footer.js"></script>
  <!--頁尾結束-->

  <!-- Java script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  <!--修改個人資料php-->
  <?php
  $newphone = isset($_POST["new_phone"]) ? $_POST["new_phone"] : null;
  $newpwd = isset($_POST["new_pwd"]) ? $_POST["new_pwd"] : null;
  $doublepwd = isset($_POST["double_pwd"]) ? $_POST["double_pwd"] : null;
  $gpwd = isset($_POST["g_pwd"]) ? $_POST["g_pwd"] : null;

  #更新
  #假如目前密碼不為空值
  if ($gpwd != null) {
    #假如目前密碼正確
    if ($gpwd == $PWD) {
      #只想修改電話
      if ($newphone != null && $newpwd == null) {
        $query = "UPDATE `Account` SET `phone`='$newphone' WHERE `ID`='$ID'";
        $count = $link->exec($query);
        #只想修改密碼
      } else if ($newphone == null && $newpwd != null) {
        #兩次密碼都正確 成功修改
        if ($newpwd == $doublepwd) {
          $query = "UPDATE `Account` SET `Password`='$newpwd' WHERE `ID`='$ID'";
          $count = $link->exec($query);
          #兩次密碼不同 修改失敗
        } else {
          echo "<script>alert('修改密碼兩次皆不相同，修改失敗！')</script>";
          echo "<script>window.close();</script>";
        }
        #修改電話及密碼
      } else if ($newphone != null && $newpwd != null) {
        #兩次密碼皆相同 修改成功
        if ($newpwd == $doublepwd) {
          $query = "UPDATE `Account` SET `Password`='$newpwd' WHERE `ID`='$ID'";
          $count = $link->exec($query);
          $query = "UPDATE `Account` SET `phone`='$newphone' WHERE `ID`='$ID'";
          $count = $link->exec($query);
          #兩次密碼不同 修改失敗
        } else {
          echo "<script>alert('修改密碼兩次皆不相同，因此資料皆修改失敗！')</script>";
          echo "<script>window.close();</script>";
        }
      }
      #目前密碼錯誤
    } else {
      echo "<script>alert('密碼錯誤，修改失敗！')</script>";
      echo "<script>window.close();</script>";
    }
    #if $coumt = true
    if ($count) {
      echo "<script>alert('資料修改成功！')</script>";
      echo "<script>window.opener.location.reload();</script>";
      echo "<script>window.close();</script>";
    }
  }
  ?>


</body>



</html>