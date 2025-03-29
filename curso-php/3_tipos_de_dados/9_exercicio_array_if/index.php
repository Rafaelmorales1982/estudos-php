<?php
/*
Crie um array associativo com características de uma pessoa;
Desafio: faça um if checando se ela é maior de idade
e imprima uma mensagem, caso seja;
*/

$pessoa = ['nome' => 'Elaine', 'idade'=> 39];
$nome = $pessoa['nome'];
$idade = $pessoa['idade'];

if ($idade >= 18){
  echo "$nome é maior de idade, ela tem $idade anos";
} else {
  echo "$nome não é maior de idade";
}





?>