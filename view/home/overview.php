<div class="containerfix">
<section class="row">

	<header class="col-md-12 col-lg-12">

		<picture class="ab">
			<!-- <source media="(max-width: 640px)" srcset="assets/img/01.jpg"> -->
			<source media="(max-width: 750px)" srcset="assets/header/leaves_750.png">
			<img src="assets/header/leaves.png" alt="01" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<!-- <img src="assets/header/header_lg.png" alt="01" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> -->
		</picture>




		<div class="hidden">
			<h1> Love live! </h1>
			<h2> Experience the joy! </h2>

			<aside>
				<p>#pkp15</p>
				<p><strong>Skynet</strong></p>
			</aside>
		</div>





	<div class="headers">
		<picture>
			<!-- <source media="(max-width: 640px)" srcset="assets/img/01.jpg"> -->
			<source media="(max-width: 600px)" srcset="assets/header/header_mdsm.png">
			<source media="(max-width: 750px)" srcset="assets/header/header_md.png">
			<img src="assets/header/header_lg.png" alt="01" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		</picture>

		<picture class="birds">
					<source media="(max-width: 750px)" srcset="">

			<source media="(max-width: 780px)" srcset="assets/header/nbird_small.png">
			<img src="assets/header/nbird.png" alt="01" class="">
		</picture>

		<picture class="birdsleft">
			<source media="(max-width: 780px)" srcset="assets/header/fbirds_small.png">
			<img src="assets/header/fbird.png" alt="01" class="">
		</picture>

	</div>


	</header>

	<div class="patternAbove"></div>

</section>



<!-- <div>
    <div id="addimage">
        <h2>Add new Image</h2>

        <form method="post" action="index.php">
            <fieldset>
                <legend>add</legend>
                <div>
                    <label for="image">Image</label>
                    <input class="<?php if(!empty($errors['image'])) echo 'has-error'; ?>" type="text" id="image" name="image"/>
                    <span class="error-message<?php if(empty($errors['image'])) echo ' hidden';?>" data-for="image"><?php
                    if(empty($errors['image'])) echo 'Please enter the image';
                    else echo $errors['image'];
                    ?></span>
                </div>
                <div>
                    <label for="concert">Concert</label>
                    <input class="<?php if(!empty($errors['concert'])) echo 'has-error'; ?>" type="text" id="concert" name="concert"/>
                    <span class="error-message<?php if(empty($errors['concert'])) echo ' hidden';?>" data-for="concert"><?php
                    if(empty($errors['concert'])) echo 'Please enter the concert';
                    else echo $errors['concert'];
                    ?></span>
                </div>
                <div>
                    <input type="submit" name="action" value="Add">
                </div>
            </fieldset>
        </form>

    </div>

    <div id="todoList">

        <h2>Your Todo List</h2>

        <?php
        if (!empty($images)) {?>
           <ul>
            <?php foreach ($images as $image){ ?>
                <li class="priority<?php echo $image["concert"]?>" id="image-1123"><?php echo $image["concert"]?>
                    <img src="assets/images/<?php echo $image["image"]?>" alt="<?php echo $image["image"]?>" height="42" width="42">
                    <a class="delete" href="index.php?page=delete-image&amp;id=<?php echo $image["id"]?>">done</a>
                </li>
            <?php } ?>
           </ul>
        <?php }else{
               echo "<p> no images yet </p>";
        }?>

    </div>
</div> -->
</div>
