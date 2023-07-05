<?php
session_start();
include("configure.php");

#假如$_SESSION['userID']為空值表示沒有登入
if ($_SESSION['userID'] == null) {
  echo "<script>alert('請先登入會員哦！')</script>";
  echo "<meta http-equiv=REFRESH CONTENT=0;url='user_login.php'>";
  #############################################
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
  <link rel="icon" href="images/icon.png" type="image/x-icon">
  <link href="mystyle.css" rel="stylesheet">
  <title>歡迎光臨！XXX Donut！</title>
</head>

<body>
  <!--導覽列開始-->
  <script language="javascript" src="navbar.js"></script>
  <!--導覽列結束-->
  <!-- 內文 -->
  <br><br><br><br>
  <div class="container">
    <img src="images/logo.png" width="200px"><br><br>
    <h5>購物車確認畫面❤</h5>
    <h3>我們會準備好商品在店裡等您來取貨！</h3>
    <br>
  </div>
  <div class="lightbg container" id="look">
    <br>
    <h5>請確認您所挑選的產品：</h5>
    <!--顯示購物車內容-->
    <?php
    $link = new PDO('mysql:host=' . $hostname . ';dbname=' . $database . ';charset=utf8', $username, $password);
    $query = "SELECT * FROM `car` ";
    $result = $link->query($query);

    #購物車變數
    $user = "";

    #加總金額
    $sum = 0;

    ##使用表格排版
    echo "<table class='table table-hover'>";
    echo "<thead>
    <tr>
      <th scope='col'>品項</th>
      <th scope='col'>顆數</th>
      <th scope='col'>總金額</th>
      <th scope='col'>修改</th>
    </tr>
    </thead>";
    echo "<tbody>";

    ##購物車顯示
    foreach ($result as $row) {
      $user = $row["user"];
      $userID = $_SESSION['userID'];
      if ($user == $userID) {
        echo "<tr>" .
          "<td>" . $row["items"] . "</td>" .
          "<td>" . $row["quantity"] . "</td>" .
          "<td>" . $row["total"] . "</td>" .
          "<td><a href='shop_delete.php?shop_ID=" . $row["ID"] . "'>刪除</a></td>" .
          "</tr>";
        $sum = $sum + $row["total"];
      }
    }
    echo "</tbody>";
    echo "</table>";
    echo "<h5><u>$ 總金額： $sum 元</u></h5>"
    ?>
    <!--結束購物車內容-->
    <br>
    <form action="shop_add.php" method="POST">
      <font color="red">*</font>取貨日期與時間：<br>
      <input type="date" name="date" min="<?php echo date('Y-m-d', strtotime("2 day")); ?>" max="<?php echo date('Y-m-d', strtotime("32 day")); ?>">
      <input type="time" name="time" min="07:00" max="22:00"><br>
      （門市營業時間為7:00至22:00）<br><br>
      備註：<br>
      <textarea placeholder="如：包裝方式等…" name="ps" style="resize:none;width:300px;height:50px;"></textarea><br>
      <font color="red">*</font><input type="checkbox" name="checkbox">我已看完<a href="index.php#look" data-bs-toggle="tooltip" data-bs-placement="top" title="點我前往！">注意事項</a>也確認完甜甜圈品項皆無錯誤！<br><br>
      <font color="rgba(199, 31, 31, 0.678)">※甜甜圈為每日現做，<br>因此無法接受隔日訂單～<br>請見諒！</font><br>
  </div>
  <br>
  <button type="submit" class="btn btn-danger">確認完畢！我要下訂單！</button>
  <br>
  <font color="rgba(199, 31, 31, 0.678)">※訂單一旦送出後皆無法做修改！</font>
  </form>
  <br><br>
  <!--頁尾-->
  <script language="javascript" src="footer.js"></script>
  <!--頁尾結束-->




  <!-- Java script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script>
    /*顯示標籤（Bootstrap)*/
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    })
  </script>
</body>



</html>