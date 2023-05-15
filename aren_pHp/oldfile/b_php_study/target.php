<h2>target</h2>
<?php

if(!empty($_GET)){
    echo "以下資料為Get表單的資料<br>";
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
}

if(!empty($_POST)){
    echo "以下資料為POST表單的資料";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}

echo $_GET['addr'];
echo $_POST['name'];
echo $_POST['type'];