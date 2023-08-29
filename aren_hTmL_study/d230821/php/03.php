<?php

function dd($res){
echo ('<pre>');
print_r($res);
echo ('</pre>');
}

header("Access-Control-Allow-Origin: *");
  header("Access-Control-Allow-Methods: *");
  header("Access-Control-Allow-Headers: Origin, Methods, Content-Type");

$url = "https://odws.hccg.gov.tw/001/Upload/25/opendataback/9059/165/9084dda0-a6c1-496b-b175-f7c2f22b66f1.json";

$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

$result = curl_exec($ch);
echo $result;

// curl_close($ch);
$resultType = gettype($result);
$json_decode_data = json_decode($result);
// dd($resultType );
// dd($result );
// dd($json_decode_data );




//   $data=[
// 0 => '資料1',
// 1 => '資料2',
// 'url' => $url
//   ];
//   echo json_encode($data);