(function() {
	fallback.load({

		jQuery: [
		'//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js',
		'js/vendor/jquery/dist/jquery.min.js'
		],

		"_": [
		'//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js',
		'js/vendor/underscore/underscore-min.js'
		],

		Handlebars: [
		'//cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.1/handlebars.min.js',
		'js/vendor/handlebars/handlebars.min.js'
		],

		'app.js': 'js/src/app.js'
	},{
		shim: {

			'app.js': ['jQuery']
		},
		callback: function(success, failed) {
			// console.log(success);
			// console.log(failed);
		}
	});
})();
