<?php
$year=$_POST['t1'];

	if($year%4==0)
	{
	echo "<h1 align= center>".$year."is leap year";
	}
	else
	{
	echo "<h1 align=center>".$year."is not leap year";
	}
?>
