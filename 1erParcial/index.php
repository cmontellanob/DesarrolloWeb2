<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio </title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<div id="contenedor">
		<div id="cabeza"> 
			<div id="cabeza-izq"><img src="images/usfx.png" alt=""></div>
			<div id="cabeza-cnt">
				<span class="rojo">UNIVERSIDAD DE SAN FRANCISCO XAVIER	</span><br>
				<span class="celeste">Facultad de Tecnología</span>
				<span class="rojo">Sucr</span> 
				<span class="amarillo">e-Bol</span>
				<span class="verde">ivia</span>	
				<br> Carrera Ing de Sistemas <br>
				Semestre 2-2019 <br>	
				Alumno: <span class="celeste-bg">Carlos MOntellano</span> CU: <span class="celeste-bg">35-239</span>
			</div>
			<div id="cabeza-der">
				<img src="images/tecnologia.png" alt="">
			</div>

		</div>
		<div id="contenido">
			<p>Estos son los datos de autenticación:</p>
			<div>Nombre: <span class="celeste"><?php echo $_SESSION['nombres'];?> </span> </div>
			<div>Apellidos: <span class="celeste"><?php echo $_SESSION['apellidos'];?></span></div>
			<div>Nivel: <span class="celeste">
				<?php if ($_SESSION['nivel']==0)
				echo "Usuario";
				else 
					echo "Administrador";	
				?></div>	


			</div>
		</div>
		<div id="derecha">
				<ul class="menu">
		<li><a href="index.php" >Inicio</a></li>
		<li style="color: #FF0000;"><a href="pregunta3.php">Pregunta 3</a></li>
		<li><a href="pregunta4.php" >Pregunta 4</a></li>
		<li><a href="pregunta5.html" >Pregunta 5</a></li>
	</ul>

		</div>
		<div id="pie"> Todos los Derechos Reservados </div>

	</body>
	</html>