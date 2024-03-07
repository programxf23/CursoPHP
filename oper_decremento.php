<?php
/*
Operadores de incremento/decremento
Ejemplo	Nombre	Efecto
++$a	Pre-incremento	Incrementa $a en uno, y luego retorna $a.
$a++	Post-incremento	Retorna $a, y luego incrementa $a en uno.
--$a	Pre-decremento	Decrementa $a en uno, luego retorna $a.
$a--	Post-decremento	Retorna $a, luego decrementa $a en uno.
*/

echo "<h3>Postincremento</h3>";
$a = 5;
echo "Debe ser 5: " . $a++ . "<br />\n";
echo "Debe ser 6: " . $a . "<br />\n";

echo "<h3>Preincremento</h3>";
$a = 5;
echo "Debe ser 6: " . ++$a . "<br />\n";
echo "Debe ser 6: " . $a . "<br />\n";

echo "<h3>Postdecremento</h3>";
$a = 5;
echo "Debe ser 5: " . $a-- . "<br />\n";
echo "Debe ser 4: " . $a . "<br />\n";

echo "<h3>Predecremento</h3>";
$a = 5;
echo "Debe ser 4: " . --$a . "<br />\n";
echo "Debe ser 4: " . $a . "<br />\n";

/*

PHP sigue la convención de Perl cuando trabaja con operaciones aritméticas sobre variables 
de caracteres y no la de C. Por ejemplo, en PHP y Perl $a = 'Z'; $a++; convierte $a en 'AA', 
mientras que en C a = 'Z'; a++; convierte a en '[' (el valor ASCII de 'Z' es 90, el valor ASCII de '[' es 91). 
Nótese que las variables de caracteres pueden ser incrementadas pero no decrementadas y aun así sólo caracteres y 
dígitos de ASCII puro (a-z, A-Z y 0-9) están soportados. Incrementar o decrementar otras variables de caracteres 
no tiene efecto, el string original no se modifica.
*/
