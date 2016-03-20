$(function() {
//    for (var i = 1; i < 55; i++) {
//        var foto = '<div class="grid-item"><a href="img/galeria/foto' + i + '.jpg" data-lightbox="roadtrip"><img src="img/galeria/foto'+i+'.jpg" alt="Foto '+i+'"></a></div>'
//        $('.grid').append(foto);
//    }
    var grid = $('.grid').imagesLoaded( function() {
        grid.masonry({
            itemSelector: '.grid-item',
            columnWidth: 10
        })
        .imagesLoaded().progress( function() {
            $grid.masonry('layout');
        });
    });
});