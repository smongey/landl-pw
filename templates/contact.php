<?php /* Contact */
include("./head.inc"); 
?>

<div class="contact">
	<div class="image">
		<img src="<?php echo $page->contact_graphic->url; ?>" alt="">
	</div>
	<div class="text">
		<p><?php echo $page->title; ?></p>

		<p><?php echo $page->body; ?></p>
	</div>
</div>

<?php include("./foot.inc"); ?>