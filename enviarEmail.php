<?php
  $para = "franklindeoliveira@gmail.com";
  $seuNome = $_POST['seuNome'];
  $nomeDoBebe = $_POST['nomeDoBebe'];
  $dataDeNascimentoDoBebe = $_POST['dataDeNascimentoDoBebe'];
  $seuEmail = $_POST['seuEmail'];

  $mensagem = "A seguinte pessoa gostaria de fazer parte da lista de emails do site:"
  $mensagem = "<br /><br /><strong>Seu nome:  </strong>".$seuNome;
  $mensagem = "<br /><strong>Nome:  </strong>".$nomeDoBebe;
  $mensagem = "<br /><strong>Nome:  </strong>".$dataDeNascimentoDoBebe;
  $mensagem = "<br /><strong>Nome:  </strong>".$seuEmail;

//5 – agora inserimos as codificações corretas e  tudo mais.
  $headers =  "Content-Type:text/html; charset=UTF-8\n";
  $headers .= "From:  lacosdeencantamento.com.br<sistema@dominio.com.br>\n"; //Vai ser //mostrado que  o email partiu deste email e seguido do nome
  $headers .= "X-Sender:  <sistema@dominio.com.br>\n"; //email do servidor //que enviou
  $headers .= "X-Mailer: PHP  v".phpversion()."\n";
  $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
  $headers .= "Return-Path:  <sistema@dominio.com.br>\n"; //caso a msg //seja respondida vai para  este email.
  $headers .= "MIME-Version: 1.0\n";

mail($para, $assunto, $mensagem, $headers);  //função que faz o envio do email.
?>