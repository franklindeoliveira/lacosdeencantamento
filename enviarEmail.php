<?php

  $para = "franklindeoliveira@gmail.com";
  $nomeDoBebe = $_POST['nomeDoBebe'];
  $dataDeNascimentoDoBebe = $_POST['dataDeNascimentoDoBebe'];
  $seuEmail = $_POST['seuEmail'];
  $assunto = "Laços de Encantamento - Lista de emails";
  $mensagem = "<strong>Seu nome:  </strong>".$seuNome;
  $mensagem .= "<br>  <strong>Nome do bebê: </strong>".$nomeDoBebe;
  $mensagem .= "<br>  <strong>Data de nascimento do bebê: </strong>".$dataDeNascimentoDoBebe;
  $mensagem .= "<br>  <strong>Seu email: </strong>".$seuEmail;

  $headers =  "Content-Type:text/html; charset=UTF-8\n";
  $headers .= "From:  lacosdeencantamento.com.br<sistema@dominio.com.br>\n";
  $headers .= "X-Sender:  <sistema@dominio.com.br>\n";
  $headers .= "X-Mailer: PHP  v".phpversion()."\n";
  $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
  $headers .= "Return-Path:  <sistema@dominio.com.br>\n";
  $headers .= "MIME-Version: 1.0\n";

  mail($para, $assunto, $mensagem, $headers);

?>