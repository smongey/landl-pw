<?php /* Awards */
include("./head.inc"); 
?>

<div class="awards">
	<?php 
	$out = '';
	$rCount = 0;
	foreach($page->awards as $award) {
		if ($rCount == 0) { 
			$out .= "
			<div class='strip'>
			";
		} else if ($rCount % 3 == 0) { 
			$out .= "
			</div>
			<div class='strip'>
			"; 
		}

		$out .= "
				<div class='person'>
					<img src='{$award->award_image->url}'>
					<h2>{$award->award_year}<br/>{$award->award_title}</h4>
					<p>{$award->award_info}<p>
				</div>
			";

		$rCount++;
	}
	$out .= "
	</div>
	";

	echo '
		
			<div id="people" class="publications royalSlider rsDefault visibleNearby">
			' . $out . '
			</div>
		
	';
	?>	
</div>


<?php include("./foot.inc"); ?>