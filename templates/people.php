<?php /* People */
include("./head.inc"); 
?>


<div class="people" style="position: fixed; width:100%; display: block; background: url(<?php echo $page->people_bg->url; ?>) 0 0 repeat; display: block; height:100%; overflow: auto;">
	<?php 
	$out = '';
	$rCount = 0;
	foreach ($page->people as $person) {
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
					<p>{$person->person_name}</p>
					{$person->person_info}
				</div>
			";

		$rCount++;
	}
	$out .= "
	</div>
	";

	echo '
		<div id="people" class="royalSlider rsDefault visibleNearby">
		' . $out . '
		</div>
	';
	?>
</div>

<?php include("./foot.inc"); ?>