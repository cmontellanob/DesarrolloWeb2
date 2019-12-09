<?php
    include ('Conexion.php');

    $pass = sha1($_POST['password']);
    $correo = $_POST['correo'];
    $nombre = $_POST['nombrecompleto'];
    $nivel = $_POST['nivel'];
    $sql="INSERT INTO usuarios(nombrecompleto,correo,password,nivel)
    values ('nombrecompleto','correo','password',$nivel)";

    if ($con->query($sql)) {
        header('location: listaUsuarios.php');
    }
    else
        echo 'ocurrio un error';
?>