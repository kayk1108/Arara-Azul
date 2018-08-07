<?php

  $host = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'todo';

  //conecxão
  $conn = new mysqli($host, $username, $password, $database);

  //checar a conecxão
  if($conn->connect_error){
    die("conexão falhou: " . $conn->connect_error);
  }
  echo 'Conectado ao Banco de Dados ' . $database;

 ?>
