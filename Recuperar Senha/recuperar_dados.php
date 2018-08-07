<?php

  require_once "PHPMailer/PHPMailerAutoLoad.php";
  require_once "interno/conecta.php";
  require_once "interno/funcoes.php";


  $recupera = $_POST['recuperar-senha'];
  $link = "https://www.google.com/gmail/".$recupera;

  $mail = new PHPMailer();

  $mail->IsSMTP();
  $mail->isHTML(true);
  $mail->CharSet = 'utf-8';
  $mail->Host = 'mx1.weblink.com.br';
  $mail->Port = 587;
  $mail->SMTPSecure = 'tls';
  $mail->SMTPAuth = true;
  $mail->Username = 'fulano@email.com.br';
  $mail->Password = '********';
  $mail->setFrom("beltrano@email.com.br", "senai");
  $mail->FromName = 'senai';
  $mail->Subject = "Recuperar senha";

  $mensagem = "Clique <a href=".$link.">aqui</a> para recuperar sua senha.

  $mail->Body = $mensagem;
  $mail->AltBody = "Conteudo do email em texto";

  $mail->addAddress($recupera);

  if($mail->Send()) {

    header("Location: confirmar.php");
  } else {

    echo "Erro ao enviar email". $mail->ErrorInfo;
  }
