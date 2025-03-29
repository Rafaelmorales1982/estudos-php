<?php
//Insira um else com uma mensagem para as pessoas que são menores de idade:
$nome = 'Gabriel Balico';
$idade = 18;

if ($idade < 18) {
  echo "Gabriel é menor de idade : $idade anos <br>";
} else if ($idade >= 18) {
  echo "Gabriel é maior de idade : $idade anos <br> ";
}

// Atividade  Crie algumas variáveis com tipo de dados diferentes: String, int e Boolean.
//Cheque se a variável é um inteiro:
//Caso for inteiro, apresente uma mensagem confirmando o tipo de dados;
//Caso não, apresente outra mensagem

$name = 'Elaine Balico';
$marido = 'Rafael Morales';
$anoNascimento = 1985;
$casada = true;

if (is_int($anoNascimento)) {
  echo "Ano de nascimento $anoNascimento da $name é inteiro:  " . gettype($anoNascimento) . " <br>";
} else {
  echo "O tipo de dado não é inteiro <br>";
}

if ($casada) {
  echo "A $name muito bem casada com $marido <br> ";
} else {
  echo "A $name não é casada <br>";
}


//Exercício 
//Crie uma variável que recebe um peso, caso seja maior que 80, imprima
//a mensagem que está pesado demais, se não, imprima "Peso dentro do limite";
$pessoa = "Rafael";
$peso = 80;

if ($peso >= 80) {
  echo "$pessoa está pesado demais.... $peso kg <br>";
} else {
  echo "$pessoa o seu peso esta dentro do limite... $peso kg <br>";
}

//Exercício
//Crie variáveis com números e outras com string
//Faça um if checando se é um número caso for
$nome2 = 'Gabriel';
$mesada = 'Cinquenta';
$novaMesada;
if (is_numeric($mesada)) {
  $novaMesada = $mesada * 2;
  echo "$nome2 aumentou sua mesada duas vezes mais de $mesada para $novaMesada <br>";

  if ($novaMesada >= 100) {
    echo "Sim a nova mesada de $nome2 é maior ou igual a  R$100 reais : R$ $novaMesada reais <br>";
  } else {
    echo "A mesada de $nome2 não é maior que R$100 reais <br>";
  }
} else {
  echo "O valor digitado da mesada não é um número <br> ";
}


//Exercício
/*
Crie uma variável que recebe uma velocidade de um carro, depois crie uma estrutura
if que verifica essa velocidade, se a velocidade for menor que 40, imprima que 
o motorista está na velocidade correta
se igual a 40 imprima uma mensagem para o motorista tomar cuidado
se for maior de 40 imprima uma mensagem de multa
*/
//Utilizando Array
$dadosVeiculo = [
  'nomeCondutor' => 'Rafael Morales',
  'carro' => 'Jeep',
  'placa' => 'ADO1515',
  'velocidade' => 41
];

$nomeCondutor = $dadosVeiculo['nomeCondutor'];
$carro = $dadosVeiculo['carro'];
$placa = $dadosVeiculo['placa'];
$velocidade = $dadosVeiculo['velocidade'];

if ($velocidade < 40) {
  echo "Condutor: $nomeCondutor, sua velocidade está correta: $velocidade KM <br>";
} elseif ($velocidade === 40) {
  echo "Condutor: $nomeCondutor, cuidado com a sua velocidade: $velocidade KM <br>";
} else {
  echo "Multa --- <br>
        Condutor: $nomeCondutor <br>
        Veículo: $carro <br>
        Placa: $placa <br>
        Velocidade: $velocidade KM <br>";
}

//Utilizando Switch Array
$dadosVeiculo2 = [
  'motorista' => 'Morales',
  'carro' => 'Jeep',
  'velocidade' => 40
];

$motorista = $dadosVeiculo2['motorista'];
$carro = $dadosVeiculo2['carro'];
$veloc = $dadosVeiculo2['velocidade'];
switch (true) {
  case ($veloc < 40):
    echo "Condutor: $motorista, sua velocidade está correta: $veloc KM <br>";
    break;
  case ($veloc === 40):
    echo "Condutor: $motorista, cuidado com a sua velocidade: $veloc KM <br>";
    break;
  default:
    echo "Multa --- <br>
   Condutor: $motorista <br>
   Veículo: $carro <br>
   Placa: $placa <br>
   Velocidade: $veloc KM <br>";


}
