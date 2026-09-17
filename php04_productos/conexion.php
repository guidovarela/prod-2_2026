<?php

//Conexion Local (Wamp)
$host='localhost';
$userMySQL ='root' ;
$passwordMySQL= '';
$bbdd='nuevositio';

@$conexion = mysqli_connect($host,$userMySQL,$passwordMySQL,$bbdd) or exit("Error en la conexion."); //tambien podemos usar die()

?>