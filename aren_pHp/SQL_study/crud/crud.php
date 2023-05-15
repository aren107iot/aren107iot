<?php
$dsn = "mysql:host=localhost;charset=utf8;dbname=student_student";
$pdo = new PDO($dsn, 'root', '');

?>
<style>
    table {
        border-collapse: collapse;
        width: 70%;
        min-width: 800px;
    }

    td {
        border: 1px solid black;
        padding: 5px 8px;
    }
</style>



<h1>學生列表</h1>
<a class="btn" href="insert_form.php">新增學生資料</a>
<table>
    <tr>
        <td>序號</td>
        <td>學號</td>
        <td>班級</td>
        <td>姓名</td>
        <td>出生年月日</td>
        <td>身分證</td>
        <td>住址</td>
        <td>家長</td>
        <td>電話</td>
        <td>科別</td>
        <td>畢業國中</td>
        <td>編輯</td>
        <td>刪除</td>
    </tr>
    <?php
$sql = "select * from students ";
$rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
foreach ($rows as $row) {
    ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['uni_id']; ?></td>
            <td><?= $row['seat_num']; ?></td>
            <td><?= $row['name']; ?></td>
            <td><?= $row['birthday']; ?></td>
            <td><?= $row['national_id']; ?></td>
            <td><?= $row['address']; ?></td>
            <td><?= $row['parent']; ?></td>
            <td><?= $row['telphone']; ?></td>
            <td><?= $row['major']; ?></td>
            <td><?= $row['secondary']; ?></td>
            <td><a href='edit_form.php?id=<?=$row['id'];?>'>編輯</a> </td>
            <td><a href='del.php?id=<?=$row['id'];?>'>刪除</a> </td>
            <!-- <td><a href="#" onclick="confirm()"></a> 刪除</td> -->
            <!-- <td><a href="#" onclick="alert()"></a> 刪除</td> -->
        </tr>
    <?php
}
    ?>
    </table>