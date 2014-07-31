<?php /* Studio */
include("./head.inc"); 
?>

<div class="studio">
	<div class="image">
		<div id="sustainability">
		<?php

		if (count($page->studio_graphic)) {         
			foreach($page->studio_graphic as $image) {       
				$img = $image->size(600, 500);      
				echo "<img src='{$img->url}' alt='{$image->description}' />";
			}     
		}

		?>
		</div>
	</div>
	<div class="text">
		<?php echo $page->body; ?>
	</div>
</div>

<?php include("./foot.inc"); ?>