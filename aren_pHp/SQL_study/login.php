<?php

$dsn="mysql:host=localhost;chatset=utf8;dbname=coffee";
$pdo=new PDO($dsn , 'root' , '');
// $pdo=new PDO($dsn , 'root' , '') error();

$acc=$_POST['acc'];
$pw=$_POST['pw'];

// $sql="select * from `members` where `acc` && `password` = '$pw'";
$sql="select count(*) from `members` where `acc`='$acc' && `password` = '$pw'";
echo $sql;
echo "<br>";

// $user=$pdo->query($sql)->fetch();
// echo "<pre>";
// print_r($user);
// echo "</pre>";
$chk=$pdo->query($sql)->fetchColumn();
echo "<pre>";
print_r($chk);
echo "</pre>";




// echo ($acc==$user['acc'] && $pw==$user['password']) ? '登入成功' : '失敗;已註冊' ;
echo ($chk) ? '登入成功' . header("location:index.html") : '登入失敗' ;



echo "<br><a href='./'>回登入頁</a>";
// header("location:index.html");

