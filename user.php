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


  #獲取現在登入者的帳號密碼
  foreach ($result as $row) {
    $ID = $row["ID"];
  }

  #將登入的帳號分為管理者與使用者介面
  if($ID==1){
    echo "<meta http-equiv=REFRESH CONTENT=0;url='user_manager.php'>";
  }else{
    echo "<meta http-equiv=REFRESH CONTENT=0;url='user_member.php'>";
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