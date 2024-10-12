<?php

/**
 * --------ESTRUCTURA CONDICIONAL SIMPLE-------
 * 
 * if(expresion){
 *  codigo a ejecutar
 * }
 * 
 * 
 * if(expresion):
 *  codigo a ejecutar
 * endif;
 */

$edad=18;
$saludo="Saludo de persona";

if($edad>=18){
  echo"Hola, usted es mayor de edad";
}
?>

<div>
  <?php if($edad>=18):?>
    <h1>Saludo Persona</h1>
  <?php endif; ?>
</div>

<div>
  <?php if($edad>=18){?>
    <h1>
      <?= $saludo ?>
    </h1>
  <?php } ?>
</div>