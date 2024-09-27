<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listas</title>
</head>
<body>
<h3>lista 1</h3>
<?php
$i=1;

echo "<ul>";//para ponerlo en una lista le pongo esto al while
while($i<10){
    echo  "<li>$i</li>";// y aqui le pongo las filas
    $i++;
}
echo "</ul>";

?>

<h3>lista 2</h3>
<?php
$i = 1;
echo"<ul>";


while($i <10):
    echo "<li>$i</li>";
    $i++;
endwhile;
echo "</ul>";
?>

<h3>ejercicio</h3>
<?php
//Ej un wile que se muestre en euna lista los multiplos de 3 entre el 1 y el 30

$num=1;


echo"<ul>";

while ($num<10){
    if($num%3==0){
        echo "<li>$num</li>";
        
   }
    $num++;
}

echo"</ul>";
?>

<h3>Lista con do while</h3>
<?php
    $uno=1;
    echo "<ul>";
    do{
        echo "<li>$uno</li>";
        $uno++;
    }while($uno<10);
    echo "</ul>";
?>

<h3>bucle con for</h3>
<?php 
    echo "<ul>";
    for($i=1;$i<=10;$i++){
        echo "<li>$i</li>";
    }
    echo "/<ul>";
?>

<h3>for 2</h3>
<?php
    echo "<ul>";
    for($i=1; ; $i++){
        if($i>=10)break;
        echo "<li>$i</li>";

    }
    echo "</ul>";
?>

</body>
</html>