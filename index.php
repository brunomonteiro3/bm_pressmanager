<div class="container">
	<?php 
		//echo "<pre>";
		$business_units = get_terms('tax_business_unit');
		//var_dump($business_units);
	?>

	
	<div class="row">
		<?php
			foreach ($business_units as $business_unit) :

				$args = array (
					'post_type'	=> array( 'cpt_tasks' ),
					'posts_per_page' => 10,
					'tax_business_unit' => $business_unit->slug
				);

				$tasks = new WP_Query( $args );

				if ( $tasks->have_posts() ) :
		?>
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<?php echo $business_unit->name; ?> <span class="label label-default pull-right"><?php echo $business_unit->count; ?> tasks</span>
					</div>

					<table class="table">
						<thead>
							<tr>
								<th>Date</th>
								<th>Task name</th>
								<th>Status</th>
								<th>&nbsp;</th>
							</tr>
						</thead>

						<tbody>
							<?php
								while ( $tasks->have_posts() ) :
									$tasks->the_post();
							?>
								<tr>
									<td>
										<?php the_time(); ?>
									</td>

									<td>
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</td>

									<td>
										Status
									</td>

									<td>
										<a href="" class="btn btn-default btn-sm">Details</a>
									</td>
								</tr>
							<?php 
								endwhile;
							?>
						</tbody>
					</table>
				</div>
			</div>
			<?php
				endif;
			endforeach;
		?>
	</div>		
</div>