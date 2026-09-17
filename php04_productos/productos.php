<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $title = "UTN 2021" ?>
    
    <title><?php echo $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>
<?php
include("header.php");
// Inclusión del archivo de conexión centralizado
include("conexion.php");

// Ejecución de la consulta SQL para seleccionar todos los productos
$query = "SELECT * FROM productos";
$resultado = mysqli_query($conexion, $query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Productos</title>
    <style>
        .catalogo { display: flex; flex-wrap: wrap; gap: 20px; }
        .tarjeta-producto { border: 1px solid #ccc; padding: 15px; width: 220px; border-radius: 8px; }
        .tarjeta-producto img { max-width: 100%; height: auto; border-radius: 4px; }
        .precio { font-weight: bold; color: #2e7d32; }
        .categoria { font-size: 0.8em; color: #777; text-transform: uppercase; }
    </style>
</head>
<body>

    <h1>Catálogo de Productos</h1>

    <div class="catalogo">
        <?php
        // Recorremos cada fila obtenida de la base de datos
        while ($producto = mysqli_fetch_array($resultado)) {
        ?>
            <div class="tarjeta-producto">
                <span class="categoria"><?php echo $producto['categoria']; ?></span>
                <img src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>">
                <h3><?php echo $producto['nombre']; ?></h3>
                <p><?php echo $producto['descripcion']; ?></p>
                <p class="precio">$<?php echo $producto['precio']; ?></p>
            </div>
        <?php
        }

        // Cierre de la conexión a la base de datos
        mysqli_close($conexion);
        ?>
    </div>

    <?php 
        include("footer.php");
    ?>
</body>
</html>