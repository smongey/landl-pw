<?php 
// Entry
include("./head.inc"); 
?>



<div class="news">
	<div class="image">
		<img src="<?php echo $page->news_image->size(600, 500)->url ?>" alt="<?php echo $main->description ?>">
	</div>
	<div class="text">
		<h2><?php echo $page->title ?></h2>

		<p><?php echo $page->news_excerpt ?></p>

	</div>
</div>
	
	<?php 
	if ($page->prev->url !== '') { ?>
	<a class="arrow prevlink" href="<?php echo $page->prev->url ?>"></a>
	<?php } ?>
	
	<?php if ($page->next->url !== '') { ?>
	<a class="arrow nextlink" href="<?php echo $page->next->url ?>"></a>
	<?php } ?>

<?php include("./foot.inc"); ?>