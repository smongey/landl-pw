<?php // Homepage
include("./head.inc");
?>

<div class="home">

	<a href="<?php echo $config->urls->root ?>projects/">
	<div class="royalSlider-home">
	<?php

	if (count($page->home_graphic)) {         
		foreach($page->home_graphic as $image) {             
			//$image = $image->size(118,112);                 
			echo "<img src='{$image->url}' alt='{$image->description}' />";
		}     
	}

	?>
	</div>
	</a>
	
</div>

<?php include("./foot.inc"); ?>