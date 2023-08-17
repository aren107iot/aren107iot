<?php




$uri=$_SERVER['REQUEST_URI']; //取得路徑字串，至少會有"/"
$parseUri=explode("/",$uri);  //使用"/"把字串拆成陣列

// 判斷陣列[1]是否為空,空表示路徑只到根目錄,回傳"/",
// 否則表示有東西,回傳路由字串
$route=(!empty($parseUri[1]))?$parseUri[1]:"/";

//根據請求的類型去執行不同的動作
switch($_SERVER['REQUEST_METHOD']){
case "POST":
    //判斷路由字串來決定要做什麼事，或是導向其它路由
    
break;
case "GET":
    //判斷路由字串來決定要做什麼事，或是導向其它路由

break;
case "PUT":
    //判斷路由字串來決定要做什麼事，或是導向其它路由

break;
case "DELETE":
    //判斷路由字串來決定要做什麼事，或是導向其它路由

break;
}