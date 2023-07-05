<?php
session_start();
include("configure.php");

##抓取使用者輸入購物車的資料
$date = isset($_POST["date"]) ? $_POST["date"] : null;
$time = isset($_POST["time"]) ? $_POST["time"] : null;
$ps = isset($_POST["ps"]) ? $_POST["ps"] : null;
$checkbox = isset($_POST["checkbox"]) ? "1" : null;
$user = $_SESSION['userID'];

##購物車內容
$description = "";
$sum = 0;
$status = "未取貨";

##確認是否有詳細閱讀確認完畢
if ($checkbox == null || $date == null || $time == null) {
    echo "<script>alert('資料有漏～請再確認！')</script>";
    echo "<meta http-equiv=REFRESH CONTENT=0;url='shop.php'>";
} else {
    $link = new PDO('mysql:host=' . $hostname . ';dbname=' . $database . ';charset=utf8', $username, $password);
    $query = "SELECT * FROM `car` WHERE $user=`user`";
    $result = $link->query($query);

    foreach ($result as $row) {
        $items = $row["items"];
        $quantity = $row["quantity"];
        $description = "$description $items x $quantity 顆 <br>";
        $sum = $sum + $row["total"];
    }

    if ($items == "") {
        echo "<script>alert('購物車是空的，歡迎挑選甜甜圈！')</script>";
        echo "<meta http-equiv=REFRESH CONTENT=0;url='donuts.php'>";
    } else {
        $query = "INSERT INTO `order`(`date`,`time`,`description`,`total`,`ps`,`user`,`status`)
        VALUES('$date','$time','$description','$sum','$ps','$user','$status')";
        $count = $link->exec($query);

        $link = new PDO('mysql:host=' . $hostname . ';dbname=' . $database . ';charset=utf8', $username, $password);
        $query = "DELETE FROM `car` WHERE $user = `user`";
        $count = $link->exec($query);
        echo "<script>alert('成功下訂！感謝您的訂購❤')</script>";
        echo "<meta http-equiv=REFRESH CONTENT=0;url='user.php'>";
    }
}

?>
