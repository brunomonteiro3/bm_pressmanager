<?php
	the_component('components/head');
	the_component('elements/header');

	echo $args['content'];

	the_component('components/foot');
?>