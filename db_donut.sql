-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-01-22 16:10:36
-- 伺服器版本： 10.4.19-MariaDB
-- PHP 版本： 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `db_donut`
--
CREATE DATABASE IF NOT EXISTS `db_donut` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_donut`;

-- --------------------------------------------------------

--
-- 資料表結構 `account`
--

CREATE TABLE `account` (
  `ID` int(11) NOT NULL,
  `Account` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `account`
--

INSERT INTO `account` (`ID`, `Account`, `Password`, `name`, `phone`) VALUES
(1, 'test', 'test', '管理員', '0912345678'),
(3, '123', '123', '許許', '0912345678'),
(4, '456', '456', '大家好我是456', '0987654321'),
(7, 'test1', '123', '測試', '0912345678');

-- --------------------------------------------------------

--
-- 資料表結構 `car`
--

CREATE TABLE `car` (
  `ID` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `items` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `car`
--

INSERT INTO `car` (`ID`, `user`, `items`, `quantity`, `total`) VALUES
(92, 1, '優格波堤', 2, 78);

-- --------------------------------------------------------

--
-- 資料表結構 `donut`
--

CREATE TABLE `donut` (
  `ID` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `ename` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `donut`
--

INSERT INTO `donut` (`ID`, `name`, `ename`, `description`, `price`) VALUES
(1, '蜜糖波堤', 'Pon De Ring', '經典不敗招牌甜甜圈！<br>Q彈口感，<br>說不出來的好滋味！<br>不管大朋友小朋友，<br>咬一口，絕對深深愛上它！', 39),
(2, '草莓波堤', 'Pon De Strawberry', '經典不敗招牌甜甜圈！<br>Q彈口感，<br>搭配獨家草莓巧克力，<br>酸甜好滋味！', 39),
(3, '草莓巧克力波堤', 'Pon De Chocolate Strawberry', '濃郁的巧克力波堤，<br>沾裹酸酸甜甜的<br>草莓巧克力醬，<br>讓人吃完彷彿有戀愛般的滋味！', 39),
(4, '雙層巧克力波堤', 'Pon De Double Chocolate', '巧克力的香醇<br>加入Q彈口感的波堤，<br>外裹濃郁巧克力，<br>誰能抗拒這股甜蜜的誘惑！', 39),
(5, '蜜糖巧克力波堤', 'Pon De Chocolate', '喜愛日本超人氣商品蜜糖波堤嗎？<br>那你一定不能錯過這個巧克力甜蜜滋味！', 39),
(6, '餅乾可可波堤', 'Pon De Cocoa Cookies', '帶有苦甜的黑巧克力，<br>搭配脆口的巧克力碎片，Q彈又爽脆，豐富層次！', 45),
(7, '優格波堤', 'Pon De Yogurt', 'Q彈波堤裹上一層獨家調製的優格巧克力，品嘗的當下，<br>散發濃濃的優格香氣，清新爽口。', 39),
(8, '天使法蘭奇', 'Angel French', '泡芙般鬆軟的甜甜圈體，<br>中間夾著獨特的香甜鮮奶油，<br>搭配獨家草莓巧克力，<br>每一口都是給你最大的滿足！', 39),
(9, '卡士達法蘭奇', 'Custard French', '泡芙般鬆軟的甜甜圈體，<br>中間夾著獨特的卡士達，<br>搭配獨家牛奶巧克力，<br>多層次的口感，讓人回味無窮！', 39);

-- --------------------------------------------------------

--
-- 資料表結構 `order`
--

CREATE TABLE `order` (
  `number` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `description` varchar(700) NOT NULL,
  `total` int(11) NOT NULL,
  `ps` varchar(256) NOT NULL,
  `user` int(11) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `order`
--

INSERT INTO `order` (`number`, `date`, `time`, `description`, `total`, `ps`, `user`, `status`) VALUES
(1, '2022-01-22', '19:05:00', ' 蜜糖波堤 x 2 顆 <br> 草莓波堤 x 2 顆 <br> 餅乾可可波堤 x 20 顆 <br> 蜜糖波堤 x 2 顆 <br>', 1134, '謝謝！', 3, '已取貨'),
(17, '2022-01-29', '20:36:00', ' 蜜糖波堤 x 3 顆 <br> 草莓波堤 x 4 顆 <br> 草莓波堤 x 3 顆 <br>', 390, '', 3, '已取貨'),
(18, '2022-02-10', '17:10:00', ' 蜜糖波堤 x 2 顆 <br>', 78, '請幫我分兩袋裝', 1, '已取貨'),
(19, '2022-02-09', '16:06:00', ' 草莓波堤 x 4 顆 <br> 餅乾可可波堤 x 20 顆 <br> 蜜糖波堤 x 2 顆 <br> 草莓波堤 x 1 顆 <br>', 1173, '請幫我盡量同種類放一起 謝謝。', 4, '已取貨'),
(20, '2022-01-24', '21:57:00', ' 天使法蘭奇 x 10 顆 <br> 草莓波堤 x 3 顆 <br> 雙層巧克力波堤 x 2 顆 <br>', 585, '沒有喔', 7, '已取貨'),
(21, '2022-01-27', '09:58:00', ' 蜜糖波堤 x 9 顆 <br> 草莓波堤 x 4 顆 <br> 雙層巧克力波堤 x 2 顆 <br> 優格波堤 x 4 顆 <br>', 741, '請老師給我高分一點QQ\r\n謝謝老師', 7, '已取貨');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `donut`
--
ALTER TABLE `donut`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`number`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `account`
--
ALTER TABLE `account`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `car`
--
ALTER TABLE `car`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `donut`
--
ALTER TABLE `donut`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `order`
--
ALTER TABLE `order`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
