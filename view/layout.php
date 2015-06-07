<!DOCTYPE html>
<html>
    <head>
 <meta charset="UTF-8">
	<title>Love Live!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="icon" href="data:;base64,iVBORw0KGgo=">
	<link href="css/css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/screen.css"/>
	<script src="js/vendor/picturefill/picturefill.min.js" async></script>

		<script>
		WebFontConfig = {
			custom: {
				families: ['eveleth', 'bitter', 'bitterbold', 'brush'],
				urls: ['fonts/eveleth/eveleth.css', 'fonts/bitter/bitter.css', 'fonts/brush/brush.css'],
			}
		};
		(function() {
			var wf = document.createElement('script');
			wf.src = '//ajax.googleapis.com/ajax/libs/webfont/1.5.6/webfont.js';
			// wf.src = 'js/vendor/webfontloader.min.js';
			wf.type = 'text/javascript';
			wf.async = 'true';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(wf, s);
		})();
	</script>
    </head>
    <body>

        <div class="container-fluid">
            <?php echo $content; ?>
        </div>

  	<script src="js/vendor/fallback/fallback.min.js"></script>
	<script src="js/src/init.js"></script>

    </body>
</html>
