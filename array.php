
<?php
/*soporta tanto arrays escalares(numericos), como asociativos y multideimensionales
no hace falta definir el array antes de colocarlo*/

//array escalar
$estudiantes = array('fernando', 'julio', 'maria', 'laura', 'jose');
$estudiantes[3] = 'marcelo';
echo $estudiantes[3];

//array asociativo
$tutor = [
    'nombre' => 'Martin', 
    'apellidos' => 
    'Garcia', 
    'edad' => 52];

echo $tutor['nombre'];

//array multidimensional

$estudiantes = [
    ['nombre' => 'fernando', 'edad' => 35],
    ['nombre' => 'julio', 'edad' => 35],
    ['nombre' =>'maria', 'edad' => 35],
    ['nombre' => 'laura', 'edad' => 35],
    ['nombre' => 'jose', 'edad' => 35]
];

echo $estudiantes[2]['nombre'];

echo count($estudiantes);