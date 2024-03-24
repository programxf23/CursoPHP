<?php
//incluir un archivo php dentro de otro
include("constantes.php");
//include("constantesx.php"); // nos genera un warning

//si usamos require:

require("constantes.php");
//require("constantesx.php"); //nos muestra un fatal error y el archivo se deja de ejecutar

//tambien se usa para abrir un arhivo una sola vez:
//include_once("constantes.php");


include("index.php");