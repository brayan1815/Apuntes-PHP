<!-- escribe una funcion que tome una cadena y devuelva una nueva cadena pero sin las vocales  -->

<?php

$cadena="hola a todos";

function recorrer($cadena){

  $letras=array("a","e","i","o","u");
  return $respues= str_replace($letras,"",$cadena);
}

$resul=recorrer($cadena);
echo $resul;


