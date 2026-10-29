<!DOCTYPE html >
<html>
<head>
<meta charset='utf-8' />
<title>Paso 3</title>
</head>

<body>
	<?php
	session_start();
	if (isset($_SESSION['nombre'])) {
		?>
		<h1>
		Hola: <?php echo $_SESSION['nombre']; ?>
		</h1>
		<a href="sesion4.php" title="">Siguiente >></a>
		<a href="salir.php">SALIR</a>
	<?php
	}else{
		echo "El usuario no es seteado. <br>";
		echo "<a href='sesion1.php'>Ingresar Usuario</a>";
	}
	?>


</body>
</html>
