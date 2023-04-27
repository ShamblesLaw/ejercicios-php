<?php

$frutas=array( "f"=>"Frutilla","m"=>"Manzana","p"=>"Pera");

print_r($frutas);

echo $frutas["m"]."<br/>";

foreach($frutas as $i=>&$valor) {

    echo "El valor ".$valor." tiene el indice:".$i."<br/>";

}


?>