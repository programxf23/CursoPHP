<?php
/*Operadores lógicos
Ejemplo	Nombre	Resultado
$a and $b	And (y)	true si tanto $a como $b son true.
$a or $b	Or (o inclusivo)	true si cualquiera de $a o $b es true.
$a xor $b	Xor (o exclusivo)	true si $a o $b es true, pero no ambos.
! $a	Not (no)	true si $a no es true.
$a && $b	And (y)	true si tanto $a como $b son true.
$a || $b	Or (o inclusivo)	true si cualquiera de $a o $b es true.
La razón para tener las dos variaciones diferentes de los operadores "and" y "or" 
es que ellos operan con precedencias diferentes. (Ver Precedencia de operadores.)
*/

$valor_1 = 7;
$valor_2 = 5;

var_dump($valor_1 == 7 && 2 > 3);