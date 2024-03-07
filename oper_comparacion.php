<?php

echo 1 == "1";
var_dump(1 == "1"); // me muestra el tipo de dato.

var_dump(1 === "1"); // no es verdadero por el operador de identico que es el triple igual.

/*Operadores de comparación
Ejemplo	Nombre	Resultado
$a == $b	Igual	true si $a es igual a $b después de la manipulación de tipos.
$a === $b	Idéntico	true si $a es igual a $b, y son del mismo tipo.
$a != $b	Diferente	true si $a no es igual a $b después de la manipulación de tipos.
$a <> $b	Diferente	true si $a no es igual a $b después de la manipulación de tipos.
$a !== $b	No idéntico	true si $a no es igual a $b, o si no son del mismo tipo.
$a < $b	Menor que	true si $a es estrictamente menor que $b.
$a > $b	Mayor que	true si $a es estrictamente mayor que $b.
$a <= $b	Menor o igual que	true si $a es menor o igual que $b.
$a >= $b	Mayor o igual que	true si $a es mayor o igual que $b.
$a <=> $b	Nave espacial	Un integer menor que, igual a, o mayor que cero 
cuando $a es respectivamente menor que, igual a, o mayor que $b. Disponible a partir de PHP 7.
$a ?? $b ?? $c	Fusión de null	El primer operando de izquierda a derecha que exista y no sea null. 
null si no hay valores definidos y no son null. Disponible a partir de PHP 7.
Si se compara un número con un string o la comparación implica strings numéricos, 
entonces cada string es convertido en un número y la comparación realizada numéricamente. 
Estas reglas también se aplican a la sentencia switch. La conversión de tipo no tiene 
lugar cuando la comparación es === o !== ya que esto involucra comparar el tipo así como el valor.
*/