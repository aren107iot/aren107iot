<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php

    function sum1($a, $b)
    {
        // return $a+$b;
        $sum = $a + $b;
        return $sum;
    }

    // $sum=sum_(10,21);
    // echo '$sum='. $sum;

    function sum2(...$a)
    {
        $sum = 0;
        foreach ($a as $b) {
            $sum = $sum + $b;
        }
        return $sum;
    }

    $sum = sum2(10, 21, 10, 10, 10, 10, 10, 10, 10);
    echo '$sum=' . $sum;
    echo "<br>";

    // global變數不可在g();之後
    $name = 'lai';
    g();

    function g()
    {
        global $name;
        echo "1234" . $name;
        echo "<br>";
    }

    function circle($a, $b = 3.14159)
    {
        return $a ** 2 * $b;
        // $平方 = $a ** 2; // 平方
        // $立方 = $a ** 3; // 立方
        // $四次方 = $a ** 4; // 四次方
    }
    echo circle(1);






    ?>


</body>

</html>