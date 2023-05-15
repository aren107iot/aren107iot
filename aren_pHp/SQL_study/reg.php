<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員註冊</title>
</head>
<body>
    
<h1>會員註冊</h1>
<form action="add_user.php" method="post">
        <p>
            <label for="name">name:</label>
            <input type="text" name="name" id="name">
        </p>
        <p>
            <label for="acc">acc:</label>
            <input type="text" name="acc" id="acc">
        </p>
        <p>
            <label for="password">password:</label>
            <input type="password" name="password" id="password">
        </p>
        <p>
            <label for="email">email:</label>
            <input type="text" name="email" id="email">
        </p>
        <p>
            <label for="phone">phone:</label>
            <input type="text" name="tel" id="tel">
        </p>
        <p>
            <input type="submit" value="sign_up">
            <input type="reset" value="reset">
        </p>
    </form>

</body>
</html>