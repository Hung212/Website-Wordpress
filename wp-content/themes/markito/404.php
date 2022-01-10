<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package markito
 */

get_header();
?> 
<!---404 page-->
<section class="ws-section-spacing">
  <div class="container">
      <div class="row">
          <div class="col-lg-8 offset-lg-2 text-center">
              <div class="search-error-wrapper">
                  <h1><?php echo esc_html__('404', 'markito') ?></h1>
                  <h2><?php esc_html_e( "Sorry We Can't Find That Page!", "markito" ); ?></h2>
                  <p class="home-link"><?php esc_html_e( "We are sorry, the page you have requested is not available..", "markito" ); ?></p>
                  <a href="<?php echo esc_url(home_url()); ?>" class="buy-now"><?php esc_html_e( 'Back to home page.', 'markito' ); ?></a>
              </div>
          </div>
      </div>
  </div>
</section> 
<!---404 page-->
<?php get_footer(); ?>