<div class="containerfix">
	<section class="row">

		<header class="col-md-12 col-lg-12">

			<picture class="ab">
				<source media="(max-width: 500px)" srcset="assets/header/leaves_small.png">
				<source media="(max-width: 768px)" srcset="assets/header/leaves_750.png">
				<source media="(min-width: 768px)" srcset="assets/header/leaves.png">
				<img src="assets/header/leaves.png" alt="leaves" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
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
					<source media="(max-width: 600px)" srcset="assets/header/header_mdsm.png">
					<source media="(max-width: 768px)" srcset="assets/header/header_md.png">
					<source media="(min-width: 768px)" srcset="assets/header/header_lg.png">
					<img src="assets/header/header_lg.png" alt="Love live & Experience the joy" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				</picture>

				<picture class="birds">
					<source media="(max-width: 780px)" srcset="assets/header/nbird_small.png">
					<source media="(min-width: 780px)" srcset="assets/header/nbird.png">
					<img src="assets/header/nbird.png" alt="bird" class="">
				</picture>

				<picture class="birdsleft">
					<source media="(max-width: 780px)" srcset="assets/header/fbirds_small.png">
					<source media="(min-width: 780px)" srcset="assets/header/fbird.png">
					<img src="assets/header/fbird.png" alt="birds" class="">
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

				<canvas width="151" height="85" id="cnvs" style="background-image: url(uploads/<?php echo $mostRecent['file_name'] ?>)">
					<p>No canvas support</p>
				</canvas>

				<picture >
					<img src="assets/intro/phone_large.png" alt="Live heartbeat" class=" hidden-xs">
				</picture>

			</aside>
		</div>
	</section>

			<picture class="div">
				<source media="(max-width: 500px)" srcset="assets/gallery/div_small.png">
				<source media="(max-width: 768px)" srcset="assets/gallery/div_small_lg.png">
				<source media="(min-width: 768px)" srcset="assets/gallery/divider.png">
				<img src="assets/gallery/divider.png" alt="divider" class="col-xs-10 col-xs-offset-1 col-sm-12 col-md-12 col-lg-12">
			</picture>

		<section class="row gallery colored">

			<header class="hidden">
				<h1>Live smiles spread love</h1>
			</header>


			<article class="gall col-xs-12 col-sm-7 col-md-7 col-lg-7">

				<header>
					<picture class="">
						<source media="(max-width: 500px)" srcset="assets/gallery/header_small.png">
						<source media="(min-width: 500px)" srcset="assets/gallery/title_large.png">
						<!-- <source media="(max-width: 768px)" srcset="assets/gallery/divider.png"> -->
						<img src="assets/gallery/title_large.png" alt="Live smiles spread love" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					</picture>
				</header>

				<p>
					Snap a pic and detect the number of smiles. <br> Check out the happiest of the bunch below.
				</p>



			</article>

			<aside class="total col-xs-10 cols-xs-offset-1 col-sm-5 col-md-5 col-lg-5">
				<p class="number">
				<?php printf("%04d", $number)
				?>
				</p>


					<picture class="">
						<!-- <source media="(max-width: 500px)" srcset="assets/gallery/divider.png"> -->
						<source media="(max-width: 550px)" srcset="assets/gallery/border.png">
						<source media="(max-width: 768px)" srcset="assets/gallery/frame_large.png">
						<source media="(min-width: 768px)" srcset="assets/gallery/total.png">
						<img src="assets/gallery/total.png" alt="smiles" class="frame col-xs-8 col-xs-offset-4 col-sm-12 col-sm-offset-0  col-md-12 col-md-offset-0  col-lg-12 col-lg-offset-0 ">
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
			    <?php
			    	$class = 0;
			        if (!empty($images)) {?>
			    	    <ul class="row frst">
				            <?php foreach ($images as $image){ ?>

				            <?php $class++; ?>
				                <li class="c-<?php echo $class ?>" id="image-1123">

									<picture class="">
										<!-- <source media="(max-width: 500px)" srcset="assets/gallery/div_small.png"> -->
										<!-- <source media="(max-width: 768px)" srcset="assets/gallery/div_small_lg.png"> -->
										<img src="assets/gallery/frame.png" alt="divider" class="move col-xs-10 col-xs-offset-1 col-sm-5 col-md-6 col-lg-3 col-sm-offset-0  col-md-offset-0  col-lg-offset-0 ">

									</picture>

				                </li>
								<!-- <li>test</li> -->
								<!-- dwddww -->
								<h3 class="c-<?php echo $class ?> txt col-xs-10 col-xs-offset-1 col-sm-5 col-md-6 col-lg-3 col-sm-offset-0  col-md-offset-0  col-lg-offset-0 ">dddd</h3>
				            <?php } ?>
			        	</ul>
			        <?php }else{

			            echo "<p> no images yet </p>";

			        }?>

			    </div>

			    <div class="col-xs-10 col-xs-offset-1 col-sm-12 col-md-12 col-sm-offset-0 col-lg-12 col-lg-offset-0 measure gone">
			    	<?php
			    		$otherclass = 0;
				        if (!empty($images)) {?>
				           <ul class="row ">
				            <?php foreach ($images as $image){ ?>
				              <?php $otherclass++; ?>
				           		<li class="move k-<?php echo $otherclass ?>" id="image-1123">

									<picture class="">
										<!-- <source media="(max-width: 500px)" srcset="assets/gallery/div_small.png"> -->
										<!-- <source media="(max-width: 768px)" srcset="assets/gallery/div_small_lg.png"> -->
										<img src="uploads/test.jpg" alt="divider" class="move scale col-xs-10 col-xs-offset-1 col-sm-5 col-md-6 col-lg-3 col-sm-offset-0  col-md-offset-0  col-lg-offset-0 ">
									</picture>


				                </li>

				            <?php } ?>
			           </ul>
			       	<?php }else{
		               echo "<p> no images yet </p>";
			        }?>
			    </div>
			</div>
			<div class="patternAbove"></div>
		</div>




	</div>
</div>
<!-- col-xs-8 col-xs-offset-2 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 col-sm-6 col-md-6  -->
