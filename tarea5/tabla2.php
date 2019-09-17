<?php 
$filas=$_GET['txtfilas'];
$columnas=$_GET['txtcolumnas'];
?>
<table border="1">
	<?php 
	for ($i=0;$i<=$filas;$i++)
	{
		echo "<tr>";
		for ($j=0;$j<=$columnas;$j++)
		{
					
			if ($i==0) // la primera fila
			{   echo "<th>";
				if ($j==0)
					echo "X";
				else
					echo $j;
				echo "</th>";
			}
			else
			{ 
				if ($j==0)
				{
					echo "<th>";
					echo $i;
					echo "</td>";
				}
				else
				{
					echo "<td>";
					echo $i*$j;	
					echo "</td>";
				}
			
			}
		}
		echo "</tr>";
	} ?>   
</table>