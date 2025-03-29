<?php
  $nomeLoja = "Privalia";//String
  $itemComprado = "Tênis";//String
  $valorItem = 200;//int
  $desconto = 0.4;//float
  $valorLiquido = $valorItem - ($valorItem * $desconto);
  $descontoLoja = 0.1;//float
  echo "Loja: $nomeLoja <br>";
  echo "Item: $itemComprado o seu valor com desconto: $valorLiquido <br>";
  
  echo "Cliente comprou na loja online privalia tem mais 10% desconto <br>";
  if ($nomeLoja === $nomeLoja){
    $descontoPromocao = $valorLiquido - ($valorLiquido * $descontoLoja);
    echo "Promoção com desconto 10% seu valor é: $descontoPromocao ";
  }
 //Utilizando Variável de Variável
 echo "<br>";
 $nome = "Rafael";
 $$nome = " Morales";
 echo $nome, $$nome ;
?>