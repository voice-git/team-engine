<footer>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/slick/slick.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/js/script.js?0824"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/js/jquery.inview.min.js"></script>
<script>
$(function(){
	$(".inview,.inviewsp").on("inview", function (event, isInView) {
		if (isInView) {
			$(this).stop().addClass("is-show");
		}
	});
});
</script>
<?php if(is_page("contact")) : ?>
<script>
	document.addEventListener( 'wpcf7mailsent', function( event ) {
		location = '<?php echo esc_url( home_url( '/' ) ); ?>contactcomp/';
	}, false );
</script>
<?php elseif(is_page("entry")) : ?>
<script>
	document.addEventListener( 'wpcf7mailsent', function( event ) {
		location = '<?php echo esc_url( home_url( '/' ) ); ?>entrycomp/';
	}, false );
</script>
<?php endif; ?>
<?php wp_footer(); ?>
</div>
</body>
</html>