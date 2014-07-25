<?php /* Contact */
include("./head.inc"); 
?>

<div class="contact">
	<div class="image">
		<div id="sustainability">
		<?php

		if (count($page->contact_graphic)) {         
			foreach($page->contact_graphic as $image) {       
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