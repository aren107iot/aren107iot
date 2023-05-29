<?php

echo "<pre>";
print_r(all('options'));
echo "</pre>";
echo "<pre>";
print_r(find('options',23));
echo "</pre>";

// update('topics',
// ['subject' = '今天天氣好' , 'open_time' = '2023-05-29' , 'close_tiem' = '2023-06-05';],
// [3])

function all($table)
{
    $dsn = "mysql:host=localhost;charset=utf8;dbname=vote";
    $pdo = new PDO($dsn, 'root', '');
    $sql = "select * from `$table` ";
    $rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    return $rows;
}

function find($table, $id)
{
    $dsn = "mysql:host=localhost;charset=utf8;dbname=vote";
    $pdo = new PDO($dsn, 'root', '');
    $sql = "select * from `$table` where `id` = '$id'";
    $row = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

    return $row;
}
// function find($table, $id)
// {
//     $dsn = "mysql:host=localhost;charset=utf8;dbname=vote";
//     $pdo = new PDO($dsn, 'root', '');
//     $sql = "select * from `$table` where `id` = '$id'";
//     $row = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

//     return $row;
// }

function update($table,$cols,$id)
{
    $dsn = "mysql:host=localhost;charset=utf8;dbname=vote";
    $pdo = new PDO($dsn, 'root', '');

$tmp='';
foreach($cols as $key => $value){
    $tmp .= "`$key`='$value',";
}

// trim刪除頭尾空白，帶參數改，
$tmp=trim($tmp,',');

    $sql = "upadte `$table` set   where `id` = '$id' ";
    $result=$pdo->exec($sql);

    return $result;
    // return 是否成功(回傳update筆數);
}



function delete($table,$id){
    $dsn = "mysql:host=localhost;charset=utf8;dbname=vote";
    $pdo = new PDO($dsn, 'root', '');
$sql="delete from `$table` where `id`='$id'";

    return $pdo->exec($sql);
}