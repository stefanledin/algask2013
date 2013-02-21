(function ($) {
	
	var App = {} || App;

	App.init = function () {
		this.events.toggleSearchField();
		this.events.openMobileNav();
	};

	App.events =  {
		
		toggleSearchField: function () {
			$('i.icon-search').on('click', function () {
				$(this).parent().toggleClass('closed', 'open');
			});
		},

		openMobileNav: function () {
			document.getElementById('open-mobile-navigation').addEventListener('click', function () {
				var menu = document.getElementById('mobile-navigation');
				
				menu.classList.add('open');
			});
		}

	}

	App.init();

}(jQuery))