# php_project_donutshop
PHP for my class exam project  
指導老師：蔡坤孝  

### 使用方法及demo影片
* 需使用xampp連接localhost
* db需要連上xampp後連到phpmyadmin匯入  
* Youtube影片連結 https://youtu.be/GVZ3IsqFM-g
---
### 主題發想
因為在MisterDonut打工，所以想做一個以甜甜圈為主題的購物車網頁，  
每次如果有客人要跟我們訂購甜甜圈的話，都只能用電話溝通，非常耗時跟耗費人力，  
如果是大量的訂單，客人又不是很熟悉甜甜圈種類的話，來回溝通就有可能會花費到半小時以上的時間。  
所以才會想要做一個購物車網頁，有員工跟管理員的視角，可以處理不同訂單，  
達到省時又省力的效益！  

圖片來源「[MisterDonut官方網站](https://www.misterdonut.com.tw/)」

* 圖片部分
1. 部分採用電繪（除了甜甜圈圖片以外都是），在美術方面想要保有自己的風格與原創性
2. Logo上的H 是因為我姓許，X是印為XXX donut（假店名）
2. 甜甜圈圖片皆擷自多拿滋官方網站
4. 使用Photoshop編輯圖片及繪畫
5. 為了保存較好的圖片畫質，圖檔皆為 **.png** 因此檔案偏大，主要是背景會超過作業上傳限制

* 前端部分
1. 使用Boostrap框架
2. 利用Boostrap有做出RWD，並修改版型

* 後端部分
1. 使用`session`紀錄使用者狀態
2. 使用`JavaScript`讓menubar跟一些重複性質的東西不會重複出現在各網頁中
3. 主要著重在
    - 使用者登入登出、後台管理系統（user_*.php）
    - 訂單狀態檢視及管理（user_manager.php、user_member.php）
    - 購物車功能（shop_*.php）
    - 甜甜圈系列展示（donuts.php）
4. 使用到資料庫db_donuts.sql
5. ***影片中忘記補充：***
    - 購物車中需打勾的資訊「注意事項」可以點擊 -> 連結到「購買前必看」
    - 鼠標移動到「注意事項」上面，會顯示「點我前往」，提醒下單的人會跳轉網頁
---





