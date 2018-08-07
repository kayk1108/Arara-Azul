<?php
include 'conection.php';

//Inserir Banco
$sql = "INSERT INTO todo (descricao) values ('teste')";
if($conn->query($sql) == true){
  echo 'Registro adicionado com sucesso';
}else{
  echo 'Erro: ' . $sql . '<br / />' . $conn->error;
}

//Fechar conexão
$conn->close();

?>
