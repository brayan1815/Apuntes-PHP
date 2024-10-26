<!-- los alumnos de un curso de han divido en dos grupos, a y be de acuerdo con el sexo y el nombre 
el grupo A esta formado por mujeres con nombres anteriores a la M y los hom,bres con nombre posterior a la N
y el grupo B por el restor
escribir un programa que pida al usuario el nombre y su sexo y muestre en panatalla a que grupo pertenece -->

<?php 
 $nombre= "Andres";
 $sexo="M";

 function validacion($nombre,$sexo){
  $letra=$nombre[0];
  if (($sexo=="F" && $letra<"M") || ($sexo=="M" && $letra>"N")){
    $mensaje="La persona pertenece al grupo A";
  }
  else if(($sexo=="F" && $letra>="M") || ($sexo=="M" && $letra<="N")){
    $mensaje="La persona pertence al grupo B";
  }
  return $mensaje;
 }

 $grupo=validacion($nombre,$sexo);
 echo $grupo;
