<?php /* Studio */
include("./head.inc"); 
?>

<div class="studio">
	<div class="image">
		<img src="<?php echo $page->studio_graphic->url; ?>" alt="">
	</div>
	<div class="text">
		<?php echo $page->body; ?>
	</div>
</div>

<?php include("./foot.inc"); ?>