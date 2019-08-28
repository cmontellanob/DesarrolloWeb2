<?php 
$n=7;
$v=array();
$v[0]=0;
$v[1]=1;
for ($i=2;$i<=$n;$i++)
{
 $v[$i]=$v[$i-1]+$v[$i-2];
 }
echo $v[$n]; 
 ?>
