<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=vote";
$pdo=new PDO($dsn, 'root', '');

session_start();

$msg=[
1=>"本調查為會員限定，請登入",
2=>"本.."
]






?>