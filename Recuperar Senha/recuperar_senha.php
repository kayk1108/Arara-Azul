<?php

  require "login.php";
  require "conecta.php";
  require "funcoes.php";
  $recupera = $_GET['recupera'];
?>

<section class="recipiente margem-topo-100">

  <form class="coluna" action="sucesso.php" method="post" >

    <input type="text" name="recupera" value="<?=$recupera?>">
    <input type="password" name="senha" placeholder="insira uma nova senha">

    <button class="icones icone-enviar"></button>

  </form>

</section>
