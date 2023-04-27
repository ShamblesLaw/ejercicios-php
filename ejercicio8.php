<?php 

if($_POST){

    $valorA=$_POST["valorA"];
    $valorB=$_POST["valorB"];

    //suma
    $suma=$valorA+$valorB;
    //resta
    $resta=$valorA-$valorB;
    //division
    $division=$valorA/$valorB;
    //multiplicacion
    $multiplicacion=$valorA*$valorB;

    echo $suma."<br>";
    echo $resta."<br>";
    echo $division."<br>";
    echo $multiplicacion;

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
</head>
<body>
    <form action="ejercicio8.php" method="post">
        valor A: 
    <input type="text" name="valorA" id="">
    <br>
        valor B:
    <input type="text" name="valorB" id="">
    <br>

    <input type="submit" value="Calcular">
    

    </form>
</body>
</html>