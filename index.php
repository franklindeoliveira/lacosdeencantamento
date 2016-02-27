<!DOCTYPE html>
<html lang="en">
<head>
    <title>Brincadeiras de bebê: Laços de Encantamento</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/carrossel.css">
</head>
<body>
    <?php include("cabecalho.php"); ?>
    <main>
        <section class="carrossel-imagens">
            <h2>Oficinas de Brincar</h2>
            <div class="jcarousel">
                <ul>
                    <li><img src="img/carrossel1.jpg" alt="Foto Oficina 1"></li>
                    <li><img src="img/carrossel2.jpg" alt="Foto Oficina 2"></li>
                    <li><img src="img/carrossel3.jpg" alt="Foto Oficina 3"></li>
                </ul>
            </div>
        </section>
        <section class="locais-oficinas">
            <h2>Onde realizamos as oficinas</h2>
            <figure class="casa-curumim">
                <h3>Casa  Curumim</h3>
                <img src="img/local-curumim.jpg" alt="Local Curumim">    
                <figcaption>
                    <p>Toda 4f !</p>
                    <p>Para Bebês de 4 meses a 6 meses as 14h30</p>
                    <p>Para bebês de 7 meses a 12 meses as 15h30</p>
                    <p>Faça sua incrição nos mandando um email informando que dia irá brincar conosco e a idade do bebê!</p>
                    <p>lacosdeencantamento@gmail.com</p>
                </figcaption>
            </figure>
            <figure class="sesc-pinheiros">
                <h3>SESC Pinheiros</h3>
                <img src="img/local-sesc.jpg" alt="Local Sesc">
                <figcaption>
Em 12/01/2016, 14/01/2016 e 16/01/2016  realizamos 5  oficinas onde compareceram mais de 60 bebês!! Bebês e famílias interessadas em Brincar!! Foi muito gratificante ver tantas famílias querendo participar!! 
                </figcaption>    
            </figure>
        </section>
        <section class="contato">
            <h2>Quer conhecer mais sobre nosso trabalho?</h2>
            <div class="lista-email">
                <p>Faça parte da nossa lista de emails!</p>
                <form action="enviarEmail.php" method="post">
                    <input name="assunto" type="hidden" id="assunto" value="Lista de emails 2"><br />
                    <input name="seuNome" placeholder="Seu nome" type="text" id="seuNome"><br />
                    <input name="nomeDoBebe" placeholder="Nome do bebê" type="text" id="nomeDoBebe"><br />
                    <input name="dataDeNascimentoDoBebe" placeholder="Data de nascimento do bebê" type="date" id="dataDeNascimentoDoBebe"><br />
                    <input name="seuEmail" placeholder="Seu email" type="email" id="email">
                    
                    <input type="submit" value="Quero fazer parte!">
                </form>
            </div>
        </section>
    </main>
    <?php include("rodape.php"); ?>
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/jquery.jcarousel.min.js"></script>
    <script src="js/carrossel.js"></script>
</body>
</html>