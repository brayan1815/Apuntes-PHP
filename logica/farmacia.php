<!-- una farmacia aplica al precio de los remedios el 10% de descuento, hacer un programa que ingresando el costo de oos medicamentos calcule el valor de el descuento y muestre el precio final -->

<?php

$precio=1000;

function descuento($precio){
  $desc=$precio*0.10;

  return "El valor de descuento que se hara al medicamento es : $desc <br>
  el precio final que se va a pagar por el producto es: ".$precio-$desc;

}

$descuento=descuento($precio);
echo $descuento;
