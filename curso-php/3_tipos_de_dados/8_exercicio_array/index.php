<?php
//Array associativo
$carro = ['marca' => 'Jeep', 'motor'=> 1.8, 'cor' => 'Prata'];
echo $carro['marca']." ".$carro['motor']." ".$carro['cor'];

echo"<br>";
$carro2 = ['Jeep', 1.8, 'Prata'];
echo " Marca: ".$carro2[0];
echo "<br>";
echo "Motor: ".$carro2[1]; // Acesso ao array correto com descrição
echo "<br>";
echo "Cor: ".$carro2[2];

echo"<br>";
echo "Marca: ".$carro2[0]." "."Motor: ".$carro2[1]." "."Cor: ".$carro2[2];
echo "<br>";
echo "Marca: ".$carro2[0]." "."Motor: ".$carro2[1]." ". "Cor: ".$carro2[2];
?>