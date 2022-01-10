<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package markito-x
 */

?>

   <!---Start-Footer-Section-->
   <footer class="footer-section-spacing home-footer-bg">
      <div class="container">
         <div class="row">
            <!--item-->
            <div class="col-lg-6">
               <?php 
                  if ( is_active_sidebar( 'footer-sidebar' ) ) : 
                     dynamic_sidebar( 'footer-sidebar' );
                  endif; 
               ?>
            </div>
            <!--item-->
            <div class="col-lg-6">
               <?php 
                  if ( is_active_sidebar( 'footer-sidebar-two' ) ) : 
                     dynamic_sidebar( 'footer-sidebar-two' );
                  endif; 
               ?>
            </div>
            <div class="container">
               <div class="row justify-content-center">
                  <div class="container-fluid">
                     <div class="copy-right">
                        <span class="copy-right-seprater"></span> <br> 
                        <?php esc_html_e("Proudly Powered by" ,'markito-x'); ?> 
                           <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'markito-x' ) ); ?>" target="_black">
                              <?php echo esc_html__( 'WordPress', 'markito-x' ); ?>
                           </a>
                        <span class="sep"> | </span>
                        <?php if( get_theme_mod( 'markito_Developed_By_Text_Settings' ) ) :
                                    echo esc_html(get_theme_mod( 'markito_Developed_By_Text_Settings' ));
                                 else :
                                    esc_html_e('Theme By Markito' , 'markito-x');  
                              endif;
                        ?>
                        <a href="<?php if( get_theme_mod( 'markito_Footer_developed_by_Link_Settings' ) ) :
                                 echo esc_url(get_theme_mod( "markito_Footer_developed_by_Link_Settings" ));
                              else :
                                 echo esc_url("https://weblizar.com/");  
                              endif;
                         ?>" target="_black"> 
                        <?php if( get_theme_mod( 'markito_Footer_developed_by_Link_Text_Settings' ) ) :
                                    echo esc_html(get_theme_mod( 'markito_Footer_developed_by_Link_Text_Settings' ));
                                 else :
                                    esc_html_e('weblizar' , 'markito-x');  
                              endif;
                        ?> </a>
                       <br> 
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> 
   </footer>
</div><!-- #page -->
<!--- scroll-to-top -->
<a href="#" id="btn-to-top"><i class="fas fa-arrow-up"></i></a>
<?php
get_template_part('custom','font');?>
<?php //echo $headings_font;?>
<?php wp_footer(); ?>
</body>
</html>