<?php
$_POST['number'];
$sum=0;
$n=$_POST['number']; 
for($i=1;$i<=$n;$i++)
{
$sum=$sum+$i;
    
}
echo "$sum";
?>