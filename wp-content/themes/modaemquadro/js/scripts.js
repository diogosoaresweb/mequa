// SCROLL MENU PAGINDA DE DUVIDAS E INFORMACOES
$(document).ready(function() {


var larguraTela = jQuery(window).width();
  var alturaTela = jQuery(window).height();


/*================TARGET - PLAY============*/
$('.page a.play').hover(function() {
     $(this).toggleClass('hover');
  
});

$('.page a.play').click(function() {
    //$(this).fadeOut(1300);
    //$('.page .steps .step1').show();
  
});

$('.page a.resposta').click(function() {
    $('.page a.resposta').removeClass('checked');
    $(this).addClass('checked');
  
});

/*======SEARCH HEADER=====*/

/*focus border*/
       
    $('.header .searchTop input[type=text], .subSessionBar form input[type=text]').focusin(function() {
        $(this).parent().addClass("focusBorder");
        $(this).parent().addClass("focusBorder");
        
    });
    
        
    $('.header .searchTop input[type=text], .subSessionBar form input[type=text]').focusout(function() {
        $(this).parent().removeClass("focusBorder");
        $(this).parent().removeClass("focusBorder");
    });

/*sessoes*/
jQuery('.header .searchTop li').on({
  click: function() {
    //jQuery(this).toggleClass("active");
    //jQuery('.header .searchTop').slideToggle("fast");
  },
  mouseenter: function() {
    //jQuery(this).find('.element').addClass('active');
  },  
  mouseleave: function() {
    //jQuery(this).find('.element').removeClass('active');
  }
});

       
        $('.nav .mainMenu > li.sub').click(function( e ){
          e.stopPropagation();
          $(this).find('.subNav').css({'height':'auto'});
          $(this).find('.subNav').removeClass("collapse");
          $(this).find('.subNav').toggleClass("expand");
          $(this).toggleClass("expand");
          $(this).find('.subNav').slideToggle(200);
	});

	$('.nav .mainMenu > li.sub .subNav').click(function( e ){
	  e.stopPropagation();
	});
	
	$('body, html').click(function(){
	  $('.nav .mainMenu > li.sub .subNav').animate({height:0}, 150).fadeOut(150);
          $('.nav .mainMenu > li.sub, .nav .mainMenu > li.sub .subNav').removeClass("expand");
          $('.nav .mainMenu > li.sub, .nav .mainMenu > li.sub .subNav').addClass("collapse");
          
	});
              

// MENU MOBILE
if(larguraTela < 992) {
 
	$('.headerContainer .navMobileIcon').click(function( e ){
		e.stopPropagation();
		$('.headerContainer .nav').animate({width:200}, 200);
	});
	$('.headerContainer .nav').click(function( e ){
		e.stopPropagation();
	});
	
	$('.headerContainer body, html').click(function(){
		$('.headerContainer .nav').animate({width:0}, 150);
	});

} 	



/*======SEARCH HEADER - FIM=====*/

});
