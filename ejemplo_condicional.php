<?php
/*hacer un programa donde se le pide a un usuario la edad, si es mayor de edad debe aparecer un mensaje
indicandolo*/ 

$persona = 15;


if($persona >= 18){
    echo "es mayor de edad";
}else {
    echo "no es mayor de edad";
}

/*en un almacen se hacen 20% de descuento a los clientes cuya compra supere  los $100.
¿cual sera la cantidad que pagara una persona por su compra?*/ 


$compra = 120;


if($compra > 100){
$compra = $compra - ($compra * 0.2);
 
}
echo "el importe final sera: $ {$compra}";
