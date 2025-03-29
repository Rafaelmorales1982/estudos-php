<?php
// média 3 trimestres verificar se o aluno esta aprovado
//média maior 6 aprovado
$aluno = "Gabriel Balico";
$nota1 = 6;
$nota2 = 7;
$nota3 = 8;
$media = ($nota1 + $nota2 + $nota3) / 3;
echo "Nota do 1° trimestre :$nota1 <br> ";
echo "Nota do 2° trimestre :$nota2 <br> ";
echo "Nota do 3° trimestre :$nota3 <br> ";
echo "A média do aluno: $aluno é: $media  <br>";
if ($media >= 6){
  echo "Aluno Aprovado: $media";
}else{
  echo "Aluno Reprovado: $media";
}


?>