<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contato | Laços de Encantamento</title>
    <meta name="description" content="Entre em contato conosco para informações sobre nossas oficinas.">
    <?php include("head.php"); ?>
</head>
<body>
    <?php $contato="" ?>
    <?php include("cabecalho.php"); ?>
    <main>
        <section class="contato">
            <h2>Contato</h2>
            <div class="lista-email">
                <h3 class="transparente">Entre em contato conosco!</h3>
                <form action="contatoEmail.php" method="post">
                    <input name="assunto" type="hidden" id="assunto" value="Contato"><br />
                    <input name="nome" placeholder="Nome" type="text"><br />
                    <input name="email" placeholder="Email" type="email"><br />
                    <input name="assuntoUsuario" placeholder="Assunto" type="text"><br />
                    <textarea name="mensagemUsuario" placeholder="Mensagem"></textarea>
                    
                    <input type="submit" value="Enviar!">
                </form>
            </div>
        </section>
    </main>
    <?php include("rodape.php"); ?>
</body>
</html>