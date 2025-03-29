<?php
  //Números decimais utilizamos tipo de dado float
  //Checando se o número é float função is_float()
  $aluno = "Rafael";
  $nota1 = 6.5;
  $nota2 = 7.5;
  $nota3 = 8.5;
  $quantidadeNotas = 3;
  $media = ($nota1 + $nota2 +  $nota3) / $quantidadeNotas;
 echo "A média do aluno $aluno é: $media <br>";
  
 if(is_float($media)){
   echo "O valor da média é FLOAT: $media";
 }else {
   echo "O valor da média não e um FLOAT: $media";
 }
 
?>