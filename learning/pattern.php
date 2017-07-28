<?php
$a=$_POST['t1'];
$i;
$j;
$z=$a;
$k;
for($i=1;$i<=$a;$i++)
{
	for($j=2;$j<$i;$j++)
	{
	echo  "  ";
	}
	for($k=1;$k<=$z;$k++)
	{
	echo " *";
	}
	$z--;
	echo "\n"."<br>";
}
?>
