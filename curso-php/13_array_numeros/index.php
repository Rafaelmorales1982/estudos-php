<?php
//Crie um array com valores inteiros de 10 a 100
//com incremento de 10;
//aplique um loop neste array;
//Quando entrar os valores 30 ou 40, pule para
//a próxima execução

$numeros = [10,20,30,40,50,60,70,80,90,100];

for($i = 0; $i < count($numeros); $i++){
  $numeroAtual = $numeros[$i];
if($numeroAtual === 30 || $numeroAtual === 40) {
  continue;
}

  echo "Elemeto: $numeroAtual <br>";

}

//Crie um array com números de 1 a 20
//Crie um loop for para este array
//Imprima apenas os pares
 $numeros2 = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

 for($par = 0;$par < count($numeros2);$par++){
  $numerosPares = $numeros2[$par];
  if($numerosPares % 2 === 0){
    echo "Numero par: $numerosPares <br>";
  }
 }

 //adicionando valores para dentro do array utilizando array_push
 $numero3 = [];
 for ($i = 1; $i <= 10; $i++) {
  array_push($numero3, $i);
 }

 print_r($numero3);
 echo "Número adicionados no array: ". implode(", ",$numero3)."<br>";

 //Crie um array de 10 a 20 com for;
 //Faça um loop cima do array criado dinamicamente
 //Imprima apenas os números ímpares
 $impares = [];
 for($i = 10; $i <= 20; $i++) {
 array_push($impares, $i);
 }

 print_r($impares);
echo "<br>";
 for($j = 0; $j < count($impares);$j++) {
   
  if($impares[$j] % 2 != 0) {
    echo "Número ímpar: $impares[$j] <br>";
  }
 }
echo "<br><br>";
 //Foreach usada nos arrays iterar
 $nomes = ['Pedro','Rafael','Maria','Matheus','João'];

 foreach($nomes as $nome){
  echo "Nomes: $nome <br>";
 }