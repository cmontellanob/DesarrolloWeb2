<?php include ("conexion.php");
$sql="SELECT id,nombres,apellidos,cu,ci from alumnos ";
//echo $sql;
$resultado=$con->query($sql);
?>
<table>
	<tr>
	<th>Nombres</th>
	<th>Apellidos</th>
	<th>CU</th>
	<th>CI</th>
</tr>
<?php 
while ($fila=$resultado->fetch_assoc())
{
 ?><tr>
 	<td><?php echo $fila['nombres']; ?></td>
	<th><?php echo $fila['apellidos']; ?></th>
	<th><?php echo $fila['cu']; ?></th>
	<th><?php echo $fila['ci']; ?></th>
</tr>
<?php
}
?>
</table>