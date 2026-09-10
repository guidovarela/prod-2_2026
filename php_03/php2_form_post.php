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
            Contacto
        </h2> 

        <form action="php2_recibirDatos.php" method="POST" class="w-50 mx-auto">
        <div>
            Nombre y apellido
            <input class="form-control" type="text" name="nombre">
        </div>
        <div>
            Email
            <input class="form-control" type="email" name="email" required>
        </div>
        <div>
            Asunto
            <select class="form-control" name="asunto" required>
                <option value="">Seleccionar...</option>
                <option value="Consulta">Consulta</option>
                <option value="Reclamo">Reclamo</option>
                <option value="sugerencia">Sugerencia</option>
            </select>
        </div>

        <div>
            Mensaje
            <textarea class="form-control" name="mensaje" id="" required></textarea>
        </div>

        <input type="submit" class="btn btn-info mt-3" value="Enviar info">


        </form>    
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>