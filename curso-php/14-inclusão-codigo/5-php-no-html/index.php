<?php
 include_once "backend.php";

?>

<h1> Seja bem-vindo ao nosso site </h1>
<p><?= $nome; ?> Veja as nossas ofertas </p>

<h2>Confira nossos principais produtos: </h2>
<!--fazer loop com foreach para mostrar os produtos do array nas tags li -->
<!--Impressão dinâmica -->
<ul>
<?php  foreach($produtos as $produto):  ?>
  <li><?=  $produto; ?></li>
<?php endforeach; ?>
</ul>