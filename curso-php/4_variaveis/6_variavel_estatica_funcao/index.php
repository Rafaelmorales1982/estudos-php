<?php
  function teste(){
    $contador = 0;
    $contador++;
    echo "$contador <br>";

  }

  teste();
  teste();
  teste();

//utilizando funções com variaveis static 
//consegui somar com contador
function testeStatic(){
  static $contador = 0;
  $contador++;
  echo "$contador <br>";
}

testeStatic();
testeStatic();
testeStatic();


?>