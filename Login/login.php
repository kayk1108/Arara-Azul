<?php

  $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = $_POST['senha'];

  $con = mysql_connect("localhost", "root", "password") or die ("Sem conexão com o servidor");
  $select = mysql_select_db("server") or die("Sem acesso ao DB, Entre em contato com o Administrador, kaykvinicius.ti@gmail.com.br");

    if (isset($entrar)) {

      $result = mysql_query("SELECT * FROM `usuario` WHERE `nome` = '$login' AND `senha`= '$senha'") or die("erro ao selecionar");

        if (mysql_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
          die();
        }else{
          setcookie("login",$login);
          header("Location:index.php");
        }
    }
?>
