<!-- // escribir un programa que imprima la tabla de multiplicar del 1 al 10; -->

<?php

$tabla=5;

function tablas ($tabla){

  for ($n=1;$n<=10;$n++){
    $resultado= "$tabla x $n = ".($tabla*$n);
    echo "$resultado <br>";
  }
}

$tab=tablas($tabla);


