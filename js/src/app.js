(function() {

	Number.prototype.map = function ( in_min , in_max , out_min , out_max ) {
		return ( this - in_min ) * ( out_max - out_min ) / ( in_max - in_min ) + out_min;
	};

	$.get("http://localhost/badget_site/api/pulse")
		.done(function( respond ) {
	})

	.success( function ( respond ) {
		pulse(respond);


	})

	.fail ( function ( respond ) {
		console.log("fail");
	});


	function pulse(respond) {


		var heartbeat = respond.maxPulse;
		var variable = 0;


		var snelheid = heartbeat.map( 0 , 150 , 1.1 , 1.5 ) ;
		variable = heartbeat.map( 0 , 240 , 0 , 0.4 ) ;

		// Get canvas
		var canvas = document.getElementById("cnvs");

		// Check for support.
		if (canvas.getContext) {
			var ctx = 	canvas.getContext("2d");
			ctx.strokeStyle = '#000000';
			ctx.lineWidth = 2;
			var x = 0,
			y = 56;
		    var check = 0;
		    loop();
		}

		function loop(){

			ctx.beginPath();
			ctx.moveTo(x, y);
			x += snelheid;
			y = 30 * Math.sin(variable * x) + 50;
			ctx.lineTo(x, y);
			ctx.stroke();
			requestAnimationFrame(loop);

	        // Call function when path is almost near end.
	        if(x>= 146){
	        	if(check === 0){
	        		clearIt();
	        		check++;
	        	}
	        	else{
	        		check = 1;
	        	}
	        }

			// Reset X at end of canvas.
			if(x>=151){
				x = 0;
			}
		}

		var z = 0,
		q = 40;

		function clearIt(){

			z += snelheid;
			q = 50 * Math.sin(variable * z) + 50;

			ctx.clearRect(z-6.5, q-6.5, 17, 17);
			requestAnimationFrame(clearIt);

			if(z>=151){
				z = 0;
			}
		}
	}


	$($('.click')[0]).click(function(e) {
		e.preventDefault();
		if($("video").get(0).paused){
			$("video").get(0).play();

		}
		else{
			$("video").get(0).pause();

		}

	});

		$($('video')[0]).click(function(e) {
		e.preventDefault();
		if($("video").get(0).paused){
			$("video").get(0).play();

		}
		else{
			$("video").get(0).pause();

		}
	});

	$('video').show().trigger("play").bind('ended', function () {
    	this.currentTime = 0;
	});

})();


