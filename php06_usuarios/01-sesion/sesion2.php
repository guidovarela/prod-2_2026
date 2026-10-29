<!DOCTYPE html >
<html>
<head>
<meta charset='utf-8' />
<title>Paso 2</title>
</head>

<body>
	<?php
session_start();
//se crea la sesion, con lo enviado por post
$_SESSION['nombre'] = $_POST['nombre'];
$_SESSION['fecha'] = date("d/m/Y");

?>
 <h1>Se  ha creado la sesión.</h1>
 <a href="sesion3.php">Siguiente >>  </a>
</body>
</html>
