<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver usuario</title>
</head>
<body>
    
    <?php
    include("header.php");
    $id_user=$_GET['id'];

    // conexion servidor Mysql
    include("conexion.php");
    
    //consulta MySQL
    $queryData="SELECT * FROM contacto WHERE id=$id_user";
    $query=mysqli_query($conexion,$queryData);

    //evaluamos si hay resultadDataos
    echo mysqli_num_rows($query);

    //procesamiento de la consulta
    $resultados = mysqli_fetch_array($query);

    // mostrar la info comDatapleta del usuario
    echo "<hr>";
    echo "Nombre: ".$resultados['nombre']."<br>";
    echo "Email: ".$resultados['email']."<br>";
    echo "Asunto: ".$resultados['asunto']."<br>";
    echo "mensaje: ".$resultados['mensaje']."<br>";
    echo "Fecha de Envio: ".$resultados['fechaEnvio']."<br>";
    echo "<hr>";
    ?>
    

</body>
</html>