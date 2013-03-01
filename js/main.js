(function ($) {
	
	var App = {
		
		init: function () {
			this.toggleSearchField();
			this.openMobileNav();
			this.closeMobileNav();
		},

		toggleSearchField: function () {
			$('i.icon-search').on('click', function () {
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
		}

	};
	App.init();

}(jQuery));