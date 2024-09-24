<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $dia=date("l");

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
        
    ?>
</body>
</html>