<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prod Digital 2</title>
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
    
    <h1>Funcionando!!!
        
    </h1>
    <div class="box-base">
        <?php 
//Variables

$saludo = "<i>Hola, esto es PHP</i>";
$nombre = "Guido";


// Operadores
$precio_unitario=12300.45;
$iva=1.21;
$precio_final = $precio_unitario*$iva;
/*
tipo de dato:
    "string" -> cadena de caracteres
    numerico  -> enteros, decimales
*/
        ?>
   


    <h2>
        Precio Producto: $<?php echo $precio_unitario;?>
        <br>
        Con Iva incluido: $<?php echo $precio_final; ?>
    </h2>

    <hr>
    <?php
    $precio_unitario = 900021.34;
    $precio_final = $precio_unitario*$iva;
    ?>

<h2>
        Precio Producto: $<?php echo $precio_unitario;?>
        <br>
        Con Iva incluido: $<?php echo $precio_final; ?>
    </h2>

    </div>


    <div class="box-base">
        <h3>Arrays</h3>
    <?php
    // $nro1 = 200;
    // $nro2 = 500;
    // echo $nro1 + $nro2 

    $nombre = "Guido";
    $apellido = "Varela";
    // concatenacion .
    // echo "Mi nombre es " . $nombre . $apellido; 

    // Definimos el array indicativo
    $user1 = [$nombre,"Varela",45,"mail@mail.com"];
    $user1 = array($nombre,"Varela",45,"mail@mail.com");
    // buscamos indice 0 y 1
    // echo $user1[0] . $user1[1];

    // Array asociativo
    $user2 = [
        "nombre"=>"Guido","apellido"=>"Varela",
        "edad"=>45,
        "email"=>"mail@mai.com"
    ];
    // buscamos indice 0 y 1
    // echo $user2["nombre"] . $user2["apellido"];
    ?>
    </div>
    <div class="box-base">

        Tarea:
        armar un array asociativo con tus datos (6) y mostrar un mensaje de presentacion en la pantalla
        <hr>
        <?php
        
        $user3 = [
            "nombre"=>"Guido",
            "apellido"=>"Varela",
            "edad"=>45,
            "email"=>"mail@mai.com"
        ];

        echo "mi nombre es ".$user3["nombre"]." ".$user3["apellido"].", tengo ".$user3["edad"]." años, y mi email es: ".$user3["email"].".";


        ?>
    </div>
    
</body>
</html>