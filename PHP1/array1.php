<html>
<head>
<title>say my name</title>

</head>
<body>
<form method="post" action="array2.php">
<table>
	<tr>
	<td>write
	<input type="text" name="t1"></td>
	</tr>
<tr>
<td>
<input type="submit" name="b" value="send"></td>
</tr>

</body>
<?php
echo "<h4 align=center>";
echo "Today is "."<br/>";
echo date("d,m,y");
echo "</h4>";
  /*taken (a)variable of an array.stored some movies name.displayed using 
print .*/
	echo "list of movies"."<br/>";
	$a=array("Life of brain","Strips","terminator2","Dill to pagal hay");
    asort($a);
    print_r($a);
	print"$a[0]"."<br/>";
	print"$a[1]"."</br>";
	print"$a[2]";

/*Step..2 below i showed same array-value using a foreach loop.all the above values
will be showed together.*/
echo "<br/>";
foreach($a as $value)
{
echo "<br/>";
echo "$value"; 
}
?>
</html>