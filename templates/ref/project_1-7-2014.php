<?php 
// Project
include("./head.inc"); 
?>
	
<div class="project">

	<section>
		<h4>
		<?php 
		$cats = explode("|", $page->category);
		if (sizeof($cats) > 1) {
			$one = true;
		} else {
			$one = false;
		}
		
		foreach($page->category as $category) { 
			if ( $one ) {
				$one = false;
				echo "$category->title & ";	
			} else {
				echo "$category->title";
			} 
		} ?>
		</h4>		
		<div id="first" class="jThumbnailScroller">
			<div class="jTscrollerContainer">
				<div class="jTscroller">
					<?php
					$projects = $pages->get(1009); 
					$children = $projects->children;
					$thisCat = $page->category;
					$pieces = explode("|", $thisCat);
					$catLength = sizeof($pieces);
					
					for($i = 0; $i < $catLength; $i++) {
						
						$projects = $pages->get(1009); 
						$children = $projects->children;
						
						foreach($children as $child) {
							$categories = $child->category;
							if (strpos($categories, $pieces[$i]) !== false) {
								$first = true;
								foreach ( $child->project_layout as $image ) {
									if ( $first ) {
										$img = $image->project_images->first();
										$img = $img->height(100);
										echo '<a href="' . $child->url . '"><img src="' . $img->url . '"/></a>';
									}
									$first = false;
								}
							}
						} 						
					}
					echo '<a href="#"><img src="http://placehold.it/10x100/fff/fff/" /></a>';
					?>
				</div>
			</div>
			<a href="#" class="jTscrollerPrevButton"></a>
			<a href="#" class="jTscrollerNextButton"></a>
		</div>

	</section>

	<div class="single">
		<!-- <a href="/projects/" class="close"></a> -->
		<div class="image">
			<div class="royalSlider rsDefault">
			<?php
			foreach ($page->project_layout as $row) {
						
				$images = $row->project_images;
				foreach ($images as $image) {
					$img = $image->width(600); 
					echo '<img src="' . $img->url . '" alt="' . $image->description . '">';
				}
			}
			?>
			</div>
		</div>
		<div class="text">
			<h2><?php echo "$page->title"; ?></h2>
			<?php echo "$page->project_info"; ?>
		</div>
	</div>


</div>	

<?php include("./foot.inc"); ?>