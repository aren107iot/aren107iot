<?php include_once "../db.php";

$pdo->exec("delete from `logs` where `id`='{$_POST['id']}'");

header("location:../backend.php");