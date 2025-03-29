<?php
  
  echo "Testando texto de aspas duplas <br>";
  echo 'Testando texto de aspas simples <br>';
  echo "Ele disse 'Olá ' <br>";
  echo 'Ele disse "Olá" <br>';

  //Usar as variáveis sempre em aspas duplas
  $idade = 42;
  echo "Rafael tem $idade anos <br>";
 //checar se a variável é uma String
  $nome = "Rafael";
  if(is_string($nome)){
    echo "A variável '$nome' é uma String";
  } else {
    echo "A variável '$nome' não é uma String";

  }


?>