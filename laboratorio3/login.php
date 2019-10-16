<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<form  method="post" action="autenticar.php">
  <label for="txtCorreo">Usuario</label>
    <input type="text" name="txtCorreo" value="<?php if (isset($_COOKIE['Usuario']))
        {
          echo $_COOKIE['Usuario']; 
        }


 ?>" /> <br>
    <label for="txtpassword">Contraseña</label> 
    <input type="password" name="txtPassword"  /><br>
     <input type="checkbox" name="chkUsuario" value="recordar" <?php if (isset($_COOKIE['Usuario']))
     {
      echo 'checked="cheked"';
     }?>>Recordar Usuario<br>
     <input type="checkbox" name="chkPassword" value="recordar" />Recordar Contraseña<br>
   
    <input type="submit" name="button" id="button" value="Aceptar" />    
    <input type="reset" name="Limpiar" id="Limpiar" value="Limpiar" />
    <br />
  </p>
</form>
</body>
</html>
