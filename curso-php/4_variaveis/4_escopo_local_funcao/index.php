<?php
  $valor = 10;
  echo "$valor escopo global <br>";

  //variável do escopo local não reflete na global
  function teste(){
    $valor = 20;
    echo "$valor escopo local <br>";
  }

  teste();


?>