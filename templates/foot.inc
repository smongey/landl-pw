    </div>

    <nav>		
		<ul class="main">
			<?php 
			$projects = $pages->get("/projects/");
			$news = $pages->get("/news/");
			$sustainability = $pages->get("/sustainability/");
			$conservation = $pages->get("/conservation/");
			$contact = $pages->get("/contact/");
			
			$studio = $pages->get("/studio/");
			$people = $pages->get("/people/");
			$publications = $pages->get("/publications/");
			$awards = $pages->get("/awards/");
			
			 
			echo "<li><a href='{$projects->url}'>{$projects->title}</a></li>";
			echo "<li><a id='studio' href='#'>Studio</a></li>";
			echo "<li><a href='{$news->url}'>{$news->title}</a></li>";
			echo "<li><a href='{$sustainability->url}'>{$sustainability->title}</a></li>";
			echo "<li><a href='{$conservation->url}'>{$conservation->title}</a></li>";
			echo "<li><a href='{$contact->url}'>{$contact->title}</a></li>";
			?>
		</ul>
		<ul class="studio">
			<?php 
			echo "<li><a href='{$studio->url}'>Studio</a></li>";
			echo "<li><a href='{$people->url}'>People</a></li>";
			echo "<li><a href='{$publications->url}'>Publications</a></li>";
			echo "<li><a href='{$awards->url}'>Awards</a></li>";
			?>
		</ul>
		<ul class="social">
			<?php $home = $pages->get('/'); ?>
			<li><a href="<?php echo $home->facebook_link; ?>"></a></li>
			<li><a href="<?php echo $home->twitter_link; ?>"></a></li>
			<li><a href="<?php echo $home->vimeo_link; ?>"></a></li>
			<li><a href="<?php echo $home->linkedin_link; ?>"></a></li>
		</ul>
	</nav>

	<script src="<?php echo $config->urls->templates?>dist2/scripts/app.js"></script>    

<script>
  (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
  function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
  e=o.createElement(i);r=o.getElementsByTagName(i)[0];
  e.src='//www.google-analytics.com/analytics.js';
  r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
  ga('create','UA-52107648-1');ga('send','pageview');
</script>

  </body>
</html>
