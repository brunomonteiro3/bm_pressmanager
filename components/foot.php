	<script>
		var THEME_URL = "<?php echo bloginfo( "template_url" ); ?>";
	</script>

	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/js/bootstrap.min.js"></script>
	<script>
		$('.dropdown-toggle').dropdown();
	</script>
<?php
	/*
		* Default scripts of the webpage
	*/
	global $js;

	get_scripts();
	
	wp_footer();
?>
</body>
</html>