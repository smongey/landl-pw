<?php // Homepage
include("./head.inc");
?>

    <div class="projects">

	<div class="heading">
		<h3>Residential</h3>
	</div>

	<?php 
	$opts = array(
		'quality' => 100,
    	'upscaling' => true, 
    	'cropping' => 'center'
    	);

	$projects = $pages->get(1009)->children;
	$reside = $projects->find('category=1015'); 
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
	<div id="gallery-1" class="royalSlider rsDefault visibleNearby">
	' . $out . '
	</div>
	';
	?>

	<div class="heading">
		<h3>Conservation</h3>
	</div>
	<?php 
	$projects = $pages->get(1009)->children;
	$conserve = $projects->find('category=1018'); 
	$out = '';
	$cCount = 0;
	foreach ($conserve as $c) {
		if ($cCount == 0) { 
			$out .= "
			<div class='strip'>
			";
		} else if ($cCount % 10 == 0) { 
			$out .= "
			</div>
			<div class='strip'>
			"; 
		}

		if(
		$cCount == 2-1 || $cCount%10 == 2-1 || 
		$cCount == 5-1 || $cCount%10 == 5-1 || 
		$cCount == 6-1 || $cCount%10 == 6-1 || 
		$cCount == 8-1 || $cCount%10 == 8-1 || 
		$cCount == 10-1 || $cCount%10 == 10-1
		) {

			$first = true;
			foreach ( $c->project_layout as $image ) {
				if ( $first ) {
					$img = $image->project_images->first()->size(200, 150, $opts);
					$out .= "
					<a href='$c->url'><img class='land' src='$img->url'/></a>
					";
				}
				$first = false;
			}

		} else { 
			
			$first = true;
			foreach ( $c->project_layout as $image ) {
				if ( $first ) {
					$img = $image->project_images->first()->size(150, 200, $opts);
					$out .= "
					<a href='$c->url'><img src='$img->url'/></a>
					";
				}
				$first = false;
			}
			
		}
		$cCount++;
	}
	$out .= "
	</div>
	"; // Close the final .slide

	echo '
	<div id="gallery-2" class="royalSlider rsDefault visibleNearby">
	' . $out . '
	</div>
	';
	?>

	<div class="heading">
		<h3>Commercial</h3>
	</div>
	<?php 
	$projects = $pages->get(1009)->children;
	$conserve = $projects->find('category=1017'); 
	$out = '';
	$comCount = 0;
	foreach ($conserve as $c) {
		if ($comCount == 0) { 
			$out .= "
			<div class='strip'>
			";
		} else if ($comCount % 10 == 0) { 
			$out .= "
			</div>
			<div class='strip'>
			"; 
		}

		if(
		$comCount == 1-1 || $comCount%10 == 1-1 || 
		$comCount == 2-1 || $comCount%10 == 2-1 || 
		$comCount == 3-1 || $comCount%10 == 3-1 || 
		$comCount == 7-1 || $comCount%10 == 7-1 || 
		$comCount == 9-1 || $comCount%10 == 9-1
		) {

			$first = true;
			foreach ( $c->project_layout as $image ) {
				if ( $first ) {
					$img = $image->project_images->first()->size(200, 150, $opts);
					$out .= "
					<a href='$c->url'><img class='land' src='$img->url'/></a>
					";
				}
				$first = false;
			}

		} else { 
			
			$first = true;
			foreach ( $c->project_layout as $image ) {
				if ( $first ) {
					$img = $image->project_images->first()->size(150, 200, $opts);
					$out .= "
					<a href='$c->url'><img src='$img->url'/></a>
					";
				}
				$first = false;
			}
			
		}
		$comCount++;
	}
	$out .= "
	</div>
	"; // Close the final .slide

	echo '
	<div id="gallery-3" class="royalSlider rsDefault visibleNearby">
	' . $out . '
	</div>
	';
	?>

	<div class="heading">
		<h3>Public Building</h3>
	</div>
	<?php 
	$projects = $pages->get(1009)->children;
	$conserve = $projects->find('category=1019|1020'); 
	$out = '';
	$pCount = 0;
	foreach ($conserve as $c) {
		if ($pCount == 0) { 
			$out .= "
			<div class='strip'>
			";
		} else if ($pCount % 10 == 0) { 
			$out .= "
			</div>
			<div class='strip'>
			"; 
		}

		if(
		$pCount == 3-1 || $pCount%10 == 3-1 || 
		$pCount == 4-1 || $pCount%10 == 4-1 || 
		$pCount == 5-1 || $pCount%10 == 5-1 || 
		$pCount == 8-1 || $pCount%10 == 8-1 || 
		$pCount == 9-1 || $pCount%10 == 9-1
		) {

			$first = true;
			foreach ( $c->project_layout as $image ) {
				if ( $first ) {
					$img = $image->project_images->first()->size(200, 150, $opts);
					$out .= "
					<a href='$c->url'><img class='land' src='$img->url'/></a>
					";
				}
				$first = false;
			}

		} else { 
			
			$first = true;
			foreach ( $c->project_layout as $image ) {
				if ( $first ) {
					$img = $image->project_images->first()->size(150, 200, $opts);
					$out .= "
					<a href='$c->url'><img src='$img->url'/></a>
					";
				}
				$first = false;
			}
			
		}
		$pCount++;
	}
	$out .= "
	</div>
	"; // Close the final .slide

	echo '
	<div id="gallery-4" class="royalSlider rsDefault visibleNearby">
	' . $out . '
	</div>
	';
	?>


</div>

<?php include("./foot.inc"); ?>