
// menu fixed
	$(window).scroll(function() {    
    posicionarMenu();

    $('.globo_ventaja').each(function(){
    var imagePos = $(this).offset().top;

    var topOfWindow = $(window).scrollTop();
      if (imagePos < topOfWindow+1300) {
        $(this).addClass("slideRight");
      }
    });

    $('.cualidades > span').each(function(){
    var imagePos = $(this).offset().top;

    var topOfWindow = $(window).scrollTop();
      if (imagePos < topOfWindow+2200) {
        $(this).addClass("fadeIn");
      }
    });
	});

	function posicionarMenu() {
    	var altura_del_header = $('#headerescritorio').outerHeight(true);

    	if ($(window).scrollTop() >= altura_del_header){
        	$('#headerescritorio').addClass('fixed');
    	} else {
        	$('#headerescritorio').removeClass('fixed');
    	}
	}
		$('.ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 300);
	});


//OVERLAY SOLICITAR DEMO
(function() {
  var calculateHeight;

  calculateHeight = function() {
    var $content, contentHeight, finalHeight, windowHeight;
    $content = $('#overlay-content');
    contentHeight = parseInt($content.height()) + parseInt($content.css('margin-top')) + parseInt($content.css('margin-bottom'));
    windowHeight = $(window).height();
    finalHeight = windowHeight > contentHeight ? windowHeight : contentHeight;
    return finalHeight;
  };

  $(document).ready(function() {
    $(window).resize(function() {
      if ($(window).height() < 560 && $(window).width() > 800) {
        $('.solicitardemo').addClass('short');
      } else {
        $('.solicitardemo').removeClass('short');
      }
      return $('#overlay-background').height(calculateHeight());
    });
    $(window).trigger('resize');
    
    // open
    $('.solicita').click(function() {
      return $('.solicitardemo').addClass('open').find('.signup-form input:first').select();
    });
    
    // close
    return $('#overlay-background,#overlay-close').click(function() {
      return $('.solicitardemo').removeClass('open');
    });
  });

}).call(this)


//Mostrar videotablerocontrol
$("#tablero").hover(function(){
  $('#tablerogif').css('display','block');
  $('#tablero').css('display', 'none');
});


//ubicacion
$("#cdmx").click(function(){
  $('#cdmx_info').toggle();
});
$("#nuevoleon").click(function(){
  $('#nl_info').toggle();
});
$("#jalisco").click(function(){
  $('#jalisco_info').toggle();
});
$("#yucatan").click(function(){
  $('#yucatan_info').toggle();
});
$("#usa").click(function(){
  $('#usa_info').toggle();
});
$("#argentina").click(function(){
  $('#argentina_info').toggle();
});
$("#pakistan").click(function(){
  $('#pakistan_info').toggle();
});


// chatbox
$("#chat-btn").click(function(){
  $('#chatbox').removeClass('hidden');
});
$("#downarrow").click(function(){
  $('#chatbox').addClass('hidden');
});


 //MENU mobile
      // Loop through each nav item
  $('nav.navbar').children('ul.nav').children('li').each(function(indexCount){
    
    // loop through each dropdown, count children and apply a animation delay based on their index value
    $(this).children('ul.dropdown').children('li').each(function(index){
      
      // Turn the index value into a reasonable animation delay
      var delay = 0.1 + index*0.03;
      
      // Apply the animation delay
      $(this).css("animation-delay", delay + "s")     
    });
  });

//Animaciones
