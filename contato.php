<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contato</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
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