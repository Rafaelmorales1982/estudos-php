<?php
  class Pessoa {
    function falar(){
      echo "Olá pessoal";
    }

  }

  //instanciando objeto

  $Rafael = new Pessoa();
  $Rafael->nome = "Rafael";
  echo $Rafael->nome;
  echo "<br>";

  $Rafael->falar();


?>