<?php
include_once "../db.php";

echo "<pre>";
print_r($_POST);
echo "</pre>";

$sql_chk_subject="select count(*) from `topice` where subject='{$_POST['subject']}'";
$chk=$pdo->query($sql_chk_subject)->fetchColumn();
echo  ($chk>0) ? '主題已被使用' : 

$sql = "INSERT INTO `topics` ( `subject`, `open_time`, `close_time`, `type`) 
VALUES ('{$_POST['subject']}','{$_POST['open_time']}','{$_POST['close_time']}','{$_POST['type']}')";

$pdo->exec($sql);
;

$sql_subject_id="select `id` from `subject`='{$_POST['subject']}'";



// header("location:../index.php");