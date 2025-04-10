<?php
/*
Crie uma função que recebe um array de números;
Crie um novo array com apenas os números que são maiores que 7
Retorne este novo array e imprima na tela
*/

$arrNumeros = [];

for($i = 0; $i <= 30; $i++) {
   array_push($arrNumeros, $i);
}
function mostraNumerosArray($numeros){
global $arrNumeros;
  for($j = 0; $j < count($arrNumeros); $j++){
    echo $arrNumeros[$j]."<br>";
  }
   return $arrNumeros;
}

function mostraNumerosMaioresSete($numeros) {
  global $arrNumeros;
  $numeros = $arrNumeros;
  foreach($numeros as $maiores7){
    if($maiores7 > 7){
      echo $maiores7."<br>";
    }

  }
  return $numeros;
}

mostraNumerosArray($arrNumeros );
mostraNumerosMaioresSete($arrNumeros);
?>