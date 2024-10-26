<?php

  $a=5;
  $b=10;

  function calculadora ($a,$b){
 

    try{

      if ($b===0){
        throw new Exception ("Division por cero");
      }

      if (is_string($a) || is_string($b)){
        throw new Exception ("No se pueden realizar operaciones con datos de tipo texto");
      }

      $suma=$a+$b;
      $resta=$a-$b;
      $multiplicacion=$a*$b;
      $division=$a/$b;

      $respuesta=[
        'suma'=>$suma,
        'resta'=>$resta,
        'multiplicacion'=>$multiplicacion,
        'division'=>$division
      ];
      return $respuesta;
    }
    catch (\Exception $e){
      return $e->getMessage();
    }

  }
  $resultado=calculadora($a,$b);

  echo "<pre>";
  print_r($resultado);
  echo"</pre>";
?>