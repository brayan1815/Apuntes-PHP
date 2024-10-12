<!-- //REALIZAR UN PROGRAMA EN DONDE SE PIDA UN NUMERO, Y SI EL NUMERO ES PAR MOSTRAR UN MENSAJE INDICANDO QUE ES PAR // -->

<?php
$numero=2;
?>
<div>
  <?php if(($numero%2)==0){?>
    <h3>El numero es par</h3>
  <?php } ?>
</div>


<!-- En un almacen se le hace un 20% de descuento a los clientes cuya compra supere los 100 dolares,
¿cual sera la cantidad que pagara una persona por su compra -->

<?php
$compra=120;
?>

<div>
  <?php if($compra>100){
    $compra=$compra-(($compra*20)/100);
  }?>
  <h3>El valor a pagar por la compra es <?php echo $compra ?></h3>
</div>

<br>

<!-- calcular el total que una persona debe pagar en un montallantas, el preio de cada llanta es de 800 si se compran menos de cinco llantes, si se compran 5 o mas lantas el precio es de 700 -->

<?php
$cantLlantas=3;
$tot_pag=0;
?>

<div>
  <?php if($cantLlantas<5){
    $tot_pag=800*$cantLlantas;
  }
  else{
    $tot_pag=700*$cantLlantas;
  }
  ?>
  <h3>EL TOTAL A PAGAR POR LAS LLANTAS ES: <?php echo $tot_pag?></h3>
</div>

<!-- determinar si un alumno reprueba o aprueba el curso, sabiendo que aprobara si su promedio de 3 calificaciones es myor a 3.0, sino, el alumno reprueba -->

<?php
$promedio=20;
?>

<div>
  <?php if($promedio>=30){?>
    <h3>el alumno aprueba el curso</h3>
  <?php }
  else{?>
    <h3>el alumno reprueba el curso</h3>
  <?php } ?>
</div>
