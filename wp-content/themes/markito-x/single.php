<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package markito-x
 */

get_header();
?>
      <?php get_template_part( "breadcrumb" ); ?>
      <!---Start-Blog-Detail-section-->
      <section class="ws-section-spacing" id="primary">
         <div class="container">
            <div class="row">
               <?php 
               $project_cpt_service_Font_Icon_Value= get_post_meta( $post->ID, 'markito_x_sidebar_layout', true );
            if (  $project_cpt_service_Font_Icon_Value === "left-sidebar") :  ?>
               <div class="col-lg-4">
                  <?php get_sidebar(); ?>
               </div>
               <div class="col-lg-8">
                  <div class="blog-detail">
                     <?php 
                        while ( have_posts() ) :
                           the_post();

                           get_template_part( 'template-parts/content', 'single' );

                           the_post_navigation(
                              array(
                                 'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'markito-x' ) . '</span> <span class="nav-title">%title</span>',
                                 'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'markito-x' ) . '</span> <span class="nav-title">%title</span>',
                              )
                           );
                        endwhile; // End of the loop.
                     ?>
                     <!-- CommentS Show Start Here-->
                     <div class="blog-comment">
                        <?php if( get_comments_number() ) : ?>
                           <h4> <?php esc_html_e('See Viewers Comment :' , 'markito-x'); ?> </h4>
                        <?php endif; ?>
                        <?php 
                           // If comments are open or we have at least one comment, load up the comment template.
                           if ( comments_open() || get_comments_number() ) : 
                              comments_template();
                           endif;
                        ?> 
                     </div> 
                     <!-- CommentS Show End Here-->
                     </div>
                  </div>
               </div>
            <?php endif;?>

              

              <?php if (  $project_cpt_service_Font_Icon_Value === "right-sidebar") : ?>
            <div class="col-lg-8">
                  <div class="blog-detail">

                     <?php 
                        while ( have_posts() ) :
                           the_post();

                           get_template_part( 'template-parts/content', 'single' );

                           the_post_navigation(
                              array(
                                 'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'markito-x' ) . '</span> <span class="nav-title">%title</span>',
                                 'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'markito-x' ) . '</span> <span class="nav-title">%title</span>',
                              )
                           );

                        endwhile; // End of the loop.
                     ?>
                        <!-- CommentS Show Start Here-->
                        <div class="blog-comment">
                        <?php if( get_comments_number() ) : ?>
                              <h4> <?php esc_html_e('See Viewers Comment :' , 'markito-x'); ?> </h4>
                           <?php endif; ?>
                           <?php 
                              // If comments are open or we have at least one comment, load up the comment template.
                              if ( comments_open() || get_comments_number() ) : ?>
                                 <?php comments_template();
                             endif;
                           ?> 
                        </div> 
                        <!-- CommentS Show End Here-->
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <?php get_sidebar(); ?>
               </div>
               <?php endif;?>


             <?php if (  $project_cpt_service_Font_Icon_Value == null) : ?>
            <div class="col-lg-8">
                  <div class="blog-detail">

                     <?php 
                        while ( have_posts() ) :
                           the_post();

                           get_template_part( 'template-parts/content', 'single' );

                           the_post_navigation(
                              array(
                                 'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'markito-x' ) . '</span> <span class="nav-title">%title</span>',
                                 'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'markito-x' ) . '</span> <span class="nav-title">%title</span>',
                              )
                           );

                        endwhile; // End of the loop.
                     ?>
                        <!-- CommentS Show Start Here-->
                        <div class="blog-comment">
                        <?php if( get_comments_number() ) : ?>
                              <h4> <?php esc_html_e('See Viewers Comment :' , 'markito-x'); ?> </h4>
                           <?php endif; ?>
                           <?php 
                              // If comments are open or we have at least one comment, load up the comment template.
                              if ( comments_open() || get_comments_number() ) : ?>
                                 <?php comments_template();
                             endif;
                           ?> 
                        </div> 
                        <!-- CommentS Show End Here-->
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <?php get_sidebar(); ?>
               </div>
               <?php endif;?>

                

                <?php if (  $project_cpt_service_Font_Icon_Value === "no-sidebar") : ?>
            <div class="col-lg-12">
                  <div class="blog-detail">

                     <?php 
                        while ( have_posts() ) :
                           the_post();

                           get_template_part( 'template-parts/content', 'single' );

                           the_post_navigation(
                              array(
                                 'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'markito-x' ) . '</span> <span class="nav-title">%title</span>',
                                 'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'markito-x' ) . '</span> <span class="nav-title">%title</span>',
                              )
                           );

                        endwhile; // End of the loop.
                     ?>
                        <!-- CommentS Show Start Here-->
                        <div class="blog-comment">
                        <?php if( get_comments_number() ) : ?>
                              <h4> <?php esc_html_e('See Viewers Comment :' , 'markito-x'); ?> </h4>
                           <?php endif; ?>
                           <?php 
                              // If comments are open or we have at least one comment, load up the comment template.
                              if ( comments_open() || get_comments_number() ) : ?>
                                 <?php comments_template();
                             endif;
                           ?> 
                        </div> 
                        <!-- CommentS Show End Here-->
                     </div>
                  </div>
               </div>
               
               <?php endif;?>

            </div>
         </div>
      </section>
      <!---End-Shop-section-->
<?php get_footer();