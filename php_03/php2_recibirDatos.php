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
            Recibiendo datos, por un formulario
        </h2> 

        <!-- recibir los datos -->
        <?php
        // reasignar datos 
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['mensaje'];
        $fechaEnvio = date("m-d-y");
        // echo $fechaEnvio;

        //mail(destinatario,asunto,mensaje)
        $destino="mailsitio@mail.com";
        $cuerpoMensaje = "<p>Nombre: ".$nombre."<br>Email:".$email."<br>Mensaje: ".$mensaje."<br>Fecha de envio: ".$fechaEnvio."</p>";
        echo $cuerpoMensaje;

        @$enviarMail = mail(
            $destino,
            $asunto,
            $cuerpoMensaje
        );

        //verificacion del envio
        // echo $enviarMail;
        if($enviarMail==true){
            echo "<p class='alert alert-danger'>Hubo un error en el envio, escribinos a:".$destino."</p>";
        }else{
            echo "<p class='alert alert-success'>Gracias ".$nombre." por escribirnos.<br>Detalles del mensaje:".$mensaje."</p>";            
        }





        ?>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>