<?php
  // True - verdadeiro número 1
  // false - falso número 0 

  if(true){
    echo "Verdadeiro <br>";
  } 
  
  if (5 > 2 ){
    echo "Verdadeiro 5 é maio que 2. <br>";
  } else {
    echo "É tudo falso <br>";
  }
 // checando se o tipo de dados booleano com is_boolean() agora é is_bool
 $podeEntrar = true;
 $falso = false;
if (is_bool($podeEntrar)){
  echo "Realmente essa variável é boolean  $podeEntrar<br>";
} else {
  echo "não é uma variável boolean $podeEntrar<br>";
}

if (is_bool($falso)){
  echo "Realmente essa variável é boolean $falso<br>";
} else {
  echo "não é uma variável boolean $falso<br>";
}




?>
