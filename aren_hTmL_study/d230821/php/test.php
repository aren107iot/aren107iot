<?php
  header("Access-Control-Allow-Origin: *");
  header("Access-Control-Allow-Methods: *");
  header("Access-Control-Allow-Headers: Origin, Methods, Content-Type");


  $data=[
0 => '資料1',
1 => '資料2',
  ];

  echo json_encode($data);