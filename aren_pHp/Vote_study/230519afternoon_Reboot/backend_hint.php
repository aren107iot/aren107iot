<?php include_once "db.php";?>
<!-- 引入 db.php 檔案，這個檔案應該包含資料庫連線相關的程式碼 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理後台</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<header>
    <a href="index.php">首頁</a>
    <a href="login.php">登出</a>
</header>
<main>
<nav>
    <a href='./back/add_vote.php'>新增投票</a>    
    <a href='./back/edit_vote.php'>編輯投票</a>    
    <a href='./back/del_vote.php'>刪除投票</a>    
    <a href='./back/query_vote.php'>結果查詢</a>
</nav>
<ul class="topic-list">
    <li class="list-row">
        <div class="list-item-title">主題</div>
        <div class="list-item-title">狀態</div>
        <div class="list-item-title">期間</div>
        <div class="list-item-title">投票數</div>
        <div class="list-item-title">操作</div>
    </li>
<?php
    // 從資料庫中查詢主題清單
    $sql="select * from `topics`";
    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    foreach($rows as $row){
?>
    <li class="list-row">
        <div class="list-item"><?=$row['subject'];?></div>
        <div class="list-item"></div>
        <div class="list-item">
          <?=$row['open_time'] . " ~ " . $row['close_time'];?>
        </div>
        <div class="list-item"></div>
        <div class="list-item">
            <!-- 編輯和刪除按鈕，按下按鈕時會導向不同的頁面並帶上投票的 ID 參數 -->
            <button onclick="location.href='./back/edit_vote.php?id=<?=$row['id'];?>'">編輯</button>
            <button onclick="location.href='./back/del_vote.php?id=<?=$row['id'];?>'">刪除</button>
        </div>
    </li>
<?php
    }
?>
</ul>    
</main>
<footer></footer>
</body>
</html>　

這段程式碼是一個管理後台的網頁，用於管理投票主題的新增、編輯、刪除和查詢結果等操作。

1. `<header>` 元素包含了首頁和登出的連結，用於導航到其他頁面。
2. `<nav>` 元素包含了新增投票、編輯投票、刪除投票和結果查詢的連結，用於導航到不同的操作頁面。
3. `<ul class="topic-list"> 是一個無序列表，用於顯示投票主題清單。每個主題都以一個 `<li>` 元素呈現，包含以下內容：

- `<div class="list-item-title">` 元素用於顯示主題、狀態、期間和投票數的標題。
- `<div class="list-item">` 元素用於顯示每個主題的具體資訊，例如主題名稱和開放時間。
- 最後一個 `<div class="list-item">` 元素包含操作按鈕，用於編輯和刪除該主題的投票。

在 PHP 部分的程式碼中，使用 `foreach` 迴圈遍歷資料庫中的主題資料，並將每個主題的資訊填入對應的 HTML 元素中。

這段程式碼假設已經引入了 `db.php` 檔案，其中包含了資料庫連線的程式碼，以便能夠成功執行資料庫查詢。

此外，程式碼中也引入了一個 CSS 樣式表 `style.css`，用於自訂網頁的外觀和排版。

最後，`<footer>` 元素用於放置頁尾內容，可以根據需要進一步自訂。