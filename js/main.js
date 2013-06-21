(function ($) {
	
	var App = {
		
		init: function () {
			this.toggleSearchField();
			this.openMobileNav();
			this.closeMobileNav();
			this.bugFixes();
			this.algaTipset();
		},

		toggleSearchField: function () {
			$('.genericon-search').on('click', function () {
				$(this).parent().toggleClass('closed', 'open');
			});
		},

		openMobileNav: function () {
			$('div#open-mobile-navigation').on('click', function () {
				$('nav#mobile-navigation').slideToggle('slow');
			});
		},

		closeMobileNav: function () {
			$('#mobile-navigation .close').on('click', function () {
				$('div#mobile-navigation').removeClass('open');
			});
		},

		bugFixes: function () {
			// Fix för attachment-diven som envisas med att lägga på inline style
			$('.wp-caption').removeAttr('style');	
		},

		algaTipset: function () {
			if ($('body').hasClass('page-id-2878')) {
				var $table = $('table#algatipset').find('tbody'),
					output = '';
				$.getJSON('http://87.238.58.178/algatipset/public/topten?callback=?', function (data) {
					
					for (var i = 0; i < data.length; i++) {
						var order = i + 1;
						output += '<tr><td>'+order+'</td><td>'+data[i].name+'</td><td>'+data[i].ratt+'</td></tr>';
					};

					$table.html(output);

				});
			}
		}

	};
	App.init();

}(jQuery));