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
			$('span#open-mobile-navigation').on('click', function () {
				$('div#mobile-navigation').addClass('open');
			})	
		},

		closeMobileNav: function () {
			$('#mobile-navigation .close').on('click', function () {
				$('div#mobile-navigation').removeClass('open');
			});
		}

	};
	App.init();

}(jQuery))