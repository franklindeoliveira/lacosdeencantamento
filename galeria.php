<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laços de Encantamento: Galeria de Fotos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="lib/css/lightbox.css">
	<link href='https://fonts.googleapis.com/css?family=Amatic+SC:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:300' rel='stylesheet' type='text/css'>
</head>
<body>
    <?php include("cabecalho.php"); ?>
    <main>
        <section class="galeria-fotos">
            <h2>Galeria de fotos</h2>
<!--            <a href="img/carrossel1.jpg" data-lightbox="roadtrip" data-title="Nossa que imagem linda!">-->
            
        </section>
    </main>
    <?php include("rodape.php"); ?>
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="lib/js/lightbox.js"></script>
    
    <script src="js/galeria.js"></script>
    
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