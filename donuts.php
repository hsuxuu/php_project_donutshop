<?php
session_start();
include("configure.php");
$check = isset($_SESSION['userID']) ? $_SESSION['userID'] : null;
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
  <link href="donuts.css" rel="stylesheet">
  <link rel="icon" href="images/icon.png" type="image/x-icon">
  <title>歡迎光臨！XXX Donut！</title>
</head>

<body>
  <!--導覽列開始-->
  <script language="javascript" src="navbar.js"></script>
  <!--導覽列結束-->
  <br><br><br><br>
  <!-- 內文 -->
  <img src="images/logo.png" width="200px">
  <br><br>
  <div class="darkbg">
    歡迎光臨！XXX Donut！
    <h1>甜甜圈系列！</h1>
    <h5>這裡有所有的甜甜圈供您任挑任選喔❤</h5>
  </div>
  <br>
  <!------------------排版------------------>
  <center>
    <div class="container">
      <div class="row align-items-center">
        <!------------------蜜糖------------------>
        <div class="col-sm-4 hover">
          <div class="lightbg donut">
            <center>
              <?php
              $link = new PDO('mysql:host=' . $hostname . ';dbname=' . $database . ';charset=utf8', $username, $password);
              $query = "SELECT * FROM `donut` WHERE `ID`=1";
              $result = $link->query($query);

              #顯示
              foreach ($result as $row) {
                echo "<h5>" . $row["name"] . "<br>" . $row["ename"] . "</h5>";
                echo "<h5>$" . $row["price"] . "元</h5>";
                echo "<img src='images/" . $row["ID"] . ".png' width='50%'>";
                echo "<br>" . $row["description"];
              }
              ?>
              <hr>
              <form action="shop_new.php" method="POST">
                <input class="form-control" type="text" name="1" placeholder="請輸入顆數！" style="width:80%">
                <br>
                <button type="submit" class="btn btn-danger" id="liveToastBtn">加入購物車❤</button>
                <input type="reset" style="display:none;">
                <!-----------------吐司----------------->
                <?php
                if ($check == null) {
                  echo "
                  <div class='position-fixed bottom-0 top-0 end-0 p-3' style='z-index: 9999'>
                    <div id='liveToast' class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
                    <div class='toast-header'>
                      <img src='images/icon.png' width='20%' class='rounded me-2'>
                      <strong class='me-auto'>
                        <font size='4' color='rgba(199, 31, 31, 0.678)'>加入失敗！<br>請先登入！</font>
                      </strong>
                      <small>just now</small>
                      <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
                    </div>
                    <div class='toast-body'>
                      尚未登入帳號 <font color='rgba(199, 31, 31, 0.678)'><b>請先登入帳號</b></font> 再挑選甜甜圈哦❤
                    </div>
                  </div>
                </div>";
                } else {
                  echo "
                  <div class='position-fixed bottom-0 top-0 end-0 p-3' style='z-index: 9999'>
                    <div id='liveToast' class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
                    <div class='toast-header'>
                      <img src='images/icon.png' width='20%' class='rounded me-2'>
                      <strong class='me-auto'>
                        <font size='4' color='rgba(199, 31, 31, 0.678)'>成功！<br>加入購物車！</font>
                      </strong>
                      <small>just now</small>
                      <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
                    </div>
                    <div class='toast-body'>
                      您 成功將 <font color='rgba(199, 31, 31, 0.678)'><b>蜜糖波堤</b></font> 加入購物車❤
                    </div>
                  </div>
                </div>";
                } ?>

                <!-----------------吐司結束----------------->
              </form>
              <br>
            </center>
          </div>
        </div>
        <!------------------蜜糖結束------------------>

        <!------------------草莓------------------>
        <div class="col-sm-4 hover">
          <div class="lightbg donut">
            <center>
              <?php
              $link = new PDO('mysql:host=' . $hostname . ';dbname=' . $database . ';charset=utf8', $username, $password);
              $query = "SELECT * FROM `donut` WHERE `ID`=2";
              $result = $link->query($query);

              #顯示
              foreach ($result as $row) {
                echo "<h5>" . $row["name"] . "<br>" . $row["ename"] . "</h5>";
                echo "<h5>$" . $row["price"] . "元</h5>";
                echo "<img src='images/" . $row["ID"] . ".png' width='50%'>";
                echo "<br>" . $row["description"];
              }
              ?>
              <hr>
              <form action="shop_new.php" method="POST">
                <input class="form-control" type="text" name="2" placeholder="請輸入顆數！" style="width:80%">
                <br>
                <button type="submit" class="btn btn-danger" id="liveToastBtn2">加入購物車❤</button>
                <input type="reset" style="display:none;">
                <!-----------------吐司----------------->
                <?php
                if ($check == null) {
                  echo "
                  <div class='position-fixed bottom-0 top-0 end-0 p-3' style='z-index: 9999'>
                    <div id='liveToast2' class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
                    <div class='toast-header'>
                      <img src='images/icon.png' width='20%' class='rounded me-2'>
                      <strong class='me-auto'>
                        <font size='4' color='rgba(199, 31, 31, 0.678)'>加入失敗！<br>請先登入！</font>
                      </strong>
                      <small>just now</small>
                      <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
                    </div>
                    <div class='toast-body'>
                      尚未登入帳號 <font color='rgba(199, 31, 31, 0.678)'><b>請先登入帳號</b></font> 再挑選甜甜圈哦❤
                    </div>
                  </div>
                </div>";
                } else {
                  echo "
                  <div class='position-fixed bottom-0 top-0 end-0 p-3' style='z-index: 9999'>
                    <div id='liveToast2' class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
                    <div class='toast-header'>
                      <img src='images/icon.png' width='20%' class='rounded me-2'>
                      <strong class='me-auto'>
                        <font size='4' color='rgba(199, 31, 31, 0.678)'>成功！<br>加入購物車！</font>
                      </strong>
                      <small>just now</small>
                      <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
                    </div>
                    <div class='toast-body'>
                      您 成功將 <font color='rgba(199, 31, 31, 0.678)'><b>草莓波堤</b></font> 加入購物車❤
                    </div>
                  </div>
                </div>";
                } ?>
                <!------------------吐司結束------------------>
              </form>
              <br>
            </center>
          </div>
        </div>
        <!-----------------草莓結束----------------->

        <!-----------------草巧----------------->
        <div class="col-sm-4 hover">
          <div class="lightbg donut">
            <center>
              <?php
              $link = new PDO('mysql:host=' . $hostname . ';dbname=' . $database . ';charset=utf8', $username, $password);
              $query = "SELECT * FROM `donut` WHERE `ID`=3";
              $result = $link->query($query);

              #顯示
              foreach ($result as $row) {
                echo "<h5>" . $row["name"] . "<br>" . $row["ename"] . "</h5>";
                echo "<h5>$" . $row["price"] . "元</h5>";
                echo "<img src='images/" . $row["ID"] . ".png' width='50%'>";
                echo "<br>" . $row["description"];
              }
              ?>
              <hr>
              <form action="shop_new.php" method="POST">
                <input class="form-control" type="text" name="3" placeholder="請輸入顆數！" style="width:80%">
                <br>
                <button type="submit" class="btn btn-danger" id="liveToastBtn3">加入購物車❤</button>
                <input type="reset" style="display:none;">
                <!-----------------吐司----------------->
                <?php
                if ($check == null) {
                  echo "
                  <div class='position-fixed bottom-0 top-0 end-0 p-3' style='z-index: 9999'>
                    <div id='liveToast3' class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
                    <div class='toast-header'>
                      <img src='images/icon.png' width='20%' class='rounded me-2'>
                      <strong class='me-auto'>
                        <font size='4' color='rgba(199, 31, 31, 0.678)'>加入失敗！<br>請先登入！</font>
                      </strong>
                      <small>just now</small>
                      <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
                    </div>
                    <div class='toast-body'>
                      尚未登入帳號 <font color='rgba(199, 31, 31, 0.678)'><b>請先登入帳號</b></font> 再挑選甜甜圈哦❤
                    </div>
                  </div>
                </div>";
                } else {
                  echo "
                  <div class='position-fixed bottom-0 top-0 end-0 p-3' style='z-index: 9999'>
                    <div id='liveToast3' class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
                    <div class='toast-header'>
                      <img src='images/icon.png' width='20%' class='rounded me-2'>
                      <strong class='me-auto'>
                        <font size='4' color='rgba(199, 31, 31, 0.678)'>成功！<br>加入購物車！</font>
                      </strong>
                      <small>just now</small>
                      <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
                    </div>
                    <div class='toast-body'>
                      您 成功將 <font color='rgba(199, 31, 31, 0.678)'><b>草莓巧克力波堤</b></font> 加入購物車❤
                    </div>
                  </div>
                </div>";
                } ?>
                <!-----------------吐司結束----------------->
              </form>
              <br>
            </center>
          </div>
        </div>
        <!-----------------草巧結束----------------->
      </div>

      <!-----------------以下是第二排----------------->

      <div class="row align-items-center">
        <!-----------------雙巧----------------->
        <div class="col-sm-4 hover">
          <div class="lightbg donut">
            <center>
              <?php
              $link = new PDO('mysql:host=' . $hostname . ';dbname=' . $database . ';charset=utf8', $username, $password);
              $query = "SELECT * FROM `donut` WHERE `ID`=4";
              $result = $link->query($query);

              #顯示
              foreach ($result as $row) {
                echo "<h5>" . $row["name"] . "<br>" . $row["ename"] . "</h5>";
                echo "<h5>$" . $row["price"] . "元</h5>";
                echo "<img src='images/" . $row["ID"] . ".png' width='50%'>";
                echo "<br>" . $row["description"];
              }
              ?>
              <hr>
              <form action="shop_new.php" method="POST">
                <input class="form-control" type="text" name="4" placeholder="請輸入顆數！" style="width:80%">
                <br>
                <button type="submit" class="btn btn-danger" id="liveToastBtn4">加入購物車❤</button>
                <input type="reset" style="display:none;">
                <!-----------------吐司----------------->
                <?php
                if ($check == null) {
                  echo "
                  <div class='position-fixed bottom-0 top-0 end-0 p-3' style='z-index: 9999'>
                    <div id='liveToast4' class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
                    <div class='toast-header'>
                      <img src='images/icon.png' width='20%' class='rounded me-2'>
                      <strong class='me-auto'>
                        <font size='4' color='rgba(199, 31, 31, 0.678)'>加入失敗！<br>請先登入！</font>
                      </strong>
                      <small>just now</small>
                      <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
                    </div>
                    <div class='toast-body'>
                      尚未登入帳號 <font color='rgba(199, 31, 31, 0.678)'><b>請先登入帳號</b></font> 再挑選甜甜圈哦❤
                    </div>
                  </div>
                </div>";
                } else {
                  echo "
                  <div class='position-fixed bottom-0 top-0 end-0 p-3' style='z-index: 9999'>
                    <div id='liveToast4' class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
                    <div class='toast-header'>
                      <img src='images/icon.png' width='20%' class='rounded me-2'>
                      <strong class='me-auto'>
                        <font size='4' color='rgba(199, 31, 31, 0.678)'>成功！<br>加入購物車！</font>
                      </strong>
                      <small>just now</small>
                      <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
                    </div>
                    <div class='toast-body'>
                      您 成功將 <font color='rgba(199, 31, 31, 0.678)'><b>雙層巧克力波堤</b></font> 加入購物車❤
                    </div>
                  </div>
                </div>";
                } ?>
                <!-----------------吐司結束----------------->
              </form>
              <br>
            </center>
          </div>
        </div>
        <!-----------------雙巧結束----------------->

        <!-----------------蜜巧----------------->
        <div class="col-sm-4 hover">
          <div class="lightbg donut">
            <center>
              <?php
              $link = new PDO('mysql:host=' . $hostname . ';dbname=' . $database . ';charset=utf8', $username, $password);
              $query = "SELECT * FROM `donut` WHERE `ID`=5";
              $result = $link->query($query);

              #顯示
              foreach ($result as $row) {
                echo "<h5>" . $row["name"] . "<br>" . $row["ename"] . "</h5>";
                echo "<h5>$" . $row["price"] . "元</h5>";
                echo "<img src='images/" . $row["ID"] . ".png' width='50%'>";
                echo "<br>" . $row["description"];
              }
              ?>
              <hr>
              <form action="shop_new.php" method="POST">
                <input class="form-control" type="text" name="5" placeholder="請輸入顆數！" style="width:80%">
                <br>
                <button type="submit" class="btn btn-danger" id="liveToastBtn5">加入購物車❤</button>
                <input type="reset" style="display:none;">
                <!-----------------吐司----------------->
                <?php
                if ($check == null) {
                  echo "
                  <div class='position-fixed bottom-0 top-0 end-0 p-3' style='z-index: 9999'>
                    <div id='liveToast5' class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
                    <div class='toast-header'>
                      <img src='images/icon.png' width='20%' class='rounded me-2'>
                      <strong class='me-auto'>
                        <font size='4' color='rgba(199, 31, 31, 0.678)'>加入失敗！<br>請先登入！</font>
                      </strong>
                      <small>just now</small>
                      <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
                    </div>
                    <div class='toast-body'>
                      尚未登入帳號 <font color='rgba(199, 31, 31, 0.678)'><b>請先登入帳號</b></font> 再挑選甜甜圈哦❤
                    </div>
                  </div>
                </div>";
                } else {
                  echo "
                  <div class='position-fixed bottom-0 top-0 end-0 p-3' style='z-index: 9999'>
                    <div id='liveToast5' class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
                    <div class='toast-header'>
                      <img src='images/icon.png' width='20%' class='rounded me-2'>
                      <strong class='me-auto'>
                        <font size='4' color='rgba(199, 31, 31, 0.678)'>成功！<br>加入購物車！</font>
                      </strong>
                      <small>just now</small>
                      <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
                    </div>
                    <div class='toast-body'>
                      您 成功將 <font color='rgba(199, 31, 31, 0.678)'><b>蜜糖巧克力波堤</b></font> 加入購物車❤
                    </div>
                  </div>
                </div>";
                } ?>
                <!-----------------吐司結束---------------->
              </form>
              <br>
          </div>
        </div>
        <!-----------------蜜巧結束----------------->

        <!-----------------餅乾可可----------------->
        <div class="col-sm-4 hover">
          <div class="lightbg donut">
            <center>
              <?php
              $link = new PDO('mysql:host=' . $hostname . ';dbname=' . $database . ';charset=utf8', $username, $password);
              $query = "SELECT * FROM `donut` WHERE `ID`=6";
              $result = $link->query($query);

              #顯示
              foreach ($result as $row) {
                echo "<h5>" . $row["name"] . "<br>" . $row["ename"] . "</h5>";
                echo "<h5>$" . $row["price"] . "元</h5>";
                echo "<img src='images/" . $row["ID"] . ".png' width='50%'>";
                echo "<br>" . $row["description"];
              }
              ?>
              <hr>
              <form action="shop_new.php" method="POST">
                <input class="form-control" type="text" name="6" placeholder="請輸入顆數！" style="width:80%">
                <br>
                <button type="submit" class="btn btn-danger" id="liveToastBtn6">加入購物車❤</button>
                <input type="reset" style="display:none;">
                <!-----------------吐司----------------->
                <?php
                if ($check == null) {
                  echo "
                  <div class='position-fixed bottom-0 top-0 end-0 p-3' style='z-index: 9999'>
                    <div id='liveToast6' class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
                    <div class='toast-header'>
                      <img src='images/icon.png' width='20%' class='rounded me-2'>
                      <strong class='me-auto'>
                        <font size='4' color='rgba(199, 31, 31, 0.678)'>加入失敗！<br>請先登入！</font>
                      </strong>
                      <small>just now</small>
                      <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
                    </div>
                    <div class='toast-body'>
                      尚未登入帳號 <font color='rgba(199, 31, 31, 0.678)'><b>請先登入帳號</b></font> 再挑選甜甜圈哦❤
                    </div>
                  </div>
                </div>";
                } else {
                  echo "
                  <div class='position-fixed bottom-0 top-0 end-0 p-3' style='z-index: 9999'>
                    <div id='liveToast6' class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
                    <div class='toast-header'>
                      <img src='images/icon.png' width='20%' class='rounded me-2'>
                      <strong class='me-auto'>
                        <font size='4' color='rgba(199, 31, 31, 0.678)'>成功！<br>加入購物車！</font>
                      </strong>
                      <small>just now</small>
                      <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
                    </div>
                    <div class='toast-body'>
                      您 成功將 <font color='rgba(199, 31, 31, 0.678)'><b>餅乾可可波堤</b></font> 加入購物車❤
                    </div>
                  </div>
                </div>";
                } ?>
                <!-----------------吐司結束----------------->
              </form>
              <br>
            </center>
          </div>
        </div>
        <!-----------------餅乾可可結束----------------->
      </div>

      <!-----------------以下是第三排----------------->

      <div class="row align-items-center">
        <!-----------------優格----------------->
        <div class="col-sm-4 hover">
          <div class="lightbg donut">
            <center>
              <?php
              $link = new PDO('mysql:host=' . $hostname . ';dbname=' . $database . ';charset=utf8', $username, $password);
              $query = "SELECT * FROM `donut` WHERE `ID`=7";
              $result = $link->query($query);

              #顯示
              foreach ($result as $row) {
                echo "<h5>" . $row["name"] . "<br>" . $row["ename"] . "</h5>";
                echo "<h5>$" . $row["price"] . "元</h5>";
                echo "<img src='images/" . $row["ID"] . ".png' width='50%'>";
                echo "<br>" . $row["description"];
              }
              ?>
              <hr>
              <form action="shop_new.php" method="POST">
                <input class="form-control" type="text" name="7" placeholder="請輸入顆數！" style="width:80%">
                <br>
                <button type="submit" class="btn btn-danger" id="liveToastBtn7">加入購物車❤</button>
                <input type="reset" style="display:none;">
                <!-----------------吐司----------------->
                <?php
                if ($check == null) {
                  echo "
                  <div class='position-fixed bottom-0 top-0 end-0 p-3' style='z-index: 9999'>
                    <div id='liveToast7' class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
                    <div class='toast-header'>
                      <img src='images/icon.png' width='20%' class='rounded me-2'>
                      <strong class='me-auto'>
                        <font size='4' color='rgba(199, 31, 31, 0.678)'>加入失敗！<br>請先登入！</font>
                      </strong>
                      <small>just now</small>
                      <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
                    </div>
                    <div class='toast-body'>
                      尚未登入帳號 <font color='rgba(199, 31, 31, 0.678)'><b>請先登入帳號</b></font> 再挑選甜甜圈哦❤
                    </div>
                  </div>
                </div>";
                } else {
                  echo "
                  <div class='position-fixed bottom-0 top-0 end-0 p-3' style='z-index: 9999'>
                    <div id='liveToast7' class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
                    <div class='toast-header'>
                      <img src='images/icon.png' width='20%' class='rounded me-2'>
                      <strong class='me-auto'>
                        <font size='4' color='rgba(199, 31, 31, 0.678)'>成功！<br>加入購物車！</font>
                      </strong>
                      <small>just now</small>
                      <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
                    </div>
                    <div class='toast-body'>
                      您 成功將 <font color='rgba(199, 31, 31, 0.678)'><b>優格波堤</b></font> 加入購物車❤
                    </div>
                  </div>
                </div>";
                } ?>
                <!-----------------吐司結束----------------->
              </form>
              <br>
            </center>
          </div>
        </div>
        <!-----------------優格結束----------------->

        <!-----------------天法----------------->
        <div class="col-sm-4 hover">
          <div class="lightbg donut">
            <center>
              <?php
              $link = new PDO('mysql:host=' . $hostname . ';dbname=' . $database . ';charset=utf8', $username, $password);
              $query = "SELECT * FROM `donut` WHERE `ID`=8";
              $result = $link->query($query);

              #顯示
              foreach ($result as $row) {
                echo "<h5>" . $row["name"] . "<br>" . $row["ename"] . "</h5>";
                echo "<h5>$" . $row["price"] . "元</h5>";
                echo "<img src='images/" . $row["ID"] . ".png' width='50%'>";
                echo "<br>" . $row["description"];
              }
              ?>
              <hr>
              <form action="shop_new.php" method="POST">
                <input class="form-control" type="text" name="8" placeholder="請輸入顆數！" style="width:80%">
                <br>
                <button type="submit" class="btn btn-danger" id="liveToastBtn8">加入購物車❤</button>
                <input type="reset" style="display:none;">
                <!-----------------吐司----------------->
                <?php
                if ($check == null) {
                  echo "
                  <div class='position-fixed bottom-0 top-0 end-0 p-3' style='z-index: 9999'>
                    <div id='liveToast8' class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
                    <div class='toast-header'>
                      <img src='images/icon.png' width='20%' class='rounded me-2'>
                      <strong class='me-auto'>
                        <font size='4' color='rgba(199, 31, 31, 0.678)'>加入失敗！<br>請先登入！</font>
                      </strong>
                      <small>just now</small>
                      <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
                    </div>
                    <div class='toast-body'>
                      尚未登入帳號 <font color='rgba(199, 31, 31, 0.678)'><b>請先登入帳號</b></font> 再挑選甜甜圈哦❤
                    </div>
                  </div>
                </div>";
                } else {
                  echo "
                  <div class='position-fixed bottom-0 top-0 end-0 p-3' style='z-index: 9999'>
                    <div id='liveToast8' class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
                    <div class='toast-header'>
                      <img src='images/icon.png' width='20%' class='rounded me-2'>
                      <strong class='me-auto'>
                        <font size='4' color='rgba(199, 31, 31, 0.678)'>成功！<br>加入購物車！</font>
                      </strong>
                      <small>just now</small>
                      <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
                    </div>
                    <div class='toast-body'>
                      您 成功將 <font color='rgba(199, 31, 31, 0.678)'><b>天使法蘭奇</b></font> 加入購物車❤
                    </div>
                  </div>
                </div>";
                } ?>
                <!-----------------吐司結束----------------->
              </form>
              <br>
            </center>
          </div>
        </div>
        <!-----------------天法結束----------------->

        <!-----------------卡法----------------->
        <div class="col-sm-4 hover">
          <div class="lightbg donut">
            <center>
              <?php
              $link = new PDO('mysql:host=' . $hostname . ';dbname=' . $database . ';charset=utf8', $username, $password);
              $query = "SELECT * FROM `donut` WHERE `ID`=9";
              $result = $link->query($query);

              #顯示
              foreach ($result as $row) {
                echo "<h5>" . $row["name"] . "<br>" . $row["ename"] . "</h5>";
                echo "<h5>$" . $row["price"] . "元</h5>";
                echo "<img src='images/" . $row["ID"] . ".png' width='50%'>";
                echo "<br>" . $row["description"];
              }
              ?>
              <hr>
              <form action="shop_new.php" method="POST">
                <input class="form-control" type="text" name="9" placeholder="請輸入顆數！" style="width:80%">
                <br>
                <button type="submit" class="btn btn-danger" id="liveToastBtn9">加入購物車❤</button>
                <input type="reset" style="display:none;">
                <!-----------------吐司----------------->
                <?php
                if ($check == null) {
                  echo "
                  <div class='position-fixed bottom-0 top-0 end-0 p-3' style='z-index: 9999'>
                    <div id='liveToast9' class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
                    <div class='toast-header'>
                      <img src='images/icon.png' width='20%' class='rounded me-2'>
                      <strong class='me-auto'>
                        <font size='4' color='rgba(199, 31, 31, 0.678)'>加入失敗！<br>請先登入！</font>
                      </strong>
                      <small>just now</small>
                      <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
                    </div>
                    <div class='toast-body'>
                      尚未登入帳號 <font color='rgba(199, 31, 31, 0.678)'><b>請先登入帳號</b></font> 再挑選甜甜圈哦❤
                    </div>
                  </div>
                </div>";
                } else {
                  echo "
                  <div class='position-fixed bottom-0 top-0 end-0 p-3' style='z-index: 9999'>
                    <div id='liveToast9' class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
                    <div class='toast-header'>
                      <img src='images/icon.png' width='20%' class='rounded me-2'>
                      <strong class='me-auto'>
                        <font size='4' color='rgba(199, 31, 31, 0.678)'>成功！<br>加入購物車！</font>
                      </strong>
                      <small>just now</small>
                      <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
                    </div>
                    <div class='toast-body'>
                      您 成功將 <font color='rgba(199, 31, 31, 0.678)'><b>卡士達法蘭奇</b></font> 加入購物車❤
                    </div>
                  </div>
                </div>";
                } ?>
                <!-----------------吐司結束----------------->
              </form>
              <br>
            </center>
          </div>
        </div>
        <!-----------------卡法結束----------------->
      </div>

    </div>
  </center>

  <!--頁尾-->
  <script language="javascript" src="footer.js"></script>
  <!--頁尾結束-->



  <!-- Java script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script>
    //Bootstrap的吐司
    //蜜糖
    var toastTrigger = document.getElementById('liveToastBtn')
    var toastLiveExample = document.getElementById('liveToast')
    if (toastTrigger) {
      toastTrigger.addEventListener('click', function() {
        var toast = new bootstrap.Toast(toastLiveExample)

        toast.show();
      })
    }
    //草莓
    var toastTrigger2 = document.getElementById('liveToastBtn2')
    var toastLiveExample2 = document.getElementById('liveToast2')
    if (toastTrigger2) {
      toastTrigger2.addEventListener('click', function() {
        var toast = new bootstrap.Toast(toastLiveExample2)

        toast.show()
      })
    }

    //草巧
    var toastTrigger3 = document.getElementById('liveToastBtn3')
    var toastLiveExample3 = document.getElementById('liveToast3')
    if (toastTrigger3) {
      toastTrigger3.addEventListener('click', function() {
        var toast = new bootstrap.Toast(toastLiveExample3)

        toast.show()
      })
    }

    //雙巧
    var toastTrigger4 = document.getElementById('liveToastBtn4')
    var toastLiveExample4 = document.getElementById('liveToast4')
    if (toastTrigger4) {
      toastTrigger4.addEventListener('click', function() {
        var toast = new bootstrap.Toast(toastLiveExample4)

        toast.show()
      })
    }

    //蜜巧
    var toastTrigger5 = document.getElementById('liveToastBtn5')
    var toastLiveExample5 = document.getElementById('liveToast5')
    if (toastTrigger5) {
      toastTrigger5.addEventListener('click', function() {
        var toast = new bootstrap.Toast(toastLiveExample5)

        toast.show()
      })
    }
    //餅乾可可
    var toastTrigger6 = document.getElementById('liveToastBtn6')
    var toastLiveExample6 = document.getElementById('liveToast6')
    if (toastTrigger6) {
      toastTrigger6.addEventListener('click', function() {
        var toast = new bootstrap.Toast(toastLiveExample6)

        toast.show()
      })
    }

    //優格
    var toastTrigger7 = document.getElementById('liveToastBtn7')
    var toastLiveExample7 = document.getElementById('liveToast7')
    if (toastTrigger7) {
      toastTrigger7.addEventListener('click', function() {
        var toast = new bootstrap.Toast(toastLiveExample7)

        toast.show()
      })
    }

    //天法
    var toastTrigger8 = document.getElementById('liveToastBtn8')
    var toastLiveExample8 = document.getElementById('liveToast8')
    if (toastTrigger8) {
      toastTrigger8.addEventListener('click', function() {
        var toast = new bootstrap.Toast(toastLiveExample8)

        toast.show()
      })
    }

    //卡法
    var toastTrigger9 = document.getElementById('liveToastBtn9')
    var toastLiveExample9 = document.getElementById('liveToast9')
    if (toastTrigger9) {
      toastTrigger9.addEventListener('click', function() {
        var toast = new bootstrap.Toast(toastLiveExample9)

        toast.show()
      })
    }

    //網頁傳值不換頁
    $('form').on('submit', function() {
      $.ajax({
        url: 'shop_new.php', // 要傳送的頁面
        method: 'POST', // 使用 POST 方法
        dataType: 'php', // 回傳資料格式
        data: $('form').serialize(), // 將表單資料用打包起來送出去
        success: function(res) {
          // 成功以後會執行
        },
      });
      $("input[type=reset]").trigger("click"); //清空表單內容～
      return false; // 阻止瀏覽器跳轉到 send.php，因為已經用 ajax 送出去了！
    });
  </script>
</body>

</html>