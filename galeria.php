<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sobre</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="lib/css/lightbox.css">
</head>
<body>
    <?php include("cabecalho.php"); ?>
    <main>
        <section class="galeria-fotos">
            <h2>Galeria de fotos</h2>
<!--            <a href="img/carrossel1.jpg" data-lightbox="roadtrip" data-title="Nossa que imagem linda!">-->
            <a href="img/carrossel1.jpg" data-lightbox="roadtrip">
                <img src="img/carrossel1.jpg" alt="Foto Oficina 1">
            </a>
            <a href="img/carrossel2.jpg" data-lightbox="roadtrip">
                <img src="img/carrossel2.jpg" alt="Foto Oficina 2">
            </a>
            <a href="img/carrossel3.jpg" data-lightbox="roadtrip">
                <img src="img/carrossel3.jpg" alt="Foto Oficina 3">
            </a>
        </section>
    </main>
    <?php include("rodape.php"); ?>
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="lib/js/lightbox.js"></script>
    
    <script>
       $(function () {
           lightbox.option({
               'resizeDuration': 200,
               'wrapAround': true,
               'albumLabel': 'Imagem %1 de %2',
               'alwaysShowNavOnTouchDevices': true
           });
       });
    </script>
</body>
</html>