$( document ).ready(function() { 
  function getIsotope () {
    return $('#posts').isotope({
        itemSelector : '.item',
        isFitWidth: true,
        layoutMode: 'fitRows',
        filter: '*',
    });
  }   

  // filter items on button click
  $('#filters').on( 'click', 'a', function() {
    var $container = getIsotope();
    var filterValue = $(this).attr('data-filter');
    $container.isotope({ filter: filterValue });
    return false;
  });

  $(window).resize(function(){
    var $container = getIsotope();
    $container.isotope({
      columnWidth: '.col-sm-3'
    });
  });

});