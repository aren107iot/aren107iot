<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=coffee";
$pdo=new PDO($dsn,'root','');

$sql="INSERT INTO `members`(`name`, `acc`, `password`, `email`, `tel`) 
        VALUES ('{$_POST['name']}','{$_POST['acc']}','{$_POST['password']}','{$_POST['email']}','{$_POST['tel']}')";
echo $sql;
echo "<br>";
$pdo->exec($sql);
echo "'\$pdo='";
print_r($pdo);
echo "<br>";
echo "'\$sql=' $sql";


echo "<br><a href='./'>回登入頁</a>";
// header("location:index.html");