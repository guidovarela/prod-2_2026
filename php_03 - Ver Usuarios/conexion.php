    <?php
        $host="localhost";
        $user="root";
        $pass="";
        $database="nuevositio";

        $conexion = mysqli_connect($host, $user, $pass, $database);
        if ($conexion === false) {
            die("Hubo un error. <br>" . mysqli_connect_error());
        }
        ?>