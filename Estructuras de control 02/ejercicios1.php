<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicios 1</title>
</head>
<body>

<?php
    //ej 1
    //Calcula la suma de todos los numeros pares del 0 al 20

    $num=0;
    $suma=0;
    echo"<ul>";

    while ($num<21){
        if($num%2==0){
            echo "<li>$num</li>";
            $suma+=$num;
    }
        $num++;
    }
    echo "$suma";
   echo"</ul>";



    //Ejercicio 2
    //Muestra por pantalla la fecha actual con el siguiente formato 
    //miercoles 25 de septiembre de 2024
    $año=date("Y");
    $dia=date("l");
    $dnumero=date("d");
    $mes=date("m");
    $m=null;
    $d=null;//la inicializo despues
    switch($dia) {
        case "Monday":
            $d="lunes";
            break;
        case "Tuesday":
            $d="martes";
            break;
        case "Wednesday":
            $d="miercoles";
            break;
        case "Thursday":
            $d="jueves";
            break;
        case "Friday":
            $d="viernes";
            break;
        case "Saturday":
            $d="sabado";
            break;
        case "Sunday":
            $d="domingo";
            break;
    }

    
    switch($mes) {
        case "01":
            $m="enero";
            break;
        case "02":
            $m="febrero";
            break;
        case "03":
            $m="marzo";
            break;
        case "04":
            $m="abril";
            break;
        case "05":
            $m="mayo";
            break;
        case "06":
            $m="junio";
            break;
        case "07":
            $m="julio";
            break;
        case "08":
            $m="agosto";
            break;
        case "09":
            $m="septiembre";
            break;
         case "10":
            $m="octubre";
        break;
        case "11":
            $m="nobiembre";
        break;
        case "12":
            $m="diciembre";
        break;
    }

    echo "$d $dnumero de $m de $año";
?>
<h1>ehercicio</h1>
<?php
echo "<ul>";
    $numPrimo=50;
    
    for($i=0;$i<=$numPrimo;$i++){
        $primo=true;
        for($k=2;$k<$i;$k++){
            if($i%$k==0){
                $primo=false;
                break;
            }
        }
        if($primo){
            echo "<li><h3>El numero $i es primo</h3></li>";
        }
        else{
            echo "<li>El numero $i no es primo</li>";
        }
        
    }
    echo "</ul>";
?>
    
</body>
</html>