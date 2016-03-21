$(function() {
    for (var i = 1; i < 55; i++) {
        var foto = '<a href="img/galeria/originais/foto'+i+'.jpg" data-lightbox="roadtrip"><img src="img/galeria/miniaturas/foto'+i+'.jpg" alt="Galeria de fotos - Foto '+i+'"></a>'
        $('.galeria-fotos').append(foto);
    }
});