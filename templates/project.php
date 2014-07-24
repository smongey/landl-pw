<?php 
// Project
include("./head.inc"); 
?>
	
<div class="project">
	 <?php 
	$opts = array(
		'quality' => 100,
    	'upscaling' => true, 
    	'cropping' => 'center'
    	);

	$projects = $pages->get(1009)->children;
	$category = $page->category->first;
	$cat = 'category=' . $category;
	$reside = $projects->find($cat); 
	$out = '';
	$rCount = 0;
	foreach ($reside as $r) {
		if ($rCount == 0) { 
			$out .= "
			<div class='strip'>
			";
		} else if ($rCount % 10 == 0) { 
			$out .= "
			</div>
			<div class='strip'>
			"; 
		}

		if(
		$rCount == 1-1 || $rCount%10 == 1-1 || 
		$rCount == 2-1 || $rCount%10 == 2-1 || 
		$rCount == 5-1 || $rCount%10 == 5-1 || 
		$rCount == 8-1 || $rCount%10 == 8-1 || 
		$rCount == 9-1 || $rCount%10 == 9-1
		) {

			$first = true;
			foreach ( $r->project_layout as $image ) {
				if ( $first ) {
					$img = $image->project_images->first()->size(199, 150, $opts);
					$out .= "
					<a href='$r->url'><img class='land' src='$img->url'/></a>
					";
				}
				$first = false;
			}

		} else { 
			
			$first = true;
			foreach ( $r->project_layout as $image ) {
				if ( $first ) {
					$img = $image->project_images->first()->size(150, 199, $opts);
					$out .= "
					<a href='$r->url'><img src='$img->url'/></a>
					";
				}
				$first = false;
			}
			
		}
		$rCount++;
	}
	$out .= "
	</div>
	"; // Close the final .slide

	echo '
	<div class="heading">
		<h3>
		' . $page->category->first->title . '
		</h3>
	</div>
	<div id="gallery-1" class="royalSlider rsDefault visibleNearby">
	' . $out . '
	</div>
	';
	?>

	<div class="single">
		<!-- <a href="/projects/" class="close"></a> -->
		<div class="image">
			<div id="project" class="royalSlider rsDefault">
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