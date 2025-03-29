<?php
// Colocar variáveis globais dentro da função
$teste = "Morales Teste";

//chamando variável global $teste para dentro da função
function testeGlobal(){
  global $teste;
  echo "Valor da variável global:: $teste";
}


testeGlobal();


?>