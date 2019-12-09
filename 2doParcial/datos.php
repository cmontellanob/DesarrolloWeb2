<?php
$id=$_GET['id'];
include ("conexion.php");
$sql="SELECT * from noticias WHERE id=".$id;
//echo $sql;
$consulta=$con->query($sql);
$noticia=$consulta->fetch_assoc();
?>
    <img src="images/<?php echo $noticia['imagen'];?>" ><br>
    <h2><?php echo $noticia['titulo'];?></h2>
    <div>    <?php echo $noticia['texto']?></div>
