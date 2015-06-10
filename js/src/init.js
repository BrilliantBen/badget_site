(function() {
	fallback.load({

		jQuery: [
		'//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js',
		'js/vendor/jquery/dist/jquery.min.js'
		],

		lazy: [
		'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/1.1.3-RC1/lazysizes.min.js',
		'js/vendor/lazyload/lazysizes.min.js'
		],

		'app.js': 'js/src/app.js'
	},{
		shim: {
			lazy: ['jQuery'],
			'app.js': ['lazy']
		},
		callback: function(success, failed) {
			// console.log(success);
			// console.log(failed);
		}
	});
})();
