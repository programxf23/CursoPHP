<?php

//incremento
$c = 1;

do{
    echo $c."<br/>";
$c++;
}while($c <= 20);

//decremento
$c = 20;

do{
    echo $c."<br/>";
$c--;
}while($c >= 1);

//multiplicardor

$c = 12;
$num = 7;

do{
    echo $num."x" .$c."*" .$num * $c."<br/>";
    $c--;

}while($c >= 1);