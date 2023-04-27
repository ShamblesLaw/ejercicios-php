<?php

//informacion del formato date en:    php.net/manual/es/function.date.php

$hoy= date(" Y - m - d "); //irrelevante: puedes poner - - o / /, da lo mismo, anda igual, la funcion detecta el formato y lo cambia por la fecha, no afecta en nada que pongas simbolos para separar

echo $hoy;

?>