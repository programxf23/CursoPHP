<?php   

$c = 1;

while ($c <= 20){
    echo $c. "<br>";
    if ($c==10){
        break;
    }
    $c++;
     
}

//otro ejemplo:
$nombres = ["fernando", "martin", "marcelos", "maria", "laura"];

foreach ($nombres as $nom){
    
    if($nom =="laura"){
        continue;
    }
    echo $nom."<br/>";
}

//otro ejemplo pero con el ciclo for:
    

    for($i = 1; $i<= 10; $i++){
        if($i == 5){

        continue;
    }
    echo $i."<br/>";
    }

    //ejemplo con el ciclo while
    $i = 1;
    while($i <= 10){
        if($i == 5){
            $i++;
            continue;
        }
        echo $i."<br/>";
        $i++;
    }