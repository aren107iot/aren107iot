<!-- 註冊 -->

<?php
if (isset($_GET['error'])) {
?>
    <span style="color:rebeccapurple">
        "錯誤 請填入帳號或密碼"
    </span 
<?php
        }
?>
                        
<form action="./api/reg.php" method="post">
    <div>
        <laber for="acc">acc</laber>
        <input type="text" name="acc" id="acc">
    </div>
    <div>
        <laber for="pw">pw</laber>
        <input type="password" name="pw" id="pw">
    </div>
    <div>
        <laber for="name">name</laber>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <laber for="addr">addr</laber>
        <input type="text" name="addr" id="addr">
    </div>
    <div>
        <laber for="email">email</laber>
        <input type="text" name="email" id="email">
    </div>
    <div>
        <input type="submit" name="submit" id="submit">
    </div>
    </form>