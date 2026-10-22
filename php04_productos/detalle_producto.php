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

// Consulta para obtener el producto por id o por categoría

if (isset($_GET['id']) or isset($_GET['categoria'])) {
    if (isset($_GET['id'])) {
        $id_producto = $_GET['id'];
        $query = "SELECT * FROM productos WHERE id_producto = $id_producto";
    } elseif (isset($_GET['categoria'])) {
        $categoria = $_GET['categoria'];
        $query = "SELECT * FROM productos WHERE categoria = '$categoria'";
    }    

    $resultado = mysqli_query($conexion, $query);



    if ($producto = mysqli_fetch_array($resultado)) {
        // Si llega producto, mostrarlo. Si llega categoría, mostrar otros productos de esa categoría



        ?>

        <div class="container">
            <!-- // insertar breadcrumb: inicio / categoria / producto -->
            <nav aria-label="breadcrumb"></nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a class="breadcrumb-link" href="productos.php">Tienda</a>
                    </li>
                    <li class="breadcrumb-divider"></li>
                    <li class="breadcrumb-item">
                        <a class="breadcrumb-link" href="detalle_categoria.php?categoria=<?php echo $producto['categoria']; ?>"><?php echo $producto['categoria']; ?></a>
                    </li>
                    <li class="breadcrumb-divider"></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <?php echo $producto['nombre']; ?>
                    </li>  
                </ol>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="md:col-6">
                    <img src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>" class="img-fluid">
                </div>
                <div class="md:col-6">
                    <h2><?php echo $producto['nombre']; ?></h2>
                    <p><?php echo $producto['descripcion']; ?></p>
                    <h4>$<?php echo $producto['precio']; ?></h4>
                    <a href="#" class="btn btn-primary">Agregar al carrito</a>
                </div>
            </div>
        </div>
        
        <?php
    } else {
        // Producto no encontrado
        echo "<p>Producto no encontrado.</p>";
    }
} else {
    // No se proporcionó un id de producto
    echo "<p>No se proporcionó un id de producto.</p>";
}

?>
<div class="container">

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
                <a href="detalle_producto.php?id=<?php echo $producto['id_producto']; ?>" class="btn btn-primary">Ver más</a>
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