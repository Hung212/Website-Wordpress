 <style> 	
	<?php $markito_x_editor_home = absint(get_theme_mod('markito_x_show_Google_Fonts', 1));
	if(  $markito_x_editor_home ==1 ) { ?>

		/* ravi1.css for body css */
		body, input, textarea, p,a {
			font-family: <?php echo esc_attr(get_theme_mod('font_family2')); ?>!important;
		}

		/* ravi2.css for heading css */
		h1, h2, h3, h4, h5, h6 {
			font-family: <?php echo esc_attr(get_theme_mod('font_family')); ?>!important;
		}

		h1.hero-title span {
			font-family: <?php echo esc_attr(get_theme_mod('font_family')); ?>!important;
		}

		ul.navbar-nav.mr-auto.text-left .current_page_item a {
			font-family: <?php echo esc_attr(get_theme_mod('font_family')); ?>!important;
		}

		ul.navbar-nav li > a {
			font-family: <?php echo esc_attr(get_theme_mod('font_family')); ?>!important;
		}
		.site-title a{
			font-family: <?php echo esc_attr(get_theme_mod('font_family')); ?>!important;
		}
		.wp-block-latest-posts__list li a {
			font-family: <?php echo esc_attr(get_theme_mod('font_family2')); ?>!important;
		}
		.meta-tag li {
			font-family: <?php echo esc_attr(get_theme_mod('font_family2')); ?>!important;
		}
		.copy-right {
			font-family: <?php echo esc_attr(get_theme_mod('font_family2')); ?>!important;
		}

		.fab {
			font-family: 'Font Awesome 5 Brands';
		}

		.comment_submit, #comment_submit {
		font-family: <?php echo esc_attr(get_theme_mod('font_family')); ?>!important;
		}

	<?php } ?>
</style>
 