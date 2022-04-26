$(document).ready(function(){
	$('.portfolio-item').height($('.portfolio-item').width());
	

	$('.navbar-nav li a' ).click(function(evt){
		evt.preventDefault();
		$('html,body').animate({
			scrollTop: $($(this).attr('href')).offset().top
		}, 1000)
	})

	$('.social i').hover(function(){
		$(this).addClass('animated swing');
	}, function(){
		$(this).removeClass('animated swing');
	});

	var theForm = document.getElementById( 'theForm' );
	new stepsForm( theForm, {
		onSubmit : function( form ) {
		// hide form
		classie.addClass( theForm.querySelector( '.simform-inner' ), 'hide' );
		var messageEl = theForm.querySelector( '.final-message' );
		messageEl.innerHTML = 'Thank you! I\'ll get back to you soon.';
		classie.addClass( messageEl, 'show' );
		}
	} );

	$(window).scroll(function(){
		// $('#go-top-button').show();

		$x=parseInt($("#home").height());
		if($(window).scrollTop() > 50){
			$('.navbar-wrapper').addClass('navbar-fixed-top');
		}
		else{
			$('.navbar-wrapper').removeClass('navbar-fixed-top');
		}
	});

	$('.responsive-slick').slick({
	  autoplay:true,
	  infinite:true,
	  autoplay:true,
	  dots: true,
	  speed: 1000,
	  dots:false,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 1,
	        infinite: true,
	        dots: true
	      }
	    },
	    {
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
	    // You can unslick at a given breakpoint now by adding:
	    // settings: "unslick"
	    // instead of a settings object
	  ]
	});


	$(function () {
		var filterList = {
			init: function () {
				$('#portfoliolist').mixItUp({
	  				selectors: {
	    			  target: '.portfolio',
	    			  filter: '.filter'	
	    		  },
	    		  load: {
	      		  filter: '.app'  
	      		}     
					});								
				
				}

			};
			// Run the show!
			filterList.init();
		});	

	$("#testimonial-slider").owlCarousel({
        items:2,
        itemsDesktop:[1199,2],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        itemsMobile:[600,1],
        pagination:false,
        navigation:true,
        navigationText:["",""],
        slideSpeed:1000,
        autoPlay:true
    });
})