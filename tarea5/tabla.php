<?php 
$filas=$_GET['txtfilas'];
$columnas=$_GET['txtcolumnas'];
?>
<table border="1">
	<?php 
	for ($i=0;$i<=$filas;$i++)
		{?>
			<tr>
				<?php	
				for ($j=0;$j<=$columnas;$j++)
					{?>
					<td>
					<?php	
					  if ($i==0) // la primera fila
			  			{
			  			if ($j==0)
			  				echo "X";
			  			else
			  				echo $j;
			  			}
			  		  else
			  		  	if ($j==0)
			  				echo $i;
			  			else
			  				echo $i*$j;	
					?>
					</td>
				<?php }?>
	        </tr>
	    <?php }?>    

</table>