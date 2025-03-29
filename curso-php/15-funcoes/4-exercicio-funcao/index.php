<?php 
  //Crie uma função;
  //Define três variáveis numéricas dentro dela;
  //Exiba a multiplicação destes números com um echo;
echo "Função Multiplicação";
  function multiplicacao() {
    $valor1 = 5;
    $valor2 = 5;
    $valor3 = 5;
    $totalMultiplicacao = ($valor1 * $valor2 * $valor3);
    echo "Valor total da multiplicação <br> dos números: $valor1, $valor2 e $valor3 = $totalMultiplicacao <br> <br> ";
  }

multiplicacao();

echo "Programa função Nome e Sobrenome imprima os valores concatenados <br>";
function nomeCompleto() {
  $nome = "Rafael";
  $sobrenome = "Morales";
  $nomeCompleto = "Nome Completo $nome $sobrenome";
  echo $nomeCompleto."<br>";
  echo "Nome: ". $nome ." ". $sobrenome;

}

nomeCompleto();


?>