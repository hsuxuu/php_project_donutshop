<?php
session_start();
include("configure.php");

#假如$_SESSION['userID']為空值表示沒有登入
if ($_SESSION['userID'] == null) {
  echo "<script>alert('請先登入會員哦！')</script>";
  echo "<meta http-equiv=REFRESH CONTENT=0;url='user_login.php'>";
  #############################################
} else {
  #取出當前使用者的ID
  $ID = $_SESSION['userID'];

  #加入購物車
  #獲取加入的商品顆數
  if ($_POST["1"] != null) {
    $want_donut = isset($_POST["1"]) ? $_POST["1"] : null;

    ##抓取甜甜圈資料庫
    $link = new PDO('mysql:host=' . $hostname . ';dbname=' . $database . ';charset=utf8', $username, $password);
    $query = "SELECT * FROM `donut` WHERE `ID`='1'";
    $result = $link->query($query);

    $donut_name = "";
    $donut_price = "";

    foreach ($result as $row) {
      $donut_name = $row["name"];
      $donut_price = $row["price"];
    }

    #甜甜圈數量*價格
    $total = $donut_price * $want_donut;

    #寫進購物車資料庫
    $query = "INSERT INTO `car`(`user`,`items`,`quantity`,`total`)VALUES('$ID','$donut_name','$want_donut','$total')";
    $count = $link->exec($query);

    #顯示已加入購物車
    echo "<script>alert('加入成功')</script>";
    echo "<meta http-equiv=REFRESH CONTENT=0;url='donuts.php'>";
    #############################################
  } else if ($_POST["2"] != null) {
    $want_donut = isset($_POST["2"]) ? $_POST["2"] : null;

    ##抓取甜甜圈資料庫
    $link = new PDO('mysql:host=' . $hostname . ';dbname=' . $database . ';charset=utf8', $username, $password);
    $query = "SELECT * FROM `donut` WHERE `ID`='2'";
    $result = $link->query($query);

    $donut_name = "";
    $donut_price = "";

    foreach ($result as $row) {
      $donut_name = $row["name"];
      $donut_price = $row["price"];
    }

    #甜甜圈數量*價格
    $total = $donut_price * $want_donut;

    #寫進購物車資料庫
    $query = "INSERT INTO `car`(`user`,`items`,`quantity`,`total`)VALUES('$ID','$donut_name','$want_donut','$total')";
    $count = $link->exec($query);

    #顯示已加入購物車
    echo "<script>alert('加入成功')</script>";
    echo "<meta http-equiv=REFRESH CONTENT=0;url='donuts.php'>";
    #############################################
  } else if ($_POST["3"] != null) {
    $want_donut = isset($_POST["3"]) ? $_POST["3"] : null;

    ##抓取甜甜圈資料庫
    $link = new PDO('mysql:host=' . $hostname . ';dbname=' . $database . ';charset=utf8', $username, $password);
    $query = "SELECT * FROM `donut` WHERE `ID`='3'";
    $result = $link->query($query);

    $donut_name = "";
    $donut_price = "";

    foreach ($result as $row) {
      $donut_name = $row["name"];
      $donut_price = $row["price"];
    }

    #甜甜圈數量*價格
    $total = $donut_price * $want_donut;

    #寫進購物車資料庫
    $query = "INSERT INTO `car`(`user`,`items`,`quantity`,`total`)VALUES('$ID','$donut_name','$want_donut','$total')";
    $count = $link->exec($query);

    #顯示已加入購物車
    echo "<script>alert('加入成功')</script>";
    echo "<meta http-equiv=REFRESH CONTENT=0;url='donuts.php'>";
    #############################################
  } else if ($_POST["4"] != null) {
    $want_donut = isset($_POST["4"]) ? $_POST["4"] : null;

    ##抓取甜甜圈資料庫
    $link = new PDO('mysql:host=' . $hostname . ';dbname=' . $database . ';charset=utf8', $username, $password);
    $query = "SELECT * FROM `donut` WHERE `ID`='4'";
    $result = $link->query($query);

    $donut_name = "";
    $donut_price = "";

    foreach ($result as $row) {
      $donut_name = $row["name"];
      $donut_price = $row["price"];
    }

    #甜甜圈數量*價格
    $total = $donut_price * $want_donut;

    #寫進購物車資料庫
    $query = "INSERT INTO `car`(`user`,`items`,`quantity`,`total`)VALUES('$ID','$donut_name','$want_donut','$total')";
    $count = $link->exec($query);

    #顯示已加入購物車
    echo "<script>alert('加入成功')</script>";
    echo "<meta http-equiv=REFRESH CONTENT=0;url='donuts.php'>";
    #############################################
  } else if ($_POST["5"] != null) {
    $want_donut = isset($_POST["5"]) ? $_POST["5"] : null;

    ##抓取甜甜圈資料庫
    $link = new PDO('mysql:host=' . $hostname . ';dbname=' . $database . ';charset=utf8', $username, $password);
    $query = "SELECT * FROM `donut` WHERE `ID`='5'";
    $result = $link->query($query);

    $donut_name = "";
    $donut_price = "";

    foreach ($result as $row) {
      $donut_name = $row["name"];
      $donut_price = $row["price"];
    }

    #甜甜圈數量*價格
    $total = $donut_price * $want_donut;

    #寫進購物車資料庫
    $query = "INSERT INTO `car`(`user`,`items`,`quantity`,`total`)VALUES('$ID','$donut_name','$want_donut','$total')";
    $count = $link->exec($query);

    #顯示已加入購物車
    echo "<script>alert('加入成功')</script>";
    echo "<meta http-equiv=REFRESH CONTENT=0;url='donuts.php'>";
    #############################################
  } else if ($_POST["6"] != null) {
    $want_donut = isset($_POST["6"]) ? $_POST["6"] : null;

    ##抓取甜甜圈資料庫
    $link = new PDO('mysql:host=' . $hostname . ';dbname=' . $database . ';charset=utf8', $username, $password);
    $query = "SELECT * FROM `donut` WHERE `ID`='6'";
    $result = $link->query($query);

    $donut_name = "";
    $donut_price = "";

    foreach ($result as $row) {
      $donut_name = $row["name"];
      $donut_price = $row["price"];
    }

    #甜甜圈數量*價格
    $total = $donut_price * $want_donut;

    #寫進購物車資料庫
    $query = "INSERT INTO `car`(`user`,`items`,`quantity`,`total`)VALUES('$ID','$donut_name','$want_donut','$total')";
    $count = $link->exec($query);

    #顯示已加入購物車
    echo "<script>alert('加入成功')</script>";
    echo "<meta http-equiv=REFRESH CONTENT=0;url='donuts.php'>";
    #############################################
  } else if ($_POST["7"] != null) {
    $want_donut = isset($_POST["7"]) ? $_POST["7"] : null;

    ##抓取甜甜圈資料庫
    $link = new PDO('mysql:host=' . $hostname . ';dbname=' . $database . ';charset=utf8', $username, $password);
    $query = "SELECT * FROM `donut` WHERE `ID`='7'";
    $result = $link->query($query);

    $donut_name = "";
    $donut_price = "";

    foreach ($result as $row) {
      $donut_name = $row["name"];
      $donut_price = $row["price"];
    }

    #甜甜圈數量*價格
    $total = $donut_price * $want_donut;

    #寫進購物車資料庫
    $query = "INSERT INTO `car`(`user`,`items`,`quantity`,`total`)VALUES('$ID','$donut_name','$want_donut','$total')";
    $count = $link->exec($query);

    #顯示已加入購物車
    echo "<script>alert('加入成功')</script>";
    echo "<meta http-equiv=REFRESH CONTENT=0;url='donuts.php'>";
    #############################################
  } else if ($_POST["8"] != null) {
    $want_donut = isset($_POST["8"]) ? $_POST["8"] : null;

    ##抓取甜甜圈資料庫
    $link = new PDO('mysql:host=' . $hostname . ';dbname=' . $database . ';charset=utf8', $username, $password);
    $query = "SELECT * FROM `donut` WHERE `ID`='8'";
    $result = $link->query($query);

    $donut_name = "";
    $donut_price = "";

    foreach ($result as $row) {
      $donut_name = $row["name"];
      $donut_price = $row["price"];
    }

    #甜甜圈數量*價格
    $total = $donut_price * $want_donut;

    #寫進購物車資料庫
    $query = "INSERT INTO `car`(`user`,`items`,`quantity`,`total`)VALUES('$ID','$donut_name','$want_donut','$total')";
    $count = $link->exec($query);

    #顯示已加入購物車
    echo "<script>alert('加入成功')</script>";
    echo "<meta http-equiv=REFRESH CONTENT=0;url='donuts.php'>";
    #############################################
  } else if ($_POST["9"] != null) {
    $want_donut = isset($_POST["9"]) ? $_POST["9"] : null;

    ##抓取甜甜圈資料庫
    $link = new PDO('mysql:host=' . $hostname . ';dbname=' . $database . ';charset=utf8', $username, $password);
    $query = "SELECT * FROM `donut` WHERE `ID`='9'";
    $result = $link->query($query);

    $donut_name = "";
    $donut_price = "";

    foreach ($result as $row) {
      $donut_name = $row["name"];
      $donut_price = $row["price"];
    }

    #甜甜圈數量*價格
    $total = $donut_price * $want_donut;

    #寫進購物車資料庫
    $query = "INSERT INTO `car`(`user`,`items`,`quantity`,`total`)VALUES('$ID','$donut_name','$want_donut','$total')";
    $count = $link->exec($query);

    #顯示已加入購物車
?><script>
      window.close();
    </script>
<?php
    #############################################
  } else {
    echo "<script>alert('請輸入數量！')</script>";
    echo "<meta http-equiv=REFRESH CONTENT=0;url='donuts.php'>";
  }
}

?>