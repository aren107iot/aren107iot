<?php

$dsn = "mysql:host=localhost;charset=utf8;dbname=student_student";
$pdo = new PDO($dsn, 'root', '');

$sql="delete from students where `id`='{$_GET['id']}'";
// '{}'php大括弧包覆為字串

$pdo->exec($sql);


header("location:crud.php");
?>