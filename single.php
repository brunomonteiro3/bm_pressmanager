<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/default.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.css" />
</head>
<body>
	<div class="container">
		<h1><?php the_title(); ?></h1>

		<?php 
			while ( have_posts() ) : the_post();
				the_content(); 
			endwhile;
		?>
	</div>
</body>
</html>