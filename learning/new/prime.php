<?php
$a=$_POST['t1'];
$b = 0;
$i;
for($i=2;$i<$a;$i++)
{
    if($a%$i == 0)
    {
        $b=1;
        break;
    }
    
}
if($b == 1)
{
    echo "Not prime";
} else 
{
    echo "Prime";
}
?>
