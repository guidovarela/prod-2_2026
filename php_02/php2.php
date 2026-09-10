<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prod Digital 2</title>
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
    
    <div class="box-base">
<?php
    $edadConducir=18;
    $edadUser=25;
    $estadoRegistro=true;
    // if(condicion){verdadero}else{falso}
    if($edadUser>=$edadConducir){   
        if($estadoRegistro==true){
            echo "✅ El usuario puede conducir.";
        }else{
            echo "🚨 El usuario tiene prohibido conducir.";
        }
    }else{
        echo "🚨 El usuario tiene prohibido conducir.";
    }

    // Ternario
    // $variable = condicion ? Valor si es verdadera : valor si es falsa;


    $favcolor = "maradona";

    switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
    }



?>
    </div>
    
</body>
</html>