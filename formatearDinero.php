<?php
//formatear cantidades monetarias

$cantidad_1 = 12732.7;
$cantidad_2 = 1931.8;

//number_format(cantidad, decimales, sep_decimales, sep_millar);

echo number_format($cantidad_1);

echo "<br>";

$cantidad_1 = number_format($cantidad_1);
echo $cantidad_1;

//si se pasa el 50% de decimales lo redondea para arriba
echo "<br/>";

$cantidad_2 = number_format($cantidad_2, 2, ".","." ); //con dos decimales y separadores de dec y millares

echo $cantidad_2;