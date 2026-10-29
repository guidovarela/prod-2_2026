<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $title = "E-commerce" ?>
    
    <title><?php echo $title ?></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
<?php
include("header.php");
// Inclusión del archivo de conexión centralizado
require_once("conexion.php");

// Ejecución de la consulta SQL para seleccionar todos los productos
$query = "SELECT * FROM productos";
$resultado = mysqli_query($conexion, $query);
?>
<div class="container">

    <h1>Catálogo de Productos</h1>



    <div class="catalogo row">
        <?php
        // Recorremos cada fila obtenida de la base de datos
        while ($producto = mysqli_fetch_array($resultado)) {
        ?>
        <div class="md:col-6 lg:col-3">
            <div class="card ">
                <div class="card-body">
                    <div class="card-img">
                        <img class="img-fluid" src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>">
                    </div>    
                    <span class="badge badge-subtle theme-primary"><?php echo $producto['categoria']; ?></span>
                    <h3><?php echo $producto['nombre']; ?></h3>
                    <div class="row">
                        <div class="col">
                            <p class="precio card-title">$<?php echo $producto['precio']; ?></p>
                        </div>
                        <div class="col">
                            <a href="detalle_producto.php?id=<?php echo $producto['id_producto']; ?>" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>               
            </div>  
        </div>
        <?php
        }

        // Cierre de la conexión a la base de datos
        mysqli_close($conexion);
        ?>
    </div>

    </div>
    <?php 
        include("footer.php");
    ?>

    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
</body>
</html>