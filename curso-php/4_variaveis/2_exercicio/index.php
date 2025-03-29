<?php
  $nome = "Rafael";//String
  $idade = 42; //  Integer
  $salario = 5.000; //float
  $profissao = " ' Programador Jr ' ";//String
  $casado = true;//Boolean
  $esposa = ' "Elaine" ';//String
  $itens = ['carro' => 'Jeep', 'computador' => 'Ryzen 5 ' ];
  echo "Nome: $nome <br> Idade: $idade  <br>";
  echo "Profissão: $profissao <br>";
  echo "Salário: ' $salario ' <br> ";
  
  if($casado){
    echo "Estado Civil: Casado - Nome esposa: $esposa <br> ";
  }
  echo "Meus itens : Carro: ".$itens['carro']." - Computador: ". $itens['computador'];
 echo "<br>";
  //Mostrar todo o array com seus indices
  print_r($itens);


?>