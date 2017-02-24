//Add the menuOpen class to the body element when the nav button is clicked.  This is to offset the WooCommerce issue that was occuring when the add to cart button was pressed and adding .open to the body which triggered the modal menu

jQuery(document).ready(function () {
  jQuery("button[type=submit]").click(function(){
    jQuery("body").removeClass("open");
    });
});

// Notfication Banner States

jQuery(document).ready(function () {
	var bannerStatus = Cookies.get('bannerStatus');
	
	if ( bannerStatus != 'closed' ) {
    jQuery("#topInfo").removeClass("hidden-xs-up").addClass("d-flex");
    jQuery("#wrapper-navbar").addClass("pt-5");
	}

	else if ( bannerStatus === 'closed' ) {
    jQuery("#topInfo").addClass("hidden-xs-up").removeClass("d-flex");
   jQuery("#bannerPull").slideDown();
	}
});

jQuery(document).ready(function () {
  jQuery(".close").click(function(){
  	Cookies.set('bannerStatus', 'closed');
    jQuery( this ).parent().slideUp( "", function() {
    	jQuery("#topInfo").addClass("hidden-xs-up");
        });
    	jQuery("#wrapper-navbar").removeClass("pt-5").addClass("pt-0");
      jQuery("#bannerPull").removeClass("hidden-xs-up").slideDown();
    });
});

jQuery(document).ready(function () {
  jQuery("#bannerPull").click(function(){
  	Cookies.set('bannerStatus', 'open');
  	jQuery(this).slideUp("fast", function() {
      jQuery(this).addClass("hidden-xs-up")
  		jQuery("#topInfo").slideDown().removeClass("hidden-xs-up").addClass("d-flex");
    jQuery("#wrapper-navbar").addClass("pt-5");
  	});
    
    });
});