<h2>Cookie</h2>

<?php
date_default_timezone_set('Asia/Taipei');

setcookie('name','aren',strtotime("2023-05-03 11:00:00"));
setcookie('name','aren',time()+300);

echo $_COOKIE['name'];
