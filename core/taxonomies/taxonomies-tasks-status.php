<?php
	/*
	**
	Create custom taxonomies to custom post type 'cpt_tasks'
	**
	*/
	function create_tax_tasks_status() {

		// Add new taxonomy, NOT hierarchical (like tags)
		$labels = array(
			'name'	=> _x( 'Task status', 'taxonomy general name' ),
		);

		$args = array(
			'with_front'			=> true,
			'hierarchical'          => true,
			'labels'                => $labels,
			'show_ui'               => true,
			'show_admin_column'     => true,
			'update_count_callback' => '_update_post_term_count',
			'query_var'             => true,
			'sort' 					=> false,
			'show_tagcloud' 		=> false
		);

		register_taxonomy('tax_tasks_status', array('cpt_tasks'), $args );
	}

	add_action('init', 'create_tax_tasks_status', 0);