<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
</head>

<body>
    <h1>會員登入</h1>

<?php
if (isset($_GET['error'])) {
    switch ($_GET['error']) {
        case '1':
            echo "登入成功";
            break;
        case '2':
            echo "登入失敗 帳號密碼錯誤";
        default:
            echo "未知錯誤,請聯絡系統管理員";
    }
}


?>


    <form action="login.php" method="post">
        <p>
            <label for="acc">id:</label>
            <input type="text" name="acc" id="acc">
        </p>
        <p>
            <label for="paseword">paseword:</label>
            <input type="paseword" name="pw" id="pw">
        </p>
        <p>
            <input type="submit" value="login">
        </p>

    </form>

</body>

</html>