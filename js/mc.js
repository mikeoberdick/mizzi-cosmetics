//Add the menuOpen class to the body element when the nav button is clicked.  This is to offset the WooCommerce issue that was occuring when the add to cart button was pressed and adding .open to the body which triggered the modal menu

jQuery(document).ready(function () {
  jQuery("button[type=submit]").click(function(){
    jQuery("body").removeClass("open");
    });
});