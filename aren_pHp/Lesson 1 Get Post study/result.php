<?php
$height = $_GET['height'];
$weight = $_GET['weight'];

echo "你輸入的身高為:" . $height . "cm<br>";
echo "你輸入的體重為:" . $weight . "kg<br>";

$bmi = $weight / (($height / 100) * ($height / 100));

$level = "";

if ($bmi >= 27) {
    $level = "肥胖";
} else if ($bmi >= 24) {
    $level =  "過重";
} else if ($bmi >= 18.5) {
    $level = "正常";
} else {
    $level = "過輕";
}



echo "你的BMI為：" . $bmi;
echo "<br>";
echo "你的體位判定為：$level";
echo "<br>";

echo "<a href='bmi_form.php'>回BMI頁</a>";
