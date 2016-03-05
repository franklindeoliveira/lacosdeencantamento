<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sobre</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link href='https://fonts.googleapis.com/css?family=Amatic+SC:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:300' rel='stylesheet' type='text/css'>
</head>
<body>
    <?php include("cabecalho.php"); ?>
    <main>
        <section class="depoimentos contato">
            <h2>Depoimentos</h2>
            
            <div class="lista-email">
                <h3 class="transparente">Participou da oficinas? Conte-nos o que achou!</h3>
                <form action="contatoEmail.php" method="post">
                    <input name="assunto" type="hidden" id="assunto" value="Depoimento"><br />
                    <input name="nome" placeholder="Nome" type="text"><br />
                    <input name="email" placeholder="Email" type="email"><br />
                    <input name="assuntoUsuario" placeholder="Assunto" type="text"><br />
                    <textarea name="mensagemUsuario" placeholder="Mensagem"></textarea>
                    
                    <input type="submit" value="Enviar!">
                </form>
            </div>
<!--
            <blockcote>
                <p>Descrição do depoimento... decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição</p>
                <cite>Nome da citação</cite>
            </blockcote>
            <blockcote>
                <p>Descrição do depoimento...  decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição</p>
                <cite>Nome da citação</cite>
            </blockcote>
            <blockcote>
                <p>Descrição do depoimento... decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição decrição</p>
                <cite>Nome da citação</cite>
            </blockcote>
-->
        </section>
    </main>
    <?php include("rodape.php"); ?>
</body>
</html>