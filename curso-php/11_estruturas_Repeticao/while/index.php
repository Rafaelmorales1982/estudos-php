<?php
//definição do contador
$numero = 0;

//Início / Definição da estrutura
while($numero < 10) {

  //Corpo de loop
  echo "Número : ". $numero ."<br>";

  //incremento do contador
  $numero = $numero + 1;
  //$numero += 1;
  //$numero++;
}

//decrementar valor

$contador = 10;
while($contador > 0){
  echo "Número : ". $contador ."<br>";
  $contador --;
  //$contador -= 1;
}

//Crie um array com alguns valores(pelo menos 10) de tipos de dados diferentes;
//Faça um loop while para exibir apenas os dados que são strings

$pessoa = [
  'nome' => 'Rafael',
  'sobrenome' => 'Morales',
  'idade' => 42,
  'sexo' => 'Masculino',
  'anoNascimento' => 1982
];

$valores = array_values($pessoa);

$indice = 0;
while($indice < count($valores)){
  if (is_string($valores[$indice])){
    echo "String encontrada: ". $valores[$indice] ."<br>";
  }
  $indice++;
}

//Exercício
//Crie um Loop que vai até o número 30
//contador deve iniciar como 4
//Faça incrementos 2 em 2 no contador
//Utilizae o break para parar o Loop quando chegar no número 24

$cont = 4;
$limite = 30;
echo "Contém $limite números no programa <br>";
while($cont < $limite ){
 
echo "Contando : $cont <br>";
if($cont === 24) {
 echo "Parou no número 24 : $cont";
 break;
}
  $cont += 2;
  //$cont = cont + 2;
}