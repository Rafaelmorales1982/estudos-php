<?php 
  //Utilizando a função is_int()

  $numero1 = 5;
  $numero2 = 10.5;
  if(is_int($numero2)){// entra no if se for inteiro
    echo "É número inteiro... $numero1";
  }else { // se for false entra no else
    echo "Esse número não é inteiro ... $numero2";
  }


?>