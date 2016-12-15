<?php
	/* 
		Required 
	*/
	
	require_once locate_template('core/required/init.php');

	require_once locate_template('core/required/components.php');
	
	require_once locate_template('core/required/assets-loader.php');
	
	require_once locate_template('core/required/theme-wrapper.php');


	/* Post Types */
	require_once locate_template('core/post-types/post-type-tasks.php');

	/* Taxonomies */
	require_once locate_template('core/taxonomies/taxonomies-business-unit.php');