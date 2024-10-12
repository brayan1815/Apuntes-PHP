<?php
/**
 * OPERADORES DE INCEWMENTO Y DECREMENTO
 * 
 *     SIMBOLO                NOMBRE
 *      ++                    Incremento
 *      --                    Decremento
 * 
 * 
 * -----------EJEMPLO-------------
 * 
 *    ++$variable         Pre-incremento
 *    --$variable         Pre-decremento
 * 
 * a esto tambien se le llama operador unario
 */

$numero=10;

/*Primero se incrementa el valor de la variable y luego se realizar la operaca
*/
echo "Pre incremento".++$numero;
echo"<br>";

//primero realiza la operacion y luego incrementa
echo"post incremento".$numero++;

echo "<br>";
echo $numero;
echo "<br>";

//Primer resta y luego realiza la operacion
echo "pre decremento".--$numero;
echo "<br>";

//Primero realiza la operacion y luego resta
echo"pos decremento".$numero--;
echo "<br>";


$resultado=++$numero;
echo $resultado;

//
echo"<br>";
$resultado=$numero++;
echo "linea 45 ¿?".$resultado;