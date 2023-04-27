<?php 

$frutas=array("Frutilla", "Pera", "Manzana");

print_r($frutas);

echo "<br/>".$frutas[1];

for($i=0; $i<3; $i++) {
    echo "<br/>".$frutas[$i];
}

?>