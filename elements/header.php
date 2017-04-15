<?php 
	

	$business_units = get_terms('tax_business_unit');
?>

<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		
			<a class="navbar-brand" href="<?php bloginfo('url'); ?>">BM Press Manager</a>
		</div>

		<ul class="nav navbar-nav">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reports <span class="caret"></span></a>
				
				<ul class="dropdown-menu">
					<?php 
						foreach ($business_units as $business_unit) :
					?>
						<li><a href="<?php bloginfo('url'); ?>/reports/?bu=<?php echo $business_unit->slug; ?>"><?php echo $business_unit->name; ?></a></li>
					<?php
						endforeach;
					?>
				</ul>
			</li>
		</ul>

		<form class="navbar-form navbar-right">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
			
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
</nav>