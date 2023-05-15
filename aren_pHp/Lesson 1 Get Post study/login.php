<style>
    body {
        background-color: #eee;
        text-align: center;
    }

    form {
        background-color: #fff;
        margin: auto;
        height: 50vh;
        width: 50vh;
    }
</style>

<h1>login page</h1>
<?php
if (isset($_GET['error'])) {
    echo "<span style='color:red'>";
    echo $_GET['error'];
    echo "</span>";
}
?>
<form action="check.php" method="post">
    <div>
        <label for="acc">ID&nbsp;:</label>
        <input type="text" name="acc" id="acc">
    </div>
    <div>
        <label for="pw">PW:</label>
        <input type="password" name="pw" id="pw">
    </div>
    <div>
        <input type="submit" value="login">
    </div>
</form>