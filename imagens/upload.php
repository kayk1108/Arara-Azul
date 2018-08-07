<?php
/*Criação da classe de upload.php.*/
  require("conecta.php");
  $nomeEvento = $_POST['nome_evento'];
  $descricaoEvento = $_POST['descricao_evento'];
  $imagem = $_FILES['imagem']['tmp_name'];
  $tamanho = $_FILES['imagem']['size'];
  $tipo = $_FILES['imagem']['type'];
  $nome = $_FILES['imagem']['name'];

  if ( $imagem != "none" )
  {
      $fp = fopen($imagem, "rb");
      $conteudo = fread($fp, $tamanho);
      $conteudo = addslashes($conteudo);
      fclose($fp);

  $queryInsercao = "INSERT INTO tabela_imagens (nome_evento, descrição_evento, nome_imagem, tamanho_imagem, tipo_imagem, imagem)
  VALUES ('$nomeEvento', '$descricaoEvento','$nome','$tamanho', '$tipo','$conteudo')";

   mysql_query($queryInsercao) or die("Algo deu errado ao inserir o registro. Tente novamente.");
  echo 'Registro inserido com sucesso!';
  header('Location: index.php');
   if(mysql_affected_rows($conexao) > 0)
       print "A imagem foi salva na base de dados.";
   else
       print "Não foi possível salvar a imagem na base de dados.";
   }
  else
      print "Não foi possível carregar a imagem.";
      /*Temos logo no começo a utilização da variável $_FILES
      que é utilizada para a leitura de dados dos arquivos que
      serão enviados para o servidor. Dentre os parâmetros
       utilizados por esta variável, podemos destacar os
        parâmetros “name”, “type”, “size” e “tmp_name”,
        os quais são responsáveis por nos passar as informações
         do nome do arquivo, o tipo que está sendo passado,
          o tamanho e um local temporário que é criado quando o arquivo é enviado.
           Percebam que como estamos tratando aqui de um array de informações,
            é necessário passarmos sempre a variável com dois parâmetros,
             onde um deles é o nome que demos ao name no formulário de envio
              e o outro contendo as informações que queremos obter,
               como é o caso de $nome = $_FILES['imagem']['name'].*/
  ?>
