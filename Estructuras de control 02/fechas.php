<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fechas</title>
</head>
<body>
    <?php
        echo date("l");
        echo date("j");


        $num=date("j");
        if($num%2==0){echo "<p>El numero es par</p>";}
        else{echo "<p>El numero es impar</p>";}
    ?>
</body>
</html>