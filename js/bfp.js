var $ = jQuery.noConflict();

$(document).ready(function() {	

	/*$('body').delay(2500).fadeIn(1500, function() {

	});*/

	var form = $('#signup-form');
    var formMessages = $('#signup-messages');
	var wholeForm = $('#home-page-signup');
	//var formData = $(form).serialize();
	
	$(form).submit(function(event) {
    	// Stop the browser from submitting the form.
		//console.log("Prevented default");
		event.preventDefault();
		var formData = $(form).serialize();
		console.log ($(form).attr('action'));
		console.log (formData);
    	
		
    	$.ajax({
			type: 'GET',
			url: $(form).attr('action'),
			crossDomain:true,
			dataType:'jsonp',
			data: formData
			})
			.done(function(response) {
			// Make sure that the formMessages div has the 'success' class.
			console.log("done");
			console.log("----");
			console.log (response);
			
			$(wholeForm).removeClass('has-error');
			$(wholeForm).addClass('has-success');
		
			// Set the message text.
			$(formMessages).text(response.msg);
		
		
			// Clear the form.
			$('#email').val('');
			$(form).fadeOut();
			
			})
			.fail(function(data) {
						
			// Make sure that the formMessages div has the 'error' class.
			console.log("failed");
			console.log("------");
			console.log("data");
			console.log("------");
			console.log (data);
			console.log("data status");
			console.log("------");
			console.log (data.statusText);
			console.log("data message");
			console.log("------");
			console.log (data.msg);
			console.log("data code");
			console.log("------");
			console.log (data.code);
			
			
						
			if (data.statusText == "success") {
				$(formMessages).text('Thank you for signing up!');
				console.log ("actually We are all good!");
				$(wholeForm).removeClass('has-error');
				$(wholeForm).addClass('has-success');
				// Clear the form.
				$('#email').val('');
				$(form).fadeOut();
			}
			 else {
				 $(wholeForm).removeClass('has-success');
				$(wholeForm).addClass('has-error');
				$(formMessages).text('Oops! An error occured and your message could not be sent.');
			}
		});
	});
	
	//Waypoints plus Harris Konstantourakis	
	function scrollInit( items, trigger ) {
		  items.each( function() {
			var animationElement = $(this),
			
				anAnimationClass = animationElement.attr('data-animation'),
				anAnimationDelay = animationElement.attr('data-animation-delay');
			  
				animationElement.css({
				  '-webkit-animation-delay':  anAnimationDelay,
				  '-moz-animation-delay':     anAnimationDelay,
				  'animation-delay':          anAnimationDelay
				});
			
				var animationTrigger = ( trigger ) ? trigger : animationElement;
				
				animationTrigger.waypoint(function() {
				  animationElement.addClass('animated').addClass(anAnimationClass);
				  },{
					  triggerOnce: true,
					  offset: '90%'
				});
		  });
		}
		
		
	scrollInit( $(' #home-page-latest img, #home-page-latest .lead, #home-page-latest .btn' ) );

	//Include swipe functionality for ipad by Justin Lazanowski

	$("#myCarousel").swiperight(function() {  
		  $(this).carousel('prev');  
			});  
	   $("#myCarousel").swipeleft(function() {  
		  $(this).carousel('next');  
   });  

	
	var sticky_navigation = function(){
		var winheight = $(window).height();
		var winwidth = $(window).width();
		var scroll_top = $(window).scrollTop();
		var nagivation_height = $('#bfp-navbar-wrapper').height();
	
		var stick_nav = ($('#home-page-signup').offset().top - 90);
		var drop_down_yamm = ($('#home-page-signup').offset().top - 300);
		
		
		if( winwidth > 744	){
	
			if (scroll_top > stick_nav ) {
				$('#bfp-navbar-wrapper').addClass('stick');
										
			} else {
			
				$('#bfp-navbar-wrapper').removeClass('stick');
							
			}
			
			if (scroll_top > drop_down_yamm ) {
				
				 $('#navbar').removeClass('dropup');				
							
			} else {
			
				$('#navbar').addClass('dropup');			
			}
		}
		
	};
 
	
	if ($("#bfp-navbar-wrapper")[0]){
		 sticky_navigation();
   
	} else {
   
	}
	 
	$(window).scroll(function() {		
		if ($("#bfp-navbar-wrapper")[0]){
		 	sticky_navigation();
			
		} else {
		
		}     
		 
	 });
	 
	 $(window).resize(function() {
		 
		if ($("#bfp-navbar-wrapper")[0]){
		 	sticky_navigation();
		
		} else {
		
		}         
		 
	 });
	 
});