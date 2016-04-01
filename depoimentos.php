<!DOCTYPE html>
<html lang="en">
<head>
    <title>Depoimentos | Laços de Encantamento</title>
    <meta name="description" content="Conheça a opinião de quem já participou das oficinas.">
    <?php include("head.php"); ?>
</head>
<body>
    <?php $depoimentos="" ?>
    <?php include("cabecalho.php"); ?>
    <main>
        <section class="depoimentos contato">
            <h2>Depoimentos</h2>
            
            <div class="lista-email">
                <h3 class="transparente">Participou das oficinas? Conte-nos o que achou!</h3>
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