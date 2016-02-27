<?php

  $para = $_POST['email'];
  $assunto = $_POST['assunto'];

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $mensagemUsuario = $_POST['mensagemUsuario'];
  $assuntoUsuario = $_POST['assuntoUsuario'];

  $mensagem = "<strong>Nome:  </strong>".$nome;
  $mensagem .= "<br>  <strong>Email: </strong>".$email;
  $mensagem .= "<br>  <strong>Assunto: </strong>".$assuntoUsuario;
  $mensagem .= "<br>  <strong>Mensagem: </strong>".$mensagemUsuario;

  $headers =  "Content-Type:text/html; charset=UTF-8\n";
  $headers .= "From: Lacos de Encantamento - Contato<sistema@dominio.com.br>\n";
  $headers .= "X-Sender:  <sistema@dominio.com.br>\n";
  $headers .= "X-Mailer: PHP  v".phpversion()."\n";
  $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
  $headers .= "Return-Path:  <sistema@dominio.com.br>\n";
  $headers .= "MIME-Version: 1.0\n";

  mail($para, $assunto, $mensagem, $headers);

?>