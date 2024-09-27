<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$edad=rand(0,140);
/*
        

        if($edad <=4){
            echo "es un bebe";
        }
        else if($edad>4 && $edad<18){
            echo "es un menor de edad";
        }
        else if ($edad >=18 && $edad <=65){
            echo "es adulto";
        }
        else if($edad >65 && $edad<=120){
            echo " es jubilado";
        }
        else{
            echo " es error";
        }
*/
 
        $resultado=match(true){
            $edad <=4 => " es un bebe",
            $edad >4 && $edad <18 => "es un menor de edad",
            $edad >=18 && $edad <= 65 => "es un adulto",
            $edad >65 && $edad<=120=>" es un jubilado",
            $edad > 120 => "es un error"
            
        };
        echo $resultado;
    ?>
</body>
</html>