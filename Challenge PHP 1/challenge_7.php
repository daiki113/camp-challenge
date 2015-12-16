<?php
$type = $_GET['type'];
$total = $_GET['total'];
$thing = $_GET['thing'];

echo $type;

if ($type == 1)
{
	echo '雑貨';
} 
elseif ($type == 2)
{
	echo '生鮮食品';
}
elseif ($type == 3)
{
	echo 'その他';
}
echo '</br>';

echo $total ."<br>";

echo $total / $thing ."<br>";

if (($total >= 3000) && ($total < 5000))
{  
echo $total * 0.04;
} 
elseif ($total >= 5000 ) 
{
echo $total * 0.05;
}