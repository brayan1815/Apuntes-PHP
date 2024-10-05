<?php

/**
 *     Simbolo                 Nombre
 *     and                     and(y)
 *     or                      or(o)
 *     !                       not(no)
 *     &&                      and(y)
 *     ||                      or(o)
 *
 * 
 * -------TABLA DE OPERADORES AND-------------
 * 
 *    Exprecion 1                       Expresion 2                   Resultado
 * 
 *    false              &&             false                         false
 *    false              &&             true                          false
 *    true               &&             true                          true
 *    true               &&             false                         false
 * 
 */

$valor1=7;
$valor2=2;

var_dump($valor1==7 && 2>3 );
echo "<br>";
var_dump($valor1==7 && 9>3);

/**
 * 
 *  -------TABLA DE OPERADORES or-------------
 * 
 *     Exprecion 1                       Expresion 2                   Resultado
 * 
 *     false                ||           false                         false
 *     false                ||           true                          true
 *     true                 ||           false                         true
 *     false                ||           true                          true
 *     true                 ||           true                          true
 */
echo "<br>";
var_dump($valor1==7 || 2>3);
echo "<br>";
var_dump($valor1==5 || 9>3);
echo "<br>";
var_dump($valor1==5 || 1>3);