<?php
//un nombre de funcion valido comienza con una letra o guion bajo seguido
//de cualquier numero de letras, numeros o guiones bajos.

function saludar(){
    echo "Hola mundo";
}
saludar();

function saludo($nombre){
    return "Hola ".$nombre;
}

echo saludo("Fernando");

//
function promedio($nota1, $nota2, $nota3){

$promedio_alumno = ($nota1 + $nota2 + $nota3) / 3;
return $promedio_alumno;
 }
 
 echo "el promedio es: ".promedio(3,6,5);