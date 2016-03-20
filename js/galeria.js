$(function() {
//    for (var i = 1; i < 55; i++) {
//        var foto = '<div class="grid-item"><a href="img/galeria/foto' + i + '.jpg" data-lightbox="roadtrip"><img src="img/galeria/foto'+i+'.jpg" alt="Foto '+i+'"></a></div>'
//        $('.grid').append(foto);
//    }
    $('.grid').masonry({
      // options
      itemSelector: '.grid-item',
      columnWidth: 10,
      columnHeight: 10,
        percentPosition: true
    });
});