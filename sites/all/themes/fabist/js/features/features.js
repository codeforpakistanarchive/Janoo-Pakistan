(function ($) {
/*tabs*/		 
 $(function() {
 $( "#h-tabs" ).tabs();
 });	
 $(function() {
  $( "#m-tabs" ).tabs({
  event: "mouseover"
  });
  });
 $(function() {
 $( "#v-tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
 $( "#v-tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
 });
 
})(jQuery);