<?php
//Ordem das expressões
echo 3 + 2 * 5; //13 -  multiplicação primeiro
echo "<br>";
echo (3 + 5) * 5; // 40 parênteses primeiro
echo "<br>";
echo 5 + 2 / 10; // 5.2 divisão primeiro
echo "<br>";

//Utilizando variáveis

$valor1 = 5;
$valor2  = 3;
$valor3 = 2;
$somar = $valor1 + $valor2 + $valor3;
echo "Resultador: ". $valor2 + $valor3 * $valor1."<br>";
echo "resultado da soma: $somar";


// média 3 trimestres verificar se o aluno esta aprovado
//média maior 6 aprovado
$aluno = "Gabriel Balico";
$nota1 = 6;
$nota2 = 7.5;
$nota3 = 8;
$media = ($nota1 + $nota2 + $nota3) / 3;
echo "Nota do 1° trimestre :$nota1 <br> ";
echo "Nota do 2° trimestre :$nota2 <br> ";
echo "Nota do 3° trimestre :$nota3 <br> ";
echo "A média do aluno: $aluno é: $media  <br>";
if ($media >= 6){
  echo "Aluno Aprovado: $media <br>";
}else{
  echo "Aluno Reprovado: $media <br>";
}
//verificar tipo de dado gettype

echo gettype($media);
echo "<br>";
echo gettype($aluno); 





?>