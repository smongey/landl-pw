<?php 
// Entry
include("./head.inc"); 
?>



<div class="news">
	<div class="image">
		<?php $main = $page->news_image->first(); ?>
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


<!--
		<div class="news">
			
			<div id="container">

				<div class="full">

					<?php 

					$name = $page->news_author->name;
					$u = $users->get($name);
					$mainprofile = $u->person_photo;
					$mainprofile = $mainprofile->size(100,100);

					$main = $page->news_image->first();
					$main = $main->size(1000,500);

					?>

					<div class="image">
						<h2><?php echo "{$page->title}"; ?></h2>
						<img src="<?php echo "{$main->url}"; ?>" alt=''>
					</div>
					<div class="text">
						<div class="profile">
							<img src="<?php echo "{$mainprofile->url}" ?>" alt="">
							<p>Published on <span><?php echo date("j M Y", $page->created); ?></span> by <span><?php echo "{$page->news_author->name}"; ?></span></p>
						</div>
						<div class="intro">
							<?php echo "{$page->news_content}"; ?>
						</div>
					</div>
				</div>
			</div> 
					
		</div>
-->

<?php include("./foot.inc"); ?>