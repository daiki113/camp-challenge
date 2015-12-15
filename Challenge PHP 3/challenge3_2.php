<?php
function hiki_su($num)
{
	if ($num % 2 == 0) 
	{
		echo '‹ô”';
	}
	else
	{
		echo 'Šï”';
	}
}

hiki_su(10);