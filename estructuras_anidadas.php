<?php
/*
pida al usuario la edad y el genero para que la computadora le indique
si ya puede jubilarse. Un hombre se puede jubilar cuando tenga 60 o mas años
 y la mujer 54.
 */

 $edad = 54;
 $genero = "F";

 if($genero == "H"){
    if($edad >= 60){
        echo "Puede jubilarse";
    }else{
        echo " No puede jubilarse";
    }

 }else if($genero == "F"){
    if($edad >= 54){
        echo "Puede jubilarse";
    }else{
        echo "No puede jubilarse";
    }
 }  else{
    echo "error";

 }

