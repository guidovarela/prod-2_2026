<!DOCTYPE html >
<html>
<head>
<meta charset='utf-8' />
<title>Paso 3</title>
</head>

<body>
	<h1>
	paso 4 de las sesiones

	Chau:
	<?php
		session_start();
		echo $_SESSION['nombre'];
		echo $_SESSION['fecha']; ?>
	</h1>

	<a href="sesion4.php" title=""></a>

	
<a href="salir.php">SALIR</a>
</body>
</html>
