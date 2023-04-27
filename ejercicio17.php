<?php 

function imprimirNombre($nombre, $apellido){  //si le ponemos $apellido="" no es requerido el argumento de apellido para que funque la función
    // Rutinas o instrucciones
    echo "Hola ".$nombre." ".$apellido."<br/>";
}

//Llamar a la función
imprimirNombre("Lean", "Gómez");
imprimirNombre("Juan", "Guarnizo");

?>