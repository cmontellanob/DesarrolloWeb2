<?php
$n=$_COOKIE['txtn'];
?>
<table style="border: 1px solid;">
	<tr>
		<?php for ($i=0;$i<$n;$i++)
		{?>
		<td style="border: 1px solid;" ><?php echo $_POST['sumando'.$i]-$_POST['restando'.$i] ?> </td>
		<?php }?> 
	</tr>
</table>