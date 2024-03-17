<?php

$a = 7;
$x = 10;
$y = 9;
$z = 7;

$resultado = match($a){
$x => "valor igual a x",
$y => "valor igual a y",
$z => "valor igual a z",
default => "no coincide con ninguna variables",
};

echo $resultado;