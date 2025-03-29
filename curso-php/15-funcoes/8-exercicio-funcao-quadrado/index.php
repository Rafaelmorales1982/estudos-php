<?php
  //Crie uma função que recebe um número:
  //Retorne o valor deste número ao quadrado

  function numeroQuadrado($numero) {
    $numeroQuad = $numero ** 2;
    return $numeroQuad;
  }

 echo "Valor do número ao quadrado: ".numeroQuadrado(6);

?>