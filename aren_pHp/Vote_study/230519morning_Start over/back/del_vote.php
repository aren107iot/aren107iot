//確認刪除頁面

刪除資料

<?php include_once "../db.php";
$row=$pdo->query("select * from `topics` where id='{$_GET['id']}'")->fetch(PDO::FETCH_ASSOC);
?>


<h3>你確定要刪除以下投票及相關資料</h3>
<div><?=$row['subject'];?></div>

<div>
    <button onclick="location.href='../api/del_vote.php?id=<?=$_GET['id'];?>'">確定刪除</button>
    <button onclick="location.href='../backend.php'">取消刪除</button>

</div>