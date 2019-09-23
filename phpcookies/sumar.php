<?php 
$n=$_COOKIE['n'];
$suma=0;
for ($i=0; $i < $n; $i++) { 
$suma+=$_POST['n'.$i];
 } 
echo "la suma es:" .$suma;

?>
