<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package markito-x
 */

get_header(); 
    get_template_part( "breadcrumb" ); ?>

	<?php if( is_front_page() ) : ?>
		<section id="primary">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
					<?php
					while ( have_posts() ) :
						the_post(); 
						get_template_part('template-parts/content', 'page'); ?>
						<div class="blog-comment">
							<?php 
								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
							?>
						</div>
						<?php
					endwhile; // End of the loop. 
					?>
				</div>
			</div>
		</section> 
	<?php endif; ?> 

    <?php if( !is_front_page() ) : ?>
    <?php $project_cpt_service_Font_Icon_Value = get_post_meta( $post->ID, 'markito_x_sidebar_layout', true ); ?>
    <section id="primary" class="ws-section-spacing">
    	<div class="container"> 
        <div class="row">
        	<?php if ( class_exists( 'WooCommerce' ) ) : ?>
				<?php if (is_cart()) {
					$project_cpt_service_Font_Icon_Value = "no-sidebar";
				}?>
				
				<?php if (is_checkout()) {
					$project_cpt_service_Font_Icon_Value = "no-sidebar";
				}?>

				<?php if (is_account_page()) {
					$project_cpt_service_Font_Icon_Value = "no-sidebar";
				}?>
            <?php endif;?>

        	<?php if ( $project_cpt_service_Font_Icon_Value === "left-sidebar") : ?>
        	<div class="col-lg-4">
        		<?php get_sidebar(); ?>
        	</div>
        	<div class="col-lg-8">
				<?php
				while ( have_posts() ) :
					the_post(); 

					get_template_part('template-parts/content', 'page'); ?>
					<div class="blog-comment">
						<?php 
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						?>
					</div>
					<?php
				endwhile; // End of the loop.
			endif; 
			?>

        	<?php if (  $project_cpt_service_Font_Icon_Value === "right-sidebar") : ?>
				<div class="col-lg-8">
					<?php
					while ( have_posts() ) :
						the_post(); 

						get_template_part('template-parts/content', 'page'); ?>
						<div class="blog-comment">
							<?php 
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						?></div>
						<?php

					endwhile; // End of the loop.
					?>
				</div>
				<div class="col-lg-4">
					<?php get_sidebar(); ?>
				</div>
        	<?php endif; ?>

            <?php 
			if (  $project_cpt_service_Font_Icon_Value == null) : ?>
				<div class="col-lg-8">
					<?php
					while ( have_posts() ) :
						the_post(); 

						get_template_part('template-parts/content', 'page'); ?>
						<div class="blog-comment">
							<?php 
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						?></div>
						<?php
					endwhile; // End of the loop.
					?>
				</div>
				<div class="col-lg-4">
					<?php get_sidebar(); ?>
				</div>
        	<?php endif;  ?>

        	<?php if ( $project_cpt_service_Font_Icon_Value === "no-sidebar") : ?>
				<div class="col-lg-12">
					<?php
					while ( have_posts() ) :
						the_post(); 

						get_template_part('template-parts/content', 'page'); ?>
						<div class="blog-comment">
							<?php 
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						?></div>
						<?php
					endwhile; // End of the loop.
					?>
				</div>
        	<?php endif; ?>
			
	    </div>
   </section>    
   <?php endif; ?>

<?php get_footer(); ?>
