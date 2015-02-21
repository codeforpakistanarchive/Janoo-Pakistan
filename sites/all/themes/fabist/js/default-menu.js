(function ($) {
  $(document).ready(function(){
	$("#navigation #main-menu ul li").hover( function() {
      $(this).children("#navigation #main-menu ul ul").show(); 
	  $(this).children('a').addClass('active-item');
	  }, function() {
      $(this).children("#navigation #main-menu ul ul").hide(); 
	  $(this).children('a').removeClass('active-item');
	});		 
  });
})(jQuery);