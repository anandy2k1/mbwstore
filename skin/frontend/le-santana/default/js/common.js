// JavaScript Document
jQuery(document).ready(function(){
	jQuery("[rel=tooltip]").tooltip();
	jQuery("#back-top").hide();
	
		jQuery('#back-top a').click(function () {
			jQuery('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
		jQuery('.menuBox').click(function() {
		if (jQuery('#menuInnner').is(":hidden"))
		{
		jQuery('#menuInnner').slideDown("fast");
		} else {
		jQuery('#menuInnner').slideUp("fast");
		}
		return false;
		});
		

	});
	
	jQuery(window).scroll(function () {
			if (jQuery(this).scrollTop() > 100) {
				jQuery('#back-top').fadeIn();
			} else {
				jQuery('#back-top').fadeOut();
			}
			
		});
	
		
	