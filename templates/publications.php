<?php /* Publications */
include("./head.inc"); 
?>

<div class="publications">
	<?php 
	$out = '';
	$rCount = 0;
	foreach($page->publications as $press) {
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
					<img src='{$press->press_image->url}'>
					<h2>{$press->press_date}<br/>{$press->press_publication}</h4>
					<p>{$press->press_info}<p>
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