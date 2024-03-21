<?php

$nombres = ["fernando", "martin", "marcelos", "maria", "laura"];

$colores =[
    "rojo" =>100,
    "azul" =>70,
    "verde" =>180,
    "amarillo"=>95,
    "naranja" =>130,
];

foreach($nombres as $clave => $valor){
echo $clave. "-".$valor. "<br/>"; 

}
foreach($colores as $clave => $valor){
    echo "Hay: ".$valor. "-".$clave." en el invenatrio". "<br/>"; 
    
    }


    $personas = [
        ["Nombre" => "Juan", "Edad" => 25],
        ["Nombre" => "María", "Edad" => 30],
        ["Nombre" => "Marcos", "Edad" => 45],
    ];
    
    foreach ($personas as $person){
        echo $person["Edad"]."<br/>";
    }