(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.parallax').parallax();
    $('select').formSelect();
    $('.carousel.carousel-slider').carousel({
    	indicators: true,
    	dist: -100
    });
    $('.dropdown-trigger').dropdown();
    $('.page-scroll').on('click', function(){
    	var tujuan = $(this).attr('href');
    	var elemenTujuan = $(tujuan);
    	$('body').animate({
    		scrollTop: elemenTujuan.offset().top - 50 
    	}, 1000);
    });
    $('.materialboxed').materialbox();

  }); // end of document ready
})(jQuery); // end of jQuery name space
