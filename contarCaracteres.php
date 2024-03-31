<?php

$cadena_texto = "Hola fer";

$longitud = strlen($cadena_texto);

echo $longitud;

//ahora cuantas palabras tiene el string
$palabras = str_word_count($cadena_texto);

echo $cadena_texto. " tiene ". $palabras. " palabras";