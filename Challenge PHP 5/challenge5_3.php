<?php
if(empty($_COOKIE['LastLoginDate']))
{
	echo '初めてのアクセスです。';
}
else
{
	echo '前回のアクセス時間は' . $_COOKIE['LastLoginDate'].'です。';
}

$access_time = date('H:i:s');
setcookie('LastLoginDate', $access_time);
