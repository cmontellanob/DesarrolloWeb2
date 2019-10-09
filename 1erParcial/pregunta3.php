<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Pregunta 3</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
<?php session_start();
include("conexion.php");
$sql="SELECT nombres,apellidos,correo  from usuarios ";
//echo $sql;
$resultado=$con->query($sql);
?>
<table >
	<tr>
	<th>Nombres</th>
	<th>Apellidos</th>
	<th>Correo</th>
</tr>
<?php 
$i=0;
while ($fila=$resultado->fetch_assoc())
{ $i++;
 ?><tr class="<?php if ($i%2==0) 
 				echo "celesteoscuro";
 				else
 				echo "celesteclaro";
 				?>">
 	<td><?php echo $fila['nombres']; ?></td>
	<td><?php echo $fila['apellidos']; ?></td>
	<td><?php echo $fila['correo']; ?></td>
</tr>
<?php
}
?>
</table>

</body>
</html>