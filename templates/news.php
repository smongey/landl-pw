<?php 
// News
include("./head.inc"); 
?>

<?php

	$posts = $pages->find('template=entry, limit=1, sort=-sort'); 
	foreach($posts as $post) { 
		
?>
<div class="news">
	<div class="image">
		<img src='<?php echo $post->news_image->size(600,500)->url ?>' alt='<?php echo $post->news_image->description ?>' />
	</div>
	<div class="text">
		<h2><?php echo $post->title ?></h2>

		<p><?php echo $post->news_excerpt ?></p>

	</div>
</div>
	
	<?php 
	if ($post->prev->url !== '') { ?>
	<a class="arrow prevlink" href="<?php echo $post->prev->url ?>"></a>
	<?php } ?>
	
	<?php if ($post->next->url !== '') { ?>
	<a class="arrow nextlink" href="<?php echo $post->next->url ?>"></a>
	<?php } ?>
<?php } ?>


<?php include("./foot.inc"); ?>