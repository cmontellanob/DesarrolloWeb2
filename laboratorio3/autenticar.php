<?php 
$correo=$_POST["txtCorreo"];
$password=sha1($_POST["txtPassword"]);

$rusuario=$_POST['chkUsuario'];

if ($rusuario=='recordar')
	setcookie('Usuario',$correo,time()+3600);

$rpassword=$_POST['chkPassword'];
if ($rpassword=='recordar')
	setcookie('Password',$password,time()+3600);


?>