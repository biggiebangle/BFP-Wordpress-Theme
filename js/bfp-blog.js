	/**
 * yith-scroll.js
 *
 * @author Your Inspiration Themes
 * @package YITH Infinite Scrolling
 * @version 1.0.0
 */

jQuery(document).ready( function($) {
    "use strict";
 
    // set options
    var infinite_scroll = {
            'nextSelector'      : 'nav.infinitescroll li.next a',
            'navSelector'       : 'nav.infinitescroll',
            'itemSelector'      : '.article',
            'contentSelector'   : '#main',
            'loader'            : '<img src="../wp-content/themes/bfp/img/loader.gif">',
            'is_shop'           : 'no'  
       };

    $(' #main' ).yit_infinitescroll( infinite_scroll );
	
	
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
	


});