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
            for
        </h2> 
<?php
// https://www.w3schools.com/php/php_looping_for.asp
// for ([Inicio de la variable];
// [Condición];
// [Incremento o decremento de la
// variable]) {
// [Instrucciones];
// }

$cantAnuncios=rand(1,50);
for ($i=1; $i <= $cantAnuncios ; $i++) { 
    echo "Noticia nro:".$i."<br>";
}

?>

<h2>
            While
        </h2> 
        <div class="row">
            <?php
            // https://www.w3schools.com/php/php_looping_while.asp
            $i=1;
            while ($i <= $cantAnuncios) { 
                echo "<div class='col-3'>Noticia nro:".$i."</div>";
                $i++;
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>