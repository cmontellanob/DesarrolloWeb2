<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
   include('conexion.php');
   $sql='select * from usuarios';
   $usuarios=$con->query($sql);
?>

<table border="1">
        <thead>
            <tr>
                <th>correo</th>
                <th>contraseña</th>
                <th>nombre completo</th>
                <th>nivel</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($usuarios as $usuario): ?>
                <tr>
                    <td><?=$usuario['correo'];?></td>
                    <td><?=$usuario['password'];?></td>
                    <td><?=$usuario['nombrecompleto'];?></td>
                    <td><?=$usuario['nivel'];?></td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    <a href="index.html"> volver atras</a>
</body>
</html>