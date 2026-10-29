<!DOCTYPE html >
<html>
<head>
<meta charset='utf-8' />
<title>Paso 3</title>
</head>

<body>
	<h1>
	Hola:
	<?php
		session_start();
		echo $_SESSION['nombre']; ?>
	</h1>

	<a href="sesion4.php" title="">paso 4</a>
<a href="salir.php">SALIR</a>
</body>
</html>
