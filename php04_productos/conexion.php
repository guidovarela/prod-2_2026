<?php

//Conexion Local (Wamp)
$host='localhost';
$userMySQL ='root' ;
$passwordMySQL= '';
$bbdd='nuevositio';

$conexion = mysqli_connect($host,$userMySQL,$passwordMySQL,$bbdd) or exit("Error en la conexion.".mysqli_error($conexion)); //tambien podemos usar die()
mysqli_set_charset($conexion, 'utf8mb4');
?>