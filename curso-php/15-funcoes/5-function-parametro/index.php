<?php
//função com parâmetros e argumentos
echo "Função Velocidade Máxima dos veículos <br>";
function velocidadeMaxima($vel) {//parâmetro
  if(is_int($vel)){
    echo "O carro atinge a velocidade máxima de '$vel' Km/h <br>";
  } else {
    echo "Por favor, passe um número inteiro <br>";
  }

}

velocidadeMaxima(100);//argumento
velocidadeMaxima(110);//argumento
velocidadeMaxima(120.50);//argumento

echo "Função dados de uma pessoa  <br>";
function dadosPessoais($nome, $idade, $salario, $funcao) {
  echo "Nome: $nome <br> Idade: $idade <br> Salário: $salario <br> Função: $funcao";
}

dadosPessoais("Rafael", 42, 5000, "Programador Jr");
?>