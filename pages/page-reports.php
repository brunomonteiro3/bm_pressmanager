<?php
	/* Template Name: Reports */
?>

<div class="container">
	<h1>Reports</h1>

	

	<div class="panel panel-default">


		<div class="panel-heading">
			By Month
		</div>

		<?php 
			$args = array(
				'posts_per_page' => -1,
				'post_type' => 'cpt_tasks',
				'tax_business_unit' => $_GET['bu'],
				'date_query' => array(
					array(
						'year'  => 2016,
						'month' => 12
					),
				),
			);

			$tasks = new WP_Query( $args );
		
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
	</div>
</div>