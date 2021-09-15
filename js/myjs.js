$(function () {

    'use strict';
	
	

  // smoothly scroll to element 
    
    $('.bar a').click(function(e){
        
        e.preventDefault(); 
        
      $('html , body').animate({
          
       scrollTop: $('#' + $(this).data('scroll')).offset().top
	  
		  
      },1000); 
        
    }); 
    
    
    
    // add active class on navbar anb remove class from siblings
    
    $('.bar a').click(function () {
        
      $(this).addClass('active-bar').parent().siblings().find('a').removeClass('active-bar'); 
        
  });   
    
 	
	
	$(window).scroll(function(){
		     
        $('.block').each(function(){
            
            if ($(window).scrollTop() > $(this).offset().top - 5){   
                
                var blockID = $(this).attr('id'); 
                
                $('.bar a').removeClass('active-bar');
                
                $('.bar a[data-scroll="' + blockID + '"]').addClass('active-bar'); 
                
            }
            
            
        }); 
		
		
		
		  var scrollToTop = $('.scroll-to-top'); 
        
        if ($(window).scrollTop() > 600 ) {
            
            
            if (scrollToTop.is(':hidden')){
                
                scrollToTop.fadeIn(400); 
                
            }
            
        }else{
            
            
            scrollToTop.fadeOut(400);
                       
        }
		
		
		      
        
    }); // end window 
	
	
	  // click on scroll to top to go up 
    
    
   $('.scroll-to-top').click(function (event) {
       
       event.preventDefault();
        
        
      $('html , body').animate({
          
       scrollTop: 0 
          
          
          
      },1000); 
       
       
       
   }); 
	
		

	$('[placeholder]').focus(function(){

		$(this).attr('data-text', $(this).attr('placeholder'));

		$(this).attr('placeholder', '');

	}).blur(function(){

		$(this).attr('placeholder',$(this).attr('data-text'));

	});// this = [placeholder]

	
//navbar 
	
	
	    $(".dropdown-nav").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );
	

	// slider 

	
 $('.skitter-large').skitter({ // n2dra mn mok3a al mktba nshofa kza option 

    dots:false, // w hna yl9a al dots 
	 
    navigation : true, // tsh9la al 2shom 

    theme : "square"        // w ho al shkla al slider      

 });


    

	// move carousel 

	
	$('.carousel').carousel({

         interval: false,

		 pause: null

       });

	$(".carousel").on("touchstart", function(event){

        var xClick = event.originalEvent.touches[0].pageX;

    $(this).one("touchmove", function(event){

        var xMove = event.originalEvent.touches[0].pageX;

        if( Math.floor(xClick - xMove) > 5 ){

            $(this).carousel('next');

        }

        else if( Math.floor(xClick - xMove) < -5 ){

            $(this).carousel('prev');

        }

    });

    $(".carousel").on("touchend", function(){

            $(this).off("touchmove");

    });

});



  }); 

	


	

        