<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laços de Encantamento: Brincadeiras de Bebê</title>
    <meta name="description" content="<strong>Laços de Encantamento</strong> é uma proposta de oficinas de brincar para bebês de 3 meses à 1 ano.">
    <?php include("head.php"); ?>
	<link rel="stylesheet" href="css/carrossel.css">
</head>
<body>
    <?php $inicio="" ?>
    <?php include("cabecalho.php"); ?>
    <main>
        <section class="lacosDeEncantamento">
            <h2>Laços de Encantamento</h2>
            <p><strong>Laços de Encantamento</strong> é uma proposta de oficinas de brincar para bebês de 3 meses à 1 ano.</p>
            <p><strong>Laços</strong> vêm com nossa vontade de que os encontros fortaleçam os vínculos entre famílias e bebês, com um olhar entre ambos encantando-se mutuamente.</p>
            <p>A palavra <strong>Encantamento</strong> surge por sugestão de Gabriela mãe do João que se referiu a nossa oficina como "um encantamento"!</p>
            <p>O nome "Laços de Encantamento" se consagrou quando nos deparamos com a origem da palavra Brincar.</p>
            <p>Brincar vem de <span>vinculum</span> que quer dizer laço, e é derivada do verbo <span>vincire</span>, que significa encantar. <span>Vinculum</span> virou brinco e originou o verbo brincar, sinônimo de divertir-se. (www.dicionarioetimologico.com.br)</p>
        </section>
        <section class="carrossel-imagens">
            <h2>Oficinas de Brincar</h2>
            <div class="jcarousel">
                <ul>
                    <li>
                        <img src="img/carrossel1.jpg" alt="Carrossel imagem 1">
                    </li>
                    <li>
                        <img src="img/carrossel2.jpg" alt="Carrossel imagem 2">
                    </li>
                    <li>
                        <img src="img/carrossel3.jpg" alt="Carrossel imagem 3">
                    </li>
                </ul>
            </div>
        </section>
        <section class="locais-oficinas">
            <h2>Onde realizamos as oficinas e cursos</h2>
            <figure class="painel">
                <h3>Casa Curumim</h3>
                <img src="img/oficina-casa-curumim.jpg" alt="Oficina na Casa Curumim">    
                <figcaption>
                    <p>Toda 6f na <a target="_blank" href="http://www.casacurumim.com.br/oficina-brincadeiras-de-bebes">Casa Curumim</a>!</p><br />
                    <ul>
                        <li>- Oficina Desenvolver Brincando (<a href="oficinas.php#oficina-desenvolver-brincando">mais informações</a>)</li>
                        <li>- Oficinas Temáticas (<a href="oficinas.php#oficinas-tematicas">mais informações</a>):<br /> Contação de histórias e Brinquedos encantadores</li>
                    </ul><br />
                    <p>Endereço: Rua Pereira Leite, 513 - Vila Madalena - São Paulo, SP</p><br />
                </figcaption>
            </figure>
            <figure class="painel">
                <h3>Ôkupa Âncora</h3>
                <img src="img/oficina-okupa-ancora.jpg" alt="Oficina na Casa Curumim">    
                <figcaption>
                    <p>Toda 4f no <a target="_blank" href="http://projetoancora.org.br/">Projeto Âncora</a>!</p><br />
                    <ul>
                        <li>- Oficina Brinkâncora (<a href="oficinas.php#oficina-brinkancora">mais informações</a>)</li>
                        <li>- Curso: "Do Que Brincar Com Os Bebês" (<a href="oficinas.php#do-que-brincar-bebes">mais informações</a>)</li>
                    </ul><br />
                    <p>Endereço: Estrada Municipal Walter Steurer, 1239 - Jd. Rebelato - Cotia, SP - Km 21 da Rodovia Raposo Tavares</p><br />
                </figcaption>
            </figure>
        </section>
        <section class="locais-oficinas">
            <h2>Por onde já passamos</h2>
            <figure class="painel">
                <h3>SESC Pinheiros</h3>
                <img src="img/local-sesc-pinheiros.jpg" alt="Oficina no SESC Pinheiros">
                <figcaption>
                    Em 12/01/2016, 14/01/2016 e 16/01/2016 realizamos 5 oficinas onde compareceram mais de 60 bebês!! Bebês e famílias interessadas em Brincar!! Foi muito gratificante ver tantas famílias querendo participar!! 
                </figcaption>    
            </figure>
            <figure class="painel">
                <h3>SESC Osasco</h3>
                <img src="img/local-sesc-osasco.jpg" alt="Oficina no SESC Pinheiros">
                <figcaption>
                    Em 07/08/2016, 14/08/2016, 21/08/2016 e 28/08/2016 realizamos oficinas com cerca de 80 bebês!! Inclusive com a participação especial de muitos pais no Dia dos Pais!
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
                    <input name="dataDeNascimentoDoBebe" placeholder="Data de nascimento do bebê" type="text" id="dataDeNascimentoDoBebe"><br />
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