<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /* 
        $n= rand(1,3);//numero aleatoria entre el 1 y el 3

        switch($n) {
            case 1:
                echo "<p> El numero aleatorio es $n </p>";
                break;
            case 2:
                echo "<p> El numero aleatorio es $n </p>";
                break;
            default://en otro caso si no es ni 1 ni 2 
                echo "<p> El numero aleatorio es $n </p>";
                break;
        }
    */

    $numero = rand(1,10);
    $num=$numero%2;
    switch($num){
        case 0:
            echo "el numero $numero es par";
            break;
        default:
        echo "El numero $numero es impar";
        
    }
        
    ?>
</body>
</html>