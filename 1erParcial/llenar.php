<?php $n=$_POST['txtn'];
setcookie("txtn",$n,time()+3600);
?>
<form action="restar.php" method="POST">
	<?php for ($i=0;$i<$n;$i++)
	{?>

		<input type="number" name="sumando<?php echo $i?>">
	<?php  } ?>
	<br>
	<?php for ($i=0;$i<$n;$i++)
	{?>
		<input type="number" name="restando<?php echo $i?>">
	<?php  } ?>


		<input type="submit" value="calcular">
	</form>
