<?php

// $estudiantes = array('Carlos','Jose','Maria', 'Luis');
$estudiantes=['Carlos','Jose','Maria', 'Luis'];
echo("<pre>");
print_r($estudiantes);
echo("</pre>");

echo $estudiantes[2];

$instructor =[
  'nombre'=> 'Jhon',
  'apellido'=>'Becerra',
  'edad'=>38,
  'deudas'=>'3.700.000.00'
];

echo "<pre>";
print_r($instructor);
echo "</pre>";

$tutor=[
  'nombre'=>'Jhon Fredy',
  'apellido'=>'Becerra',
  'edad'=>38,
  'direccion'=>[
    'ciudad'=>'Bucaramanga',
    'barrio'=>'San Francisco',
    'nomenclatura'=>'carrera 25 No 18 - 65',
    'zipcode'=>666554
  ],
  'habilidades'=> [
    'git','html','css','js','php','phyton','sql'
  ]
];

echo"<pre>";
print_r($tutor);
echo"</pre>";

echo"<pre>",
print_r($tutor['direccion']['nomenclatura']);
echo"</pre>";

echo"<pre>",
print_r($tutor['habilidades'][4]);
echo"</pre>";

$tutor['habilidades'][3]='javascript';

echo"<pre>",
print_r($tutor['habilidades'][3]);
echo"</pre>";

$tutor['direccion']['Departamento']='Santander';

echo"<pre>";
print_r($tutor['direccion']);
echo"</pre>";

// unset($tutor['habilidades'][4]);
array_splice($tutor['habilidades'],4,1);