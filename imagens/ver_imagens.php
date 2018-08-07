<?php
/*Criação da classe de visualização das imagens de acordo com o código.*/
  require("conecta.php");

  $id_imagem = $_GET[‘codigo’];
  $querySelecionaPorCodigo = "SELECT codigo, imagem FROM teste_de_imagens WHERE codigo = $id_imagem";
  $resultado = mysql_query($querySelecionaPorCodigo);
  $imagem = mysql_fetch_object($resultado);
  Header( "Content-type: image/gif");
  echo $imagem->imagem;
  /*Estamos usando aqui a variável $_GET para que possamos
   recuperar o código que foi passado pelo formulário anterior
    e passamos ele na nossa consulta, o que nos retorna um único valor.
    Ao obtermos o resultado de nossa consulta, utilizamos aqui a
    função mysql_fetch_object() que tem por objetivo retornar os
    dados como um objeto, diferente do que utilizamos na Listagem 5,
     que foi o mysql_fetch_array() que retorna os dados em forma de array.
     Em seguida, para apresentarmos a imagem precisamos adicionar
      o Header(“contente-type: image/gif”), pois sem a utilização dele,
       o que veremos em tela será o binário da imagem, ou seja,
        o que armazenamos na nossa base de dados. Por último,
        damos um echo e passando a nossa imagem como objeto.*/
?>
