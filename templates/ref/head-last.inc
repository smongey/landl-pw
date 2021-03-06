<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Lawrence &amp; Long Architects</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="stylesheet" href="<?php echo $config->urls->templates?>/dist/styles/569cf661.styles.css">
</head>
<body id="home">


	<!-- HEADER -->
	<section id="intro">
		<div class="swipe" id="slider">
			<div class="swipe-wrap">

					<?php 

					$home = $pages->get("/");
					foreach($home->slider as $slide) { 

						$image = $slide->slide_image->first();

						echo "<div class='bg' style='background:url({$image->url}) no-repeat; background-size: cover;'>";
						echo "<a href='{$slide->slide_link}'><h2>{$slide->slide_title}</h2></a>";
						echo "</div>";
						
					} ?>
			</div>
		</div>
		<div id="logo">
			<a class="logo" href="<?php echo $config->urls->root; ?>">Lawrence and Long Architects</a>
		</div>
		<div id="next" onclick="mySwipe.next()"></div>
		<div id="prev" onclick="mySwipe.prev()"></div>
	</section>

	<section id="nav">
		<nav>
			<ul><li><a class="logoToggle hidden" href="#page">Lawrence &amp; Long Architects</a></li></ul>
			<ul id="first">
				<?php 
				$projects = $pages->get("/projects/"); 
				$practice = $pages->get("/practice/"); 
				$news = $pages->get("/news/"); 
					echo "<li><a href='{$projects->url}'>{$projects->title}</a></li>";
					echo "<li><a href='{$practice->url}'>{$practice->title}</a></li>";
					echo "<li><a href='{$news->url}'>{$news->title}</a></li>";
				?>
			</ul>
			<ul id="second">
				<?php $categories = $pages->get(1014); 
				$children = $categories->children;
				echo "<li><a href='#' data-filter='*'>Everything</a></li>";
				foreach($children as $child) {
				
					$lowered = strtolower($child->title);
					$lowered = str_replace(' ', '', $lowered);
					echo "<li><a href='#' data-filter='.". $lowered ."'>{$child->title}</a></li>";
				} ?>
			</ul>
		</nav>
	</section>
		
	<section id="page">