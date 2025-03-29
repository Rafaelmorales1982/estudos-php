<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1> Pegando informações da página imc.php mostrar IMC de uma pessoa</h1>

  <?php
    require_once __DIR__."../../1-include/arquivos/imc.php";
  ?>
    <h1>IMC exame de <?php echo " $pessoa seu IMC: $calcImc "; ?></h1>

  <h2>Arquivo require.php</h2>

<h3>Include aqui</h3>
<?php
    require_once __DIR__."../../1-include/teste.php";
  ?>
  

</body>
</html>