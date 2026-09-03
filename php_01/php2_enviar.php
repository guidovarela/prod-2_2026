<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prod Digital 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
    
    <div class="box-base">
        <h2>
            GET
        </h2> 
        <?php

        $nombre="Guido";
        $email="mailguido@mail.com";
        $esUsuario=false;

        // $_GET["nombre"]=$nombre;
        echo "<a href='php2_recibir.php?nombre=".$nombre."&
        email=".$email."&
        esUsuario=".$esUsuario.
        "'>
        Ver datos</a>";
        
        ?>
        
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>