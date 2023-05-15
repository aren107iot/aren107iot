<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
    <style>
        form>div {
            border: 1px solid red;
            width: 400px;
            margin: 50px auto;
            padding: 50px;
            border-radius: 25px;
        }
    </style>
</head>

<body>
    <form action="check.php" method="post">
        <div>
            <div class="input">
                <label for="">帳號:</label>
                <input type="text" name="acc" id="acc">
            </div>
            <div class="input">
                <label for="">密碼:</label>
                <input type="password" name="pw" id="pw">
            </div>
            <div>
                <input type="submit" value="登入">
            </div>
        </div>
    </form>
</body>

</html>