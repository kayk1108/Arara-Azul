<?php
/*Exclusão dos registros da base de dados.*/
  require("conecta.php");
  $codigo = $_GET["codigo"];
  $sqlExclusao = "DELETE FROM teste_de_imagens WHERE codigo = '$codigo' ";
  $queryExclusao = mysql_query($sqlExclusao) or die("Algo deu errado ao excluir a imagem. Tente novamente.");
  echo 'Imagem excluída com sucesso!';
  header('Location: index.php');

  /*A exclusão dos registros existentes na tabela de imagens
   será realizada com a utilização do $_GET para que possamos
    pegar o código daquele determinado registro, assim como foi
    realizado para a seleção do mesmo registro. Em seguida, ao
     finalizarmos o processo de exclusão, apresentamos uma mensagem
      de sucesso e redirecionamos para a página principal utilizando a instrução Header(‘Location’).*/
  ?>
