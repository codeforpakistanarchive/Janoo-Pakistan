/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {
// To understand behaviors, see https://drupal.org/node/756722#behaviors
Drupal.behaviors.my_custom_behavior = {
  attach: function(context, settings) {
    // Place your code here.
  }
};
})(jQuery, Drupal, this, this.document);
(function ($) {
  $(document).ready(function(){
	$("#search-box span.icon").click(function() {
	   $("#search-box #search-form").toggle();
	   $("#search-box #search-form input.form-text").focus();
	 });						 						 
	$( ".nav-toggles" ).click(function() {
  	$("#navigation").toggle()
	});
	$("#navigation ul li a.active").each(function(index){
	  if(index == 0){
	    var text_val = $(this).html();
	    $("a.nav-toggles").html(text_val);
	  }
	});
    var count_images = 0;
	$('#header-slide .slides img').each(function(index){
     count_images = count_images + 1;
	});
    setInterval(function () {
	  var already_active = $('#header-slide').hasClass("active");
	  if(already_active == false){
	  var increament_val = 0;
	  $('#header-slide .slides img').each(function(index){
		if(increament_val == 0){
		  var is_active = $(this).hasClass('active');
		  if(is_active == true){
		    $(this).removeClass('active');
			$('#header-slide .dots span').removeClass("active");
		    index = index + 1;
			var check_id = parseInt($(this).attr('id'));
			if(count_images-1 == check_id){
				index = 0;
			}
		    $('#header-slide .slides img.slider-'+index).addClass("active");
			$('#header-slide .dots span.slider-'+index).addClass("active");
			increament_val = 1;
		  }
		}
	  });
	  }
     },3000);
	 $('#header-slide .dots span').click(function(){
	   var has_active = $(this).hasClass("active");
	   if(has_active == false){
	     var parent_class = $(this).attr("class");
	       $('#header-slide .slides img').removeClass('active');
		   $('#header-slide .dots span').removeClass("active");
		
	       $('#header-slide .slides img.'+parent_class).addClass('active');
		   $('#header-slide .dots span.'+parent_class).addClass("active");
		   $('#header-slide').addClass("active");
	       setTimeout(function(){
		     $('#header-slide').removeClass("active");			  
	       },3000);
	   }      
	  });
$( ".view-portfolio.view-display-id-page_4 img" ).hover(
function() {
var width = parseInt($(this).css("width"));
var height = parseInt($(this).css("height"));
var id_get = $( this ).parent().parent().attr("id");
$(".view-portfolio.view-display-id-page_4 .views-fluidgrid-item #"+id_get+" .info").css("width", width+"px");
$(".view-portfolio.view-display-id-page_4 .views-fluidgrid-item #"+id_get+" .info").css("height", height+"px");
height = height +5;
$(".view-portfolio.view-display-id-page_4 .views-fluidgrid-item #"+id_get+" .info").css("margin-top", "-"+height+"px");
$(".view-portfolio.view-display-id-page_4 .views-fluidgrid-item #"+id_get+" .info").show();
}, function() {
	var id_get = $( this ).parent().parent().attr("id");
$(".view-portfolio.view-display-id-page_4 .views-fluidgrid-item #"+id_get+" .info").hide();
}
);
 $(function() {
$( "#tabs" ).tabs();
});
  $(function() {
$( "#accordion" ).accordion();
});
   $(function() {
$( "#dialog" ).dialog();
});
 $(function() {
$( "#menu-list" ).menu();
});
$( ".view-portfolio.view-display-id-page_4 .views-fluidgrid-item .info" ).hover(
function() {
$(this).show();
}, function() {
$(this).hide();
}
);

/* RETURN TO TOP */
	$(window).scroll(function () {
      if ($(this).scrollTop() >= 150) {
        $('#toTop').fadeIn();
        } else {
        $('#toTop').fadeOut();
       }
	});
	$('#toTop a').click(function(){
      $('html, body').animate({scrollTop:0}, 300);
	  return false;
	});
	$("#icon").click(function() {
	   $("#search-box .search-form").toggle();
	   $("#search-box .search-form input.form-text").focus();
	 });

    /*  Image slide */

	$( ".view-theme-image").hover(
	  function() {
        $(this).children(".views-field-nothing").children().children().show('slide', {direction: 'left'}, 300);
	  }, function() {
        $(".view-theme-image .views-field-nothing #detail").hide('slide', {direction: 'left'}, 10);
	  }
	);
    /* Newsletter Field text*/
	$("#block-simplenews-12 .form-item-mail input").attr("placeholder" , "Enter Your E-mail Address");
 }); 
})(jQuery);
(function($) {
Drupal.behaviors.myBehavior = {
  attach: function (context, settings) {
  $('#isotope-options ul').prepend("<li><a class='filterbutton allfilter'  data-option-value='*' href='#filter'><span>All</span></a></li>");
  }
};
})(jQuery);