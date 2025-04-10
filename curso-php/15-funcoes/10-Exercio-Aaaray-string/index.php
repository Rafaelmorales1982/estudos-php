<?php
/*
Crie uma função que recebe  um array de itens de supermercado
retorne este array em forma de string, separado em vírgulas
último elemento tem que ter um ponto final

*/

$lista = ['arroz', 'feijão','açucar','bolacha'];
function listaMercado($arr){
  $texto = "Você levou estes itens do mercado";

  for ($i = 0; $i < count($arr); $i++){
    if($i + 1 == count($arr)) {  //verifica se é o último da lista e coloca um ponto final
      $texto .= "$arr[$i].";
    } else {
      $texto .= " $arr[$i], ";
    }
   
  }
  return $texto;
}
echo listaMercado($lista);

?>