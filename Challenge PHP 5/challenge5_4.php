<?php

session_start();
date_default_timezone_set('Asia/Tokyo');

if(empty($_SESSION['LastLoginDate']))
{
	echo '初めてのアクセスです。';
}
else
{
	echo '前回のアクセス時間は'.$_SESSION['LastLoginDate'].'です。';
}

$accses_time = date('H:i:s');
$_SESSION['LastLoginDate'] = $accses_time;
