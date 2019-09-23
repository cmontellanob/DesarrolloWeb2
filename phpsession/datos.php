<?php  session_start();
$n=$_GET['txtn'];
$_SESSION["n"]=$n;
?>
<form action="sumar.php" method="POST">
<?php 
for ($i=0; $i < $n; $i++) { 
?>

<input type="text" name="n<?php echo $i?>"><br/>

<?php
 } 
?>
<input type="submit" value="sumar">

</form>
</form>