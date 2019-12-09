<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
include ("conexion.php");
$sql="SELECT * from noticias";
//echo $sql;
$noticias=$con->query($sql);
?>
    <table>   
        <?php foreach($noticias as $noticia) { ?>
            <tr>
                <td><img src="images/<?php echo $noticia['imagen'];?>" width="40px" height="30px" alt=""></td>
                <td><?php echo $noticia['titulo'];?></td>
                <td><?php echo substr($noticia['texto'], 0, 100);?></td>
                <td><button onclick="verMas('<?php echo $noticia['id']?>');">ver</button></td>
            </tr>
        <?php } ?>
    
</table>