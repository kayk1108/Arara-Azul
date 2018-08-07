<?php

    /* Chamar os arquivos de conexão ao Banco de Dados */

    include ("conexao.php");

    /* Pegar os dados digitados no formulário, através do método POST */

    $titulo_noticia = $_POST['titulo_noticia'];
    $descricao = $_POST['descricao'];
    $data = $_POST['data'];
    $fonte = $_POST['fonte'];
    $conteudo = $_POST['conteudo'];
    $imagem = $_POST['imagem'];


    /*Inserindo os dados na Tabela "noticia" através de comandos MySQL. */

    $sqlinsert = "INSERT INTO noticia (titulo_noticia,descricao,data,fonte,conteudo,imagem) VALUES ('','$titulo_noticia','$descricao','$data','$fonte','$conteudo','$imagem')";

    $insercao = mysql_connect ($sqlinsert) or die ("Não foi possível inserir os dados");

    /* Mostrar na tela os dados inseridos */

    echo "Inseridos na Tabela DADOS <br />Titulo: $titulo_noticia <br />imagem: $imagem <br />Descrição:  $descricao";

?>
