<!-- cree una funcion que calcule la longitud de una palabra si es corta o es larga, las palabras cortas son menores de 5 caracteres  -->

<?php

$palabra="Ronald";

function longi($palabra){
  $lon=strlen($palabra);
  if ($lon<5){
    return "es corta";
  }
  else{
    return "es larga";
  }
}

$longitud=longi($palabra);
echo $longitud;