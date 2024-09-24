<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apuntes2</title>
</head>
<body>
    <?php
    $var=40;
    $var1=2;
    $var2=6;
    /* IF ELSE NORMAL
    if($var<$var2){//una manera de if
            echo "<p>El numero Mayor es: $var2 </p>";

        }else echo "<p>El numero salio con el else $var</p>";
        
        if($var1<$var2)://otra manera de if
            echo "<p>Otra manera de if</p>";
        endif;
        */

        /* IF, ELSE IF
        if($var<$var2){//una manera de if
            echo "<p>El numero Mayor es: $var2 </p>";

        }elseif($var>$var2){
            echo "<p>El numero salio con el else $var</p>";

        } 
        */
        $numero=3;
        //Rangos: [-10,0),[0,10],(10,20]
        if ($numero>=-10 && $numero <0){
            echo "<p>El numero esta en el rango [-10,0)</p>";
        }
        elseif($numkero<=0 and $numero<=10){
            echo "<p>El numero esta en el rango [0,10]</p>";
        }
        elseif($numero>10 && $numero<=20){
            echo "<p>El numero esta en el rango (10,20]</p>";
        }
        else{
            echo"<p>El numero no esta dentro de ningun rango</p>";
        }


        //EJERCICIO 1
        $num1=2;
        $num2=4;

        if($num1>$num2){
            echo "<p>El numero mayor es: $num1</p>";

        }
        elseif($num1<$num2){
            echo "<p>El numero mayor es: $num2</p>";
        }
        else{
            echo "<p>Los numeros son iguales</p>";
        }


        if($num1>$num2):
            echo "<p>El numero mayor es: $num1</p>";
        elseif($num1<$num2):
            echo "<p>El numero mayor es: $num2</p>";
        else:
            echo "<p>Los numeros son iguales</p>";
        endif;

    ?>
</body>
</html>