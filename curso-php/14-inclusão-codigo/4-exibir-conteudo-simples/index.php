<?php

$nome = "Rafael";
$sobrenome = "Morales de Lima"
?>

<!--Exibir direto de uma variável -->
<?= $teste = "Testando";?>

<form action="">
<div>
  <p>Nome:</p>
  <input type="text" value=" <?= $nome." ". $sobrenome; ?> ">
</div>
<div>
  <p>Sobrenome:</p>
  <input type="text" value=" <?= $sobrenome; ?> ">
</div>
<div>
  <input type="submit"  value="Enviar">
</div>

</form>