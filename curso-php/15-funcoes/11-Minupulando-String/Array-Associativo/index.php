<?php
/*
Crie uma função que recebe características de algum objeto como
argumento(carro, sofé, cafeteira), em array associativo;
O array deve conter nome => preco
Retorne apenas os itens que custam mais que R$10;
Imprima o retorno
*/

//Array associativo
$arr = [
  'Porta' => 100,
  'Maçaneta' => 5,
  'Motor' => 2000,
  'Retrovisor' => 8
];

function itensCaros($arr) {
  $arrIntensCaros = [];
  foreach($arr as $item => $preco){
    if($preco > 10) {
      array_push($arrIntensCaros, $item, $preco);
    }
  }
  return $arrIntensCaros;
}
$novo = itensCaros($arr);
// A função implode() junta os elementos de um array em uma string.

echo "Itens com preço maior que 10: " . implode(", ", $novo) . "\n";
?>