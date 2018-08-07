<?php
/*Criação da classe conecta.php*/
  $conexao = mysql_connect("localhost", "root");

  if($conexao)
  {
  $baseSelecionada = mysql_select_db("teste_de_imagens");
  if (!$baseSelecionada) {
      die ('Não foi possível conectar a base de dados: ' . mysql_error());
  } } else {
      die('Não conectado : ' . mysql_error());
  }
  ?>
