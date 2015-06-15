<div class="containerfix">
	<section class="row">

		<header class="col-md-12 col-lg-12">

			<picture class="ab">
				    <source
				        data-srcset="assets/header/leaves_small.png"
				        media="(max-width: 500px)" />
				    <source
				        data-srcset="assets/header/leaves_750.png"
				        media="(max-width: 768px)" />
				    <source
				        data-srcset="assets/header/leaves.png"
						media="(min-width: 768px)" />
				    <img
				        src="assets/header/leaves.png"
				       	class="lazyload col-xs-12 col-sm-12 col-md-12 col-lg-12"
				        alt="Leaves" />
				</picture>

			<div class="headers">


				<div class="hidden">
					<h1> Love live! </h1>
					<h2> Experience the joy! </h2>

					<aside>
						<p>#pkp15</p>
						<p><strong>Skynet</strong></p>
					</aside>

				</div>

				<picture>
				    <source
				        data-srcset="assets/header/header_mdsm.png"
				        media="(max-width: 600px)" />
				    <source
				        data-srcset="assets/header/header_md.png"
				        media="(max-width: 768px)" />
				    <source
				        data-srcset="assets/header/header_lg.png"
						media="(min-width: 768px)" />
				    <img
				        src="assets/header/header_lg.png"
				       	class="lazyload col-xs-12 col-sm-12 col-md-12 col-lg-12"
				        alt="Love live & experience the joy" />
				</picture>

				<picture class="birds">
				    <source
				        data-srcset="assets/header/nbird_small.png"
				        media="(max-width: 780px)" />
				    <source
				        data-srcset="assets/header/nbird.png"
						media="(min-width: 780px)" />
				    <img
				        src="assets/header/nbird.png"
				       	class="lazyload"
				        alt="bird" />
				</picture>

				<picture class="birdsleft">
				    <source
				        data-srcset="assets/header/fbirds_small.png"
				        media="(max-width: 780px)" />
				    <source
				        data-srcset="assets/header/fbird.png"
						media="(min-width: 780px)" />
				    <img
				        src="assets/header/fbird.png"
				       	class="lazyload"
				        alt="fbirds" />
				</picture>

			</div>
		</header>
	</section>

	<section class="intro row">

		<div class="keep col-xs-12  col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">

			<article class="col-xs-12 col-sm-8 col-md-8 col-lg-8">

					<header>
						<picture class="logo">
							<img src="assets/intro/cloud.png" alt="logo" class="">
						</picture>

						<h1>Live the moment</h1>
					</header>

					<p>
					Are you one of those people who love festivals for <strong>more than</strong> just the <strong>music</strong>? Our app helps you increase the overall <strong>experience</strong>
					by adding <strong>love</strong> to every moment of your day.
					</p>

					<a href="#">

						<picture>
							<img src="assets/intro/buybutton.png" width="414" height="180" alt="Get in appstore!" class="">
						</picture>

						<picture class="flowb">
							<img src="assets/intro/bird.png" alt="tweet" class="">
						</picture>

					</a>

			</article>

			<aside class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

				<canvas width="151" height="85" id="cnvs">
					<p>No canvas support</p>
				</canvas>

				<picture >
					<img src="assets/intro/phone_large.png" alt="Live heartbeat" class=" hidden-xs">
				</picture>

			</aside>

		</div>
	</section>

	<picture class="div">
		<source
			data-srcset="assets/gallery/div_small.png"
			media="(max-width: 500px)" />
		<source
		    data-srcset="assets/gallery/div_small_lg.png"
		    media="(max-width: 768px)" />
		<source
		    data-srcset="assets/gallery/divider.png"
			media="(min-width: 768px)" />
		<img
		    src="assets/gallery/divider.png"
		  	class="lazyload col-xs-10 col-xs-offset-1 col-sm-10 col-md-10 col-lg-10"
		    alt="divider" />
	</picture>

	<section class="row gallery colored">

		<header class="hidden">
			<h1>Live smiles spread love</h1>
		</header>


		<article class="gall col-xs-12 col-sm-7 col-md-7 col-lg-7">
			<header>

				<picture>
					<source
						data-srcset="assets/gallery/header_small.png"
						media="(max-width: 500px)" />
					<source
					    data-srcset="assets/gallery/title_large.png"
						media="(min-width: 500px)" />
					<img
					    src="assets/gallery/title_large.png"
					  	class="lazyload col-xs-12 col-sm-12 col-md-12 col-lg-12"
					    alt="live smiles spread the love" />
				</picture>
			</header>

			<p>
				Snap a pic and detect the number of smiles. <br> Check out the happiest of the bunch below.
			</p>
		</article>

		<aside class="total col-xs-10 cols-xs-offset-1 col-sm-5 col-md-5 col-lg-5">
			<p class="number">
				<?php printf("%04d", $number)?>
			</p>

				<picture>
					<source
						data-srcset="assets/gallery/border.png"
						media="(max-width: 550px)" />
					<source
					    data-srcset="assets/gallery/border_large.png"
					    media="(max-width: 768px)" />
					<source
					    data-srcset="assets/gallery/total.png"
						media="(min-width: 768px)" />
					<img
					    src="assets/gallery/total.png"
					  	class="lazyload frame col-xs-8 col-xs-offset-4 col-sm-12 col-sm-offset-0  col-md-12 col-md-offset-0  col-lg-12 col-lg-offset-0 "
					    alt="smiles detected" />
				</picture>



		</aside>
	</section>

	<div class="row images colored">
		<div class="camera">
			<picture class="">
				<img src="assets/gallery/camerabird.png" alt="shoot" class="">
			</picture>
		</div>

		<div class="regbird">
			<picture class="">
				<img src="assets/gallery/regbird.png" alt="regular" class="hidden-xs">
			</picture>
		</div>

		<div class="blocks">
			<picture class="one">
				<img src="assets/gallery/blocks.jpg" alt="regular" class="hidden-xs hidden-sm hidden-md">
			</picture>

			<picture class="two">
				<img src="assets/gallery/blocks.jpg" alt="regular" class="hidden-xs hidden-sm hidden-md">
			</picture>
		</div>

		<div class="col-xs-10 col-xs-offset-1 col-sm-12 col-md-12 col-sm-offset-0 col-lg-12 col-lg-offset-0 gone">
			<?php $class = 0;
			if (!empty($images)) {?>
				<ul class="row frst">
					<?php foreach ($images as $image){ ?>


					<?php $class++; ?>
						<li class="c-<?php echo $class ?>" id="image-1123">

							<picture>
								    <source
								        data-srcset="assets/gallery/frame_large.png"
								        media="(max-width: 500px)" />
								    <source
								        data-srcset="assets/gallery/frame_large.png"
								        media="(max-width: 768px)" />
								    <source
								        data-srcset="assets/gallery/frame_medium.png"
								        media="(max-width: 960px)" />
								    <source
								        data-srcset="assets/gallery/frame.png"
										media="(min-width: 960px)" />
								    <img
								        src="assets/gallery/frame.png"
								       class="lazyload move col-xs-10 col-xs-offset-1 col-sm-5 col-md-6 col-lg-3 col-sm-offset-0  col-md-offset-0  col-lg-offset-0 "
								        alt="frames" />
								</picture>

						</li>

						<h3 class="c-<?php echo $class ?> txt col-xs-10 col-xs-offset-1 col-sm-5 col-md-6 col-lg-3 col-sm-offset-0  col-md-offset-0  col-lg-offset-0 ">   <?php echo $image['smiles']; ?> smiles</h3>
					<?php } ?>
				</ul>
				<?php }else{
				echo "<p> no images yet </p>";
			}?>
		</div>

		<div class="col-xs-10 col-xs-offset-1 col-sm-12 col-md-12 col-sm-offset-0 col-lg-12 col-lg-offset-0 measure gone">
			<?php $otherclass = 0;
				if (!empty($images)) {?>
					<ul class="row ">
						<?php foreach ($images as $image){ ?>
						<?php $otherclass++; ?>
							<li class="move k-<?php echo $otherclass ?>" id="image-1123" data="<?php echo explode(" ", $image['created'])[0] ?>" >

								<picture>
									<source
										data-srcset="uploads/small/<?php echo $image['image'] ?>"
										media="(max-width: 400px)" />
									<source
									    data-srcset="uploads/large/<?php echo $image['image'] ?>"
									    media="(max-width: 768px)" />
									<source
									    data-srcset="uploads/small/<?php echo $image['image'] ?>"
										media="(min-width: 768px)" />
									<img
									    src="uploads/small/<?php echo $image['image'] ?>"
									  	class="lazyload new move scale col-xs-10 col-xs-offset-1 col-sm-5 col-md-6 col-lg-3 col-sm-offset-0  col-md-offset-0  col-lg-offset-0 "
									    alt="image" />
								</picture>




							</li>
						<?php } ?>
					</ul>
			<?php }else{
				echo "<p> no images yet </p>";
			}?>
		</div>
	</div>

	<picture class="">
		<source media="(max-width: 500px)" srcset="assets/gallery/div_small.png">
		<source media="(max-width: 768px)" srcset="assets/gallery/div_small_lg.png">
		<source media="(min-width: 768px)" srcset="assets/gallery/divider.png">
		<img src="assets/gallery/divider.png" alt="divider" class="col-xs-10 col-xs-offset-1 col-sm-10 col-md-10 col-lg-10">
	</picture>


	<section class="video">
		<header class="hidden">
			<h1>Know more? Watch this video!</h1>
		</header>

		<article class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  ">
				<picture class="top ">
					<img src="assets/video/frame.png" alt="divider" class="click hidden-xs col-xs-10 col-xs-offset-1 col-sm-offset-1 col-sm-10 col-md-10 col-lg-10">
				</picture>

				<div class="actv">
				<video data-poster="assets/video/poster.jpg" class="col-lg-8 col-md-8 col-sm-8 col-xs-10 col-xs-offset-1 col-sm-offset-2">
				  <source data-src="assets/video/main.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' class="vidme">
				</video>
				</div>
			</div>
		</article>

		<div>
			<aside class="buy col-lg-10  col-md-10  col-sm-10  col-xs-12 col-xs-offset-0 ">
				<a href="#">
					<picture>
						<img src="assets/intro/buybutton.png" width="414" height="180" alt="Get in appstore!" class="but ">
					</picture>


				</a>
			</aside>
		</div>
	</section>

	<div class="patternAbove"></div>
</div>

<div class="last">

	<picture>
		<source
			data-srcset="assets/gallery/div_small.png"
			media="(max-width: 500px)" />
		<source
		    data-srcset="assets/gallery/div_small_lg.png"
		    media="(max-width: 768px)" />
		<source
		    data-srcset="assets/gallery/divider.png"
			media="(min-width: 768px)" />
		<img
		    src="assets/gallery/divider.png"
		  	class="lazyload col-xs-10 col-xs-offset-1 col-sm-10 col-md-10 col-lg-10"
		    alt="divider" />
	</picture>

</div>
