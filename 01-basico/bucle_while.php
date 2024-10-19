<?php

// $a=1;

// while($a<=10){
//   $a;
//   if($a==8){
//     continue;
//   }
//   echo "5 x $a = ". 5*$a ."<br>";
// }

// $a=1;

// while($a>=1){
//   $a++;
//   $cont=0;
//   $b=1;
//   while($b<=$a){
//     if($a%$b==0){
//       $cont=$cont+1;
//     }
//     $b++;
//   }
//   if($cont==2){
//     break;
//   }
//   else{
//     echo"$a";
//   }
// }

$tabla=9;
$a=2;

// while($a<10){
//   $cont=0;
//   while($a<10){
//       if($tabla%$a==0){
//         $cont++;
//       }
//     $a++;
//   }

//   if($cont==2){
//     $a=1;
//     while($a<=10){
//     echo "$tabla x $a = ". $tabla*$a;
//     echo"<br>";  
//     $a++; 
//     }
//   }
//   $a++;
// }

function esPrimo($numero){
  $a=2;
  $primo=true;
  do{
    if($numero%$a===0){
        $primo=false;
    }
    $a++;
  }while()
  return $primo;
}

$primo = esPrimo(5) ? "Si":"No";

echo $primo;

// $a<$numero/2 && $primo

