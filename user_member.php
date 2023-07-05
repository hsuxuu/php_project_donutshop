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

  $ACC = "";
  $PWD = "";
  $NAME = "";
  $PHONE = "";

  #獲取現在登入者的帳號密碼
  foreach ($result as $row) {
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
  <title>歡迎光臨！XXX Donut！</title>
</head>

<body>
  <!--導覽列開始-->
  <script language="javascript" src="navbar.js"></script>
  <!--導覽列結束-->
  <!-- 內文 -->
  <br><br><br><br>
  <img src="images/logo.png" width="100px"><br><br>
  <h2>會員中心</h2>
  <div class="container">
    <div class="row align-items-center">
      <div class="col donut whitebg">
        <br>
        <h5>會員您好！目前登入帳號：<?php echo $ACC; ?></h5>
        <button type="button" class="btn btn-outline-danger" onclick="location.href='user_logout.php'">登出</button>
        <hr>
        <h5>個人資料</h5>
        您的姓名 [ <?php echo $NAME; ?> ]<br>
        您的電話 [ <?php echo $PHONE; ?> ]<br>
        <button type="button" class="btn btn-danger" onclick="window.open(' user_modify.php', '修改', config='height=700,width=ˊ600')">修改個人資訊</button>
        <hr>
        <h5>訂單紀錄</h5>
        <!--顯示訂單編號連結-->
        <?php
        $link = new PDO('mysql:host=' . $hostname . ';dbname=' . $database . ';charset=utf8', $username, $password);
        $query = "SELECT * FROM `order` WHERE `user`= $_SESSION[userID] ";
        $result = $link->query($query);

        echo "<table class='table table-hover'>";
        echo "<thead>
                <tr>
                  <td scope='col' align='center' valign='middle'>訂單編號</th>
                  <td scope='col' align='center' valign='middle'>需取貨日期</th>
                  <td scope='col' align='center' valign='middle'>訂單狀態</th>
                </tr>
                </thead>";
        echo "<tbody>";

        foreach ($result as $row) {
          $number = $row["number"];
          $date = $row["date"];
          $time = $row["time"];
          $description = $row["description"];
          $total = $row["total"];
          $ps = $row["ps"];
          $status = $row["status"];
          echo "<tr>";
          echo "<td align='center' valign='middle'><a href='?ID=$number'>#$number</td></a></td>";
          echo "<td align='center' valign='middle'>$date</td>";
          echo "<td align='center' valign='middle'>$status</td>";
          echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        ?>
        <!--顯示訂單編號連結結束-->
      </div>
      <div class="col-sm-1">
      &nbsp
      </div>
      <div class="col donut darkbg "style="text-align:justify;">
      <br>
      <h5>詳細訂單資料</h5>
        <hr>
        <?php
        $number_detial = isset($_GET["ID"]) ? $_GET["ID"] : null;
        if ($number_detial == null) {
          echo "點選訂單編號，顯示訂單詳細資料！";
        } else {
          $link = new PDO('mysql:host=' . $hostname . ';dbname=' . $database . ';charset=utf8', $username, $password);
          $query = "SELECT * FROM `order` WHERE `number`= $number_detial ";
          $result = $link->query($query);


          foreach ($result as $row) {
            $date_detial = $row["date"];
            $time_detial = $row["time"];
            $description_detial = $row["description"];
            $total_detial = $row["total"];
            $ps_detial = $row["ps"];
            $status_detial = $row["status"];
          }
          echo "<h5>訂單編號：#$number_detial</h5><hr>";
          echo "<h6>訂單取貨日期：$date_detial<br>";
          echo "訂單取貨時間：$time_detial<br><br>";
          echo "詳細訂單資料：</h6><p>$description_detial</p><hr>";
          echo "總金額：$ $total_detial 元<br>";
          echo "備註：$ps_detial<br>";
          echo "訂單狀態：<font color='#AE0000' size='5'>$status_detial</font>";
        }
        ?>
        <br><br>
      </div>
    </div>
  </div>
  <br>
  <!--頁尾-->
  <script language="javascript" src="footer.js"></script>
  <!--頁尾結束-->

  <!-- Java script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>



</html>