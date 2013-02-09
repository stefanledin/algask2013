var App = {} || App;

App.init = function () {
	this.events.toggleSearchField();
};

App.events =  {
	
	toggleSearchField: function () {
		document.querySelector('i.icon-search').addEventListener('click', function () {

			var classes, el;
			
			el = this.parentNode;
			classes = el.className;
			
			if (classes.search('closed') !== -1) {
				classes = classes.replace('closed', 'open');
			} else {
				classes = classes.replace('open', 'closed');
			}

			el.className = classes;
		});
	}

}

App.init();

