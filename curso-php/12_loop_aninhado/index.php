<?php
//Tabuada 1 até 10
$valor1 = 10;
$valor2 = 10;

$vezes = 'X';
$esquerda = 1;

while($esquerda <= $valor1 ) {
  echo " Tabuada: $esquerda <br> ";

  $direita = 1;
  while ($direita <= $valor2) {
    $resultado =  $esquerda * $direita; 
    echo "$esquerda $vezes $direita =  $resultado <br>";
    $direita++;
  }
 echo "<br>";
 $esquerda++;
 
}

