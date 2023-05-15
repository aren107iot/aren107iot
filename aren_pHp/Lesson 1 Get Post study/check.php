<?php
$acc="admin";
$pw=1234;

$_POST['acc'];
if ($_POST['acc']==$acc && $_POST['pw']==$pw) {
    echo "登入成功";# code...
} else {
    echo "登入失敗";# code...
    header("location:login.php?error=帳號密碼錯誤");
}
?>
<br>
<br>
<br>
<a href="login.php">back login</a>

