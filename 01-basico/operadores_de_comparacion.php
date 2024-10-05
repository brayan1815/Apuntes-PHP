<?php
/**
 *      Ejemplo                   Simbolo                         Resultado
 *      1=="1"                    ==(igual)                       True
 *      10 ==="10"                ===(identico)                   False
 *      7 != 7                    !=(diferente)                   False
 *      21 <> '21'                <>(Diferente)                   False
 *      '21' !==21                !==(No identico)                True
 *      7<4                       <(menor que)                    False
 *      7>4                       >(mayor que)                    True
 *      2<=2                      <=(menor o igual que)           True
 *      3>=7                      >=(mayor o igual que)           False
 *  */

var_dump(2=="2");
echo"<br>";
var_dump(2==="2");