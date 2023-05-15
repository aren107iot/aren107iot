<?php
// session_start();
include("comm.php");
$acc='admin';
$pw='1234';

if ($_POST['acc']==$acc && $_POST['pw']==$pw) {
    echo "success";
    $_SESSION['login']=$acc;
}else{
    echo "error";
    $_SESSION['error']="帳號或密碼錯誤";
}