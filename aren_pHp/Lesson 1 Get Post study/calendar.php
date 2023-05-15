<h2>月曆</h2>
<?php
$today=strtotime("now");    //取得當前的時間秒數
$month=date("n",$today);    //取得當前的月份
$days=date("t",$today);     //取得當前月份的總天數
$firstDate=date("Y-n-1",$today);    //取得當前月份第一天
$finalDate=date("Y-n-t",$today);    //取得當前月份最後一天
$firstDateWeek=date("w",strtotime($firstDate)); //取得當前月份第一天的星期
$finalDateWeek=date("w",strtotime($finalDate)); //取得當前月份最後一天的星期
$weeks=ceil(($days+$firstDateWeek)/7);  //計算當前月份的天數會佔幾周
$firstWeekSpace=$firstDateWeek-1;       //計算當前月份第一周的空白日(或前一個月份佔幾天)




$days=[];

//使用迴圈來畫出當前月的周數
for($i=0;$i<$weeks;$i++){
    //使用迴圈來畫出當周的天數
    for($j=0;$j<7;$j++){
        //判斷當周是否為第一周或最後一周
        if(($i==0 && $j<$firstDateWeek) || (($i==$weeks-1) && $j>$finalDateWeek)){
            $days[]='&nbsp';
        }else{
            $days[]=$j+7*$i-$firstWeekSpace;
        }
    }
}




$prevMonth=$month-1;
$nextMonth=$month+1;

/* echo "<pre>";
print_r($days);
echo "<pre>"; */

// echo "<table>";
// echo "<tr>";
// echo "<td>日</td>";
// echo "<td>一</td>";
// echo "<td>二</td>";
// echo "<td>三</td>";
// echo "<td>四</td>";
// echo "<td>五</td>";
// echo "<td>六</td>";
// echo "</tr>";
// for($i=0;$i<count($days);$i++){
//     echo ($i%7==0)?"<tr>":'';
//     echo "<td>";
//     echo $days[$i];
//     echo "</td>";
//     echo ($i%7==6)?"</tr>":'';
// }
// echo "</table>";

?>
<style>
  .calendar > div{
        border:1px solid #ccc;
        width:calc(100% / 7);
        box-sizing: border-box;
        margin-left:-1px;
        margin-top:-1px;

    }
.calendar{
    display:flex;
    flex-wrap: wrap;
    width:50%;
    margin-left:1px;
    margin-top:1px;
}

</style>
<div>
<a href="calendar.php?month=<?=$prevMonth;?>"><?=$prevMonth;?>月</a>

<span><?=$month;?>月</span>

<a href="calendar.php?month=<?=$nextMonth;?>"><?=$nextMonth;?>月</a>
</div>


<div class='calendar'>
<div>日</div>
<div>一</div>
<div>二</div>
<div>三</div>
<div>四</div>
<div>五</div>
<div>六</div>
<?php
for($i=0;$i<count($days);$i++){
    echo "<div> {$days[$i]} </div>";
}

?>

    
</div>