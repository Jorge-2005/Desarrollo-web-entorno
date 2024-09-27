<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //SWICH

    $dia=date("l");
    /* 
        

        switch($dia) {
            case "Tuesday":
            case "Wednesday":
            case "Friday":
                echo "<p> los $dia si hay clase</p>";
                break;
            default://en otro caso si no es ni 1 ni 2 
                echo "<p> no hay clase</p>";
                break;
        }
     */

//EJERCICIO DE PASAR A ESPAÑOL
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
/* 
        switch($d) {
            case "martes":
            case "miercoles":
            case "viernes":
                echo "<p> los $d si hay clase</p>";
                break;
            default://en otro caso si no es ni 1 ni 2 
                echo "<p> no hay clase $d</p>";
                break;
        }
*/

//ESTRUCTURA MATHC

$resultado = match($d){
    "martes"=> "<p>Hoy $d si tenemos clase de web servidor",
    "miercoles"=> "<p>Hoy $d si tenemos clase de web servidor",
    "viernes"=> "<p>Hoy $d si tenemos clase de web servidor",
    default => "<p>Hoy $d no tenemos clase de web servidor"    

};   
echo $resultado;
    ?>
</body>
</html>