<?php

//diseñe un programa que imprima los numeros del 1 al 20 (incremento y decremento)


for($i = 1; $i <= 20; $i++) {
    echo $i."<br>";
};

for($i = 20; $i >=1; $i--) {
    echo $i;
};

//diseñe un programa que imprima la tabla de multiplicar de un numero dado 
//desde el factor 1 hasta el 12 (incremento y dedremento)

$num = 7;

for($i = 1; $i <= 12; $i++) {

echo $i. " x " .$num. " * " .$num * $i. "<br/>";
}

$num = 7;

for($i = 12; $i >= 1; $i--) {

echo $i. " x " .$num. " * " .$num * $i. "<br/>";
}