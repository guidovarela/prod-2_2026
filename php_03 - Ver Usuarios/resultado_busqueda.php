<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
</head>
<body class="color-scheme-light">
    <?php
    include("header.php");
    ?>
    <h2>Resultado Busqueda</h1>

    <?php
    $busqueda = $_POST['busqueda'];
    // echo $busqueda;
    
    // 1- conexion servidor Mysql
    include("conexion.php");

        // 2- realizar una consulta mysql
        $query3="SELECT id,nombre FROM contacto WHERE nombre LIKE '%$busqueda%' OR email LIKE '%$busqueda%'";
        $resultado = mysqli_query($conexion,$query3) or die("Hubo un error en la consulta. <br>".mysqli_error($conexion));   

        // 3- recorrer los resultados de la consulta 
        echo "Cantidad de resultados: " . mysqli_num_rows($resultado);

        // // 4- mostrar los resultados en una div
        // echo "<div>";
        // // mysqli_fetch_array() devuelve un array asociativo y numérico de la fila obtenida
        // // mysqli_fetch_assoc() devuelve un array asociativo de la fila obtenida
        // // mysqli_fetch_row() devuelve un array numérico de la fila obtenida

        echo "<ul>";
        for($i=0;$i<mysqli_num_rows($resultado);$i++){
            $fila = mysqli_fetch_array($resultado);
            echo    "<li>
                <a href='detalle_usuario.php?id=" . $fila['id'] . "'>" . $fila['nombre'] . "</a>
            </li>";
        }
        echo "</ul>";


        // // 5- cerrar la conexion
        // mysqli_close($conexion);


    ?>


    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>

</body>
</html>