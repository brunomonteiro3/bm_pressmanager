	<script>
		var THEME_URL = "<?php echo bloginfo( "template_url" ); ?>";
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