<?php

//La función strtoupper se usa para cambiar minúsculas por mayúsculas, no funciona con letras con tilde xd
//Para mas data sobre funciones de strings copypastea este link  php.net/manual/es/book.strings.php 

$nombre="Lean Gómez";
$nombreMayusculas= strtoupper($nombre);

echo $nombreMayusculas;


?>