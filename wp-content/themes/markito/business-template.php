<?php // Template Name: Home Page ?>
<?php get_header(); 
	get_template_part('home', 'banner'); 
    get_template_part( 'WooCommerce', 'Sider' ); 
    get_template_part('home', 'blog'); 
get_footer(); 