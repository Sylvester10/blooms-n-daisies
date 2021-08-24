jQuery(document).ready(function ($) {
 "use strict";


	//jQuery Marquee
	/*$('.j_marquee').marquee({
	    //speed in milliseconds of the marquee
	    duration: 15000, //15secs
	    //gap in pixels between the tickers
	    gap: 50,
	    //time in milliseconds before the marquee will start animating
	    delayBeforeStart: 0,
	    //'left' or 'right'
	    direction: 'left',
	    //true or false - should the marquee be duplicated to show an effect of continuous flow
	    duplicated: false,
	    //pause the animation on hover
	    pauseOnHover: true,
	});*/


	/*$('#count-box').CountUpCircle({
		  duration: 2000,
		  opacity_anim: true,
		  step_divider: 1
	});*/


	  /*=========== Counter Up ===========*/

	 /* $('.count').counterUp({
	    delay: 10,
	    time: 1000
	  });*/


	  
  /*============= Countdown ==============*/

  $('[data-countdown]').each(function () {
    var $this = $(this),
      finalDate = $(this).data('countdown');
    $this.countdown(finalDate, function (event) {
      $this.html(event.strftime('<span class="dcare-count days"><span class="count-inner"><span class="time-count">%-D</span> <p>Days</p></span></span> <span class="dcare-count hour"><span class="count-inner"><span class="time-count">%-H</span> <p>Hours</p></span></span> <span class="dcare-count minutes"><span class="count-inner"><span class="time-count">%M</span> <p>Minutes</p></span></span> <span class="dcare-count second"><span class="count-inner"><span class="time-count">%S</span> <p>Seconds</p></span></span>'));
    });
  });
  
  
  //Comment
	$('#create_comment_form').submit(function(e) {
		e.preventDefault();
		var form_data = $(this).serialize();
		var post_id = $('#post_id').val();
		$.ajax({
			url: base_url + 'home/create_comment_ajax/' + post_id, 
			type: 'POST',
			data: form_data, 
			success: function(msg) {
				if (msg == 1) {
					$('#status_msg').html('<div class="alert alert-success text-center"> Thank you! Your comment was submitted successfully.</div>').fadeIn( 'fast' );
					$('#create_comment_form')[0].reset(); //reset form fields
					$('#captcha_code').val('');	//clear captcha field
					setTimeout(function() { 
						location.reload();
					}, 5000); 	
				} else {
					$('#status_msg').html('<div class="alert alert-danger text-center">' + msg + '</div>').fadeIn( 'fast' ).delay( 10000 ).fadeOut( 'slow' );
				}
			}
		});
	});


	
	
	//Contact Us
	$('#contact_us_form').submit(function(e) {
		e.preventDefault();
		var form_data = $(this).serialize();
		$.ajax({
			url: base_url + 'home/contact_us_ajax', 
			type: 'POST',
			data: form_data, 
			success: function(msg) {
				if (msg == 1) {
					$('#c_status_msg').html('<div class="alert alert-success text-center"> Thank you! Your message was sent successfully.</div>').fadeIn( 'fast' );
					$('#contact_us_form')[0].reset(); //reset form fields
					$('#captcha_code').val('');	//clear captcha field
				} else {
					$('#c_status_msg').html('<div class="alert alert-danger text-center">' + msg + '</div>').fadeIn( 'fast' ).delay( 30000 ).fadeOut( 'slow' );
				}
			}
		});
	});


		//Subscribe Newsletter
	$('#subscribe_newsletter_form').submit(function(e) {
		e.preventDefault();
		var form_data = $(this).serialize();
		$.ajax({
			url: base_url + 'home/subscribe_newsletter_ajax', 
			type: 'POST',
			data: form_data, 
			success: function(msg) {
				if (msg == 1) {
					$('#subscribe_status_msg').html('<div class="alert alert-success text-center"> Thank you! Your subscription was successful.</div>').fadeIn( 'fast' );
					$('#subscribe_newsletter_form')[0].reset(); //reset form fields
					//close modal after 5 secs
					setTimeout(function() { 
						$('#subscribe_status_msg').css('display', 'none'); //hide status div
					}, 5000); 	
				} else {
					$('#subscribe_status_msg').html('<div class="alert alert-danger text-center" style="background-color: #d9534f">' + msg + '</div>').fadeIn( 'fast' ).delay( 10000 ).fadeOut( 'slow' );
				}
			}
		});
	});




	//Admin login
	$('#admin_login_form').submit(function(e) {
		e.preventDefault();
		var form_data = $(this).serialize();
		var redirect_url = $('#requested_page').val();				
		$.ajax({
			url: base_url + 'login/login_ajax', 
			type: 'POST',
			data: form_data, 
			success: function(msg) {
				if (msg == 1) {
					$( '#status_msg' ).html('<div class="alert alert-success text-center"> Login successful. Redirecting to your dashboard... <p>If you are not automatically redirected, <a href="' + redirect_url + '">click here</a></p> </div>').fadeIn('fast');
					setTimeout(function() { 
						$(location).attr('href', redirect_url);
					}, 3000);					
				} else {
					$( '#status_msg' ).html('<div class="alert alert-danger text-center">' + msg + '</div>').fadeIn('fast').delay( 10000 ).fadeOut( 'slow' );	
				}
			}
		});
	});

	 //Job form
    $('#job').submit(function(e) {
        e.preventDefault();
        var form_data = $(this).serialize();
        var redirect_url = base_url + 'home/jobs'; 
        $.ajax({
            url: base_url + 'home/job_ajax', 
            type: 'POST',
            data: form_data, 
            success: function(msg) {
                if (msg == 1) {
                    $('#status_msg').html('<div class="alert alert-success text-center">Application successful! <br>We will contact you soon</div>').fadeIn( 'fast' );
                        $('#job')[0].reset(); //reset form fields
                        setTimeout(function() {
						$(location).attr('href', redirect_url);
					}, 3000);
                } else {
                    $('#status_msg').html('<div class="alert alert-danger text-center">' + msg + '</div>').fadeIn( 'fast' ).delay( 30000 ).fadeOut( 'slow' );
                }
            }
        });
    });


    	//Subscribe Newsletter
	$('#subscribe_newsletter_form').submit(function(e) {
		e.preventDefault();
		var form_data = $(this).serialize();
		$.ajax({
			url: base_url + 'home/subscribe_newsletter_ajax', 
			type: 'POST',
			data: form_data, 
			success: function(msg) {
				if (msg == 1) {
					$('#subscribe_status_msg').html('<div class="alert alert-success text-center"> Thank you! Your subscription was successful.</div>').fadeIn( 'fast' );
					$('#subscribe_newsletter_form')[0].reset(); //reset form fields
					//close modal after 5 secs
					setTimeout(function() { 
						$('#subscribe_status_msg').css('display', 'none'); //hide status div
					}, 5000); 	
				} else {
					$('#subscribe_status_msg').html('<div class="alert alert-danger text-center" style="background-color: #d9534f">' + msg + '</div>').fadeIn( 'fast' ).delay( 10000 ).fadeOut( 'slow' );
				}
			}
		});
	});
	


	

});