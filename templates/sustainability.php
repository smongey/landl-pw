<?php /* Sustainability */
include("./head.inc"); 
?>

<div class="sustainability">
	<div class="image">
		<div id="sustainability">
		<?php

		if (count($page->sustainability_graphic)) {         
			foreach($page->sustainability_graphic as $image) {       
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