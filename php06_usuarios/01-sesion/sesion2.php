<!DOCTYPE html >
<html>
<head>
<meta charset='utf-8' />
<title>Paso 2</title>
</head>

<body>
	<?php
// operador AND &&, OR || 
if(isset($_POST['nombre'])){
	//se crea la sesion, con lo enviado por post
	$_SESSION['nombre'] = $_POST['nombre'];
	$_SESSION['fecha'] = date("d/m/Y");
	// opcional: $resultado = (condición) ? valor_si_verdadero : valor_si_falso;
	?>
 <h1>Se  ha creado la sesión.</h1>
 <a href="sesion3.php">Siguiente >>  </a>
	
<?php
}else{
	echo "El usuario no es seteado. <br>";
	echo "<a href='sesion1.php'>Crear Usuario</a>";
}
<?php
}

?>
</body>
</html>
