<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laços de Encantamento: Brincadeiras de Bebê</title>
    <meta name="description" content="<strong>Laços de Encantamento<strong> é uma proposta de oficinas de brincadeiras para bebês - semanalmente na Casa Curumim, 4f as 14:30 para bebês de 3 à 6 meses e 15:30 para bebês de 7 à 12 meses.">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/carrossel.css">
	<link href='https://fonts.googleapis.com/css?family=Amatic+SC:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:300' rel='stylesheet' type='text/css'>
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
            <figure class="painel">
                <h3>Casa Curumim</h3>
                <img src="img/local-curumim.jpg" alt="Oficina na Casa Curumim">    
                <figcaption>
                    <p>Toda 4f na <a target="_blank" href="http://www.casacurumim.com.br/oficina-brincadeiras-de-bebes/">Casa Curumim!</a>
                    <p>Para bebês de 4 à 6 meses às 14h30</p>
                    <p>Para bebês de 7 à 12 meses às 15h30</p>
                    <p>Faça sua inscrição nos mandando um email informando que dia irá brincar conosco e a idade do bebê!</p>
                    <p>lacosdeencantamento@gmail.com</p>
                </figcaption>
            </figure>
            <figure class="painel">
                <h3>SESC Pinheiros</h3>
                <img src="img/local-sesc.jpg" alt="Oficina no SESC Pinheiros">
                <figcaption>
Em 12/01/2016, 14/01/2016 e 16/01/2016  realizamos 5  oficinas onde compareceram mais de 60 bebês!! Bebês e famílias interessadas em Brincar!! Foi muito gratificante ver tantas famílias querendo participar!! 
                </figcaption>    
            </figure>
        </section>
        <section class="contato">
            <h2>Quer conhecer mais sobre nosso trabalho?</h2>
            <div class="lista-email">
                <h3 class="transparente">Faça parte da nossa lista de emails!</h3>
                <form action="enviarEmail.php" method="post">
                    <input name="assunto" type="hidden" id="assunto" value="Lista de emails 2"><br />
                    <input name="seuNome" placeholder="Seu nome" type="text" id="seuNome"><br />
                    <input name="nomeDoBebe" placeholder="Nome do bebê" type="text" id="nomeDoBebe"><br />
                    <input name="dataDeNascimentoDoBebe" placeholder="Data de nascimento do bebê" type="date" id="dataDeNascimentoDoBebe"><br />
                    <input name="seuEmail" placeholder="Seu email" type="email" id="email">
                    
                    <input type="submit" value="Quero fazer parte!">
                </form>
            </div>
            <div class="redes-sociais lista-email">
                <h3 class="transparente">Canais de comunicação!</h3>
                <div>
                    <a target="_blank" href="https://www.facebook.com/brincadeirasdebebelacos">
                        <img src="img/facebook.svg" alt="Facebook">
                        <p>Acompanhe nossos eventos no Facebook!</p>
                    </a>
                </div>
                <div>
                    <a target="_blank" href="https://www.youtube.com/channel/UCiVmKurWXuDKy1uQvZFI2Lg">
                        <img src="img/youtube.svg" alt="YouTube">
                        <p>Acompanhe nosso canal no YouTube!</p>
                    </a>
                </div>
            </div>
        </section>
    </main>
    <?php include("rodape.php"); ?>
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/jquery.jcarousel.min.js"></script>
    <script src="js/carrossel.js"></script>
</body>
</html>