<?php /* Conservation */
include("./head.inc"); 
?>

<div class="conservation">
	<div class="image">
		<div id="sustainability">
		<?php

		if (count($page->conservation_graphic)) {         
			foreach($page->conservation_graphic as $image) {       
				$img = $image->size(600, 500);      
				echo "<img src='{$img->url}' alt='{$image->description}' />";
			}     
		}

		?>
		</div>
	</div>
	<div class="text">
		<p><?php echo $page->title; ?></p>

		<p><?php echo $page->body; ?></p>
	</div>
</div>

<?php include("./foot.inc"); ?>