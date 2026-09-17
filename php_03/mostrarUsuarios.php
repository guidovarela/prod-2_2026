<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Usuarios</title>
</head>
<body>
    
    <h1>Listado de Usuarios</h1>

    <?php
    
    // 1- conexion servidor Mysql

        $host="localhost";
        $user="root";
        $pass="";
        $database="nuevositio";

        $conexion = mysqli_connect($host, $user, $pass, $database);
        if ($conexion === false) {
            die("Hubo un error. <br>" . mysqli_connect_error());
        }

        // 2- realizar una consulta mysql
        $query2="SELECT * FROM contacto";
        $resultado = mysqli_query($conexion,$query2) or die("Hubo un error en la consulta. <br>".mysqli_error($conexion));   

        // 3- recorrer los resultados de la consulta 
        echo "Cantidad de usuarios: " . mysqli_num_rows($resultado);

        // 4- mostrar los resultados en una div
        echo "<div>";
        // mysqli_fetch_array() devuelve un array asociativo y numérico de la fila obtenida
        // mysqli_fetch_assoc() devuelve un array asociativo de la fila obtenida
        // mysqli_fetch_row() devuelve un array numérico de la fila obtenida

        for($i=0;$i<mysqli_num_rows($resultado);$i++){
            $fila = mysqli_fetch_array($resultado);
            echo "<p>id:" . $fila[0] . " - " . $fila['nombre'] . " - " . $fila['email'] . "<br> Fecha de registro: " . $fila['fechaEnvio'] . "</p>";
        }

        // 5- cerrar la conexion
        mysqli_close($conexion);


    ?>


</body>
</html>