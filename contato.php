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
                <p>Entre em contato conosco!</p>
                <form action="#">
                    <input placeholder="Nome" type="text"><br />
                    <input placeholder="Email" type="email"><br />
                    <input placeholder="Assunto" type="text"><br />
                    <textarea placeholder="Mensagem"></textarea>
                    
                    <input type="submit" value="Enviar!">
                </form>
            </div>
        </section>
    </main>
    <?php include("rodape.php"); ?>
</body>
</html>