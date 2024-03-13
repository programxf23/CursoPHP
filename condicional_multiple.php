<?php
/*ejercicio 1
se necesita que un programa escriba los nombres de los dias de la semana 
en funcion del valor de una variable dia.
*/

$dia = 0;
if($dia == 1){
    echo "Lunes";
}elseif($dia == 2){
    echo "Martes";
}elseif($dia == 3){
    echo "Miercoles";
}elseif($dia == 4){
    echo "Jueves";
}elseif($dia == 5){
    echo "Viernes";
}elseif($dia == 6){
    echo "Sabado";
}elseif($dia == 7){
    echo "Domingo";
}else{
    echo "Valor incorrecto";
}