<?php
/*en una fabrica de comutadoras se planea ofrecer a los clientes un descuento que dependera
del numero de computadoras que compre. Si las computadoras son menos que cinco se les dara
un 10% de descuento sobre el total de la compra. Si el total de computadoras es igual o 
mayor a cinco pero menos de diez se le otorga un 20% de descuento y si son 10 o mas se les da
un 40% de descuento. El precio de la computadora es de $700.
*/

$computadoras = 15;
$descuento_1 = ($computadoras * 700) * 0.1;
$descuento_2 = ($computadoras * 700) * 0.2;
$descuento_3 = ($computadoras * 700) * 0.4;
$total_1 = ($computadoras * 700) - $descuento_1;
$total_2 = ($computadoras * 700) - $descuento_2;
$total_3 = ($computadoras * 700) - $descuento_3;


if ($computadoras < 5){
    echo "Compro menos de 5 computadoras: " .$total_1;
}elseif($computadoras >= 5 && $computadoras < 10){
    echo "Compro entre 5 o mas computadoras: " .$total_2;
}elseif($computadoras >= 10){
    echo "Compro entre 10 o mas computadoras: ".$total_3;
}else{
    echo "Error";
}
