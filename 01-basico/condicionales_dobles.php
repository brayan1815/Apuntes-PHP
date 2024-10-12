<?php
/**
 *  ESTRUCTURA CONDICIONAL DOBLE (if - else)
 * 
 * if(expresion){
 *  codigo a ejecutar si la expresion es verdadera
 * }
 * else{
 *  codigo a ejecutar si la expresion es falsa
 * }
 * 
 * 
 * if(expresion):
 *  si es verdadera
 * else:
 *  si es falsa
 * endif;
 */

if(1>7){
  echo"condicion evalua a verdadero";
}
else{
  echo"condicion evalua a falso";
}

if(9==12):
  echo"condicion evalua a verdadero";
else:
  echo"condicion evalua a falso";
endif;


// ----------OPERADOR TERNARIO-------------

// (8>=10)? echo "verdadero" : echo "falso";

/**
 * operador ? true : false;
 */

$num_uno=5;
$numdos=10;
echo"<br>";

echo ($num_uno>$numdos)? $num_uno*$numdos : $num_uno/$numdos;