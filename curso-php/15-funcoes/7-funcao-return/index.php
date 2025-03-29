<?php
//Utilizando return em uma function

function valor($valor1, $valor2)
{
  $valorTotal = $valor1 + $valor2;

  return $valorTotal;
}

echo "Valor total: ".valor(10,10);
?>