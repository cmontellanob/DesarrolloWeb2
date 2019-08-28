<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<table>
	<tr>
		<th>n1</th>
		<th>+</th>
		<th>n2</th>
		<th>=</th>
		<th>n1+n2</th>
	</tr>
<?php
	for ($i=0; $i <10000 ; $i++) { 
		 ?>
		 <tr>
		 	<td>1</td>
		 	<td>+</td>
		 	<td><?php echo $i ?></td>
		 	<td>=</td>
		 	<td><?php echo $i+1 ?></td>	
		 </tr>
		<?php }?>	
</table>
 
</body>
</html>
