<?php 
// Entry
include("./head.inc"); 
?>



<div class="news">
	<div class="image">
		<?php $main = $page->news_image->first ?>
		<img src="<?php echo $main->url ?>" alt="">
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