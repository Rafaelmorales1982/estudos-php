<?php
//função Par
function parImpar($valor) {

  if (!is_numeric($valor)){
    echo "O valor não é um número <br>";
    return;
  }

  if($valor % 2 == 0) {
    echo "Número é PAR : $valor <br>";
  } else if($valor % 2 != 0) {
    echo "Número é ÍMPAR : $valor <br>";
  } 

}

parImpar(10);
parImpar(11);
parImpar("Dez");


?>