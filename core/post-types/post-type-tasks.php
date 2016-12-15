<?php
	function cpt_tasks() {
	    $labels = array(
			'name'               => _x( 'Tasks', 'post type general name' ),
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'task' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 7,
			'menu_icon' 		 => 'dashicons-businessman',
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);

	    register_post_type( 'cpt_tasks', $args );
	}

	add_action( 'init', 'cpt_tasks' );