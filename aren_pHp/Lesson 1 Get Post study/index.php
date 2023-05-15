<h1>表單傳直</h1>
<h3>GET</h3>

<form action="target.php" method="get">
    <input type="text" name="addr" id="">
    <input type="text" name="name" id="">
    <input type="submit" value="go">
</form>

<h3>POST</h3>
<form action="target.php" method="post">
    <input type="text" name="name" id="">
    <input type="submit" value="go">
</form>

<h3>POST及檔案上傳</h3>
<form action="target.php" method="post" enctype="multipart/form-data">
    <input type="text" name="type" id="">
    <input type="file" name="img" id="">
    <input type="submit" value="go">
</form>

