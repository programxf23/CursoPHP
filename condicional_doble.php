<?php
/*
calcular el total que una persona debe pagar en una gomeria, 
el precio de cada llanta es de $800 menos de 5 llantas y de 700
si se compran 5 o mas
*/

$llanta = 800;
$cantidad = 0;

if ($cantidad < 5){
    echo "el precio de la llanta es de: ", $llanta;
}else{

echo "el precio de la llanta es de: $700";
};

/*determinar si un alumno aprueba o no aprueba un curso, sabiendo que aprobara
si su promedio de tres calificaciones es mayor o igual a 7, repueba en caso contrario.
*/

$alum1 = 10;
$alum2 = 6;
$alum3 = 9;
$promedio = ($alum1 + $alum2 + $alum3) / 3;

if($promedio > 7){
    echo "el alumno aprueba el curso";
}else{
    echo "el alumno no aprueba el curso";
}