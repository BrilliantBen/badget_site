(function() {
	fallback.load({

		jQuery: [
		'//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js',
		'js/vendor/jquery/dist/jquery.min.js'
		],

		'lazy': [
		'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/1.1.3-RC1/lazysizes.min.js',
		'js/vendor/lazyload/lazysizes.min.js'
		],

		'video': [
		'//cdnjs.cloudflare.com/ajax/libs/jquery.lazyloadxt/1.0.0/jquery.lazyloadxt.min.js',
		'js/vendor/lazyxt/lazyxt.js'
		],

		'extra': [
		'https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyloadxt/1.0.5/jquery.lazyloadxt.extra.min.js',
		'js/vendor/lazyxt/lazyxtextra.js'
		],

		'app.js': 'js/src/app.js'
	},{
		shim: {
			'lazy': ['jQuery'],
			'video': ['jQuery'],
			'extra': ['jQuery'],
			'app.js': ['jQuery']
		},
		callback: function(success, failed) {
			// console.log(success);
			// console.log(failed);
		}
	});
})();
