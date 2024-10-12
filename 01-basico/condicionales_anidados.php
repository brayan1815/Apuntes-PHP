<?php

/**
 * -------ESTRUCTURA-------
 * if(?){
 *  if(?){
 *    codigo a ejecutar
 *  }
 *  else{
 *    codigo a jecutar
 *  }
 * }
 */

$a=2;
$b=3;
$c=10;

if($a>$b){
  if($a>$c){
    echo $a;
  }
}
if($b>$a){
  if($b>$c){
    echo $b;
  }
}
if($c>$a){
  if($c>$b){
    echo $c;
  }
}
echo"<br>";

$num=10;

if($num==1){
  echo "Lunes";
}
else if($num==2){
  echo "Martes";
}
else if($num==3){
  echo "Miercoles";
}
else if($num==4){
  echo "Jueves";
}
else if($num==5){
  echo "Viernes";
}
else if($num==6){
  echo "Sabado";
}
else if($num==7){
  echo "Domingo";
}
else{
  echo"el numero no corresponde a ningun dia";
}