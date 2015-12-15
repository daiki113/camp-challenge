<?php
$access_time = date('h:i:s');
setcookie('LastLoginDate',$access_time);
$lastDate = $_COOKIE['LastLoginDate'];
echo '前回ログイン時間は' . $lastDate . 'です！';