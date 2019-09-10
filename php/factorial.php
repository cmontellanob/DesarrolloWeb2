<?php 
function factorial ($n)
{
	$r=1;
	for ($i=1;$i<=$n;$i++)
	{
		$r*=$i;
	}
	return $r; 
}
?>