
		// Capture TAB to switch between the Demo page views (input/textarea)
		(function(){
			var viewTogglers = $('menu.radio input');
			
			$(document).on('keydown', function(e){
				if( e.key == 'tab' || e.keyCode == 9 ){
					var $checked = viewTogglers.filter(':checked');
					var $next = viewTogglers.eq(viewTogglers.index($checked) + 1);
					if(!$next.length){
						$next = viewTogglers.first();
					}
					$next.prop("checked", true).change();
						
					return false;
				}
			});
		})();
	
		$('section :input').val('').fancyInput()[0].focus();

		// Everything below is only for the DEMO
		function init(str){
			var input = $('section input').val('')[0],
				s = 'type something... ?'.split('').reverse(),
				len = s.length-1,
				e = $.Event('keypress');
				
				input.nextElementSibling.className = '';
			
			var	initInterval = setInterval(function(){
					if( s.length ){
						var c = s.pop();
						fancyInput.writer(c, input, len-s.length).setCaret(input);
						input.value += c;
						//e.charCode = c.charCodeAt(0);
						//input.trigger(e);
						
					}
					else clearInterval(initInterval);
			},150);
		}
		
		init();
		
		$('menu').on('click', 'button', toggleEffect);
		$('menu.radio').on('change', 'input', changeForm).find('input:first').prop('checked',true).trigger('change');
		
		// change effects
		function toggleEffect(num){
			var className = '';
				idx = $(this).index() + 1,
				$fancyInput = $('.fancyInput');

			if( idx > 1 )
				className = 'effect' + idx;

			$('#edit-data-wrapper').prop('class', className);
			$fancyInput.find(':input')[0].focus();
			
			$(this).addClass('active').siblings().removeClass('active');
		}
		
		function changeForm(e){
			// radio buttons stuff
			var page = this.value,
				highlight = $(e.delegateTarget).find('> div'),
				label = $(this.parentNode),
				marginLeft = parseInt( label.css('margin-left') , 10 ),
				xPos;
				
			highlight.css({'left':label.position().left + marginLeft, 'width':label.width() });
			
			// page change stuff
			xPos = '-' + label.index() * 50;
			$('#edit-data-wrapper').css( 'transform', 'translateX(' + xPos + '%)' );
			
			setTimeout(function(){
				$('#edit-data-wrapper').find('.' + page  + ' :input')[0].focus();
			}, 100);
		}
		
		// social sharing stuff
		setTimeout(addSocial,500);
		
		function addSocial(){
			// tweet button
			var tweeter = $('<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>');
			// facebook 'like' button
			var fbLike = $('<iframe class="fbLike" src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fdropthebit.com%2Fdemos%2Ffancy_input%2FfancyInput.html&amp;send=false&amp;layout=standard&amp;width=450&amp;show_faces=false&amp;font=arial&amp;action=like&amp;height=35&amp;colorscheme=light&amp;layout=button_count&amp;appId=2398652648"></iframe>');
			$('.social').append(fbLike, tweeter);
			
			!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="http://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");

			window.getComputedStyle(fbLike[0]).getPropertyValue('top');
			$('.social').addClass('show');
		};