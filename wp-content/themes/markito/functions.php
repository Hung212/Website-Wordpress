<?php
	/**
		* Markito functions and definitions
		*
		* @link https://developer.wordpress.org/themes/basics/theme-functions/
		*
		* @package Markito
	*/

	/**
	 * Initialize Theme.
	 */
	require get_template_directory() . '/inc/theme-setup.php';

	/**
	 * Theme Enqueue script And style.
	 */
	require get_template_directory() . '/inc/enqueue-script-style.php';

	/**
	 * Theme Sidebar.
	 */
	require get_template_directory() . '/inc/widgets-sidebar.php';

	/**
	 * Implement the Custom Header feature.
	 */
	require get_template_directory() . '/inc/custom-header.php';

	/**
	 * Custom template tags for this theme.
	 */
	require get_template_directory() . '/inc/template-tags.php';

	/**
	 * Functions which enhance the theme by hooking into WordPress.
	 */
	require get_template_directory() . '/inc/template-functions.php';

	/**
	 * Customizer additions.
	 */
	require get_template_directory() . '/inc/customizer.php';

	/**
	 * Customizer additions For Theme Social Accouunt details.
	 */
	require get_template_directory() . '/inc/customizer-social-section.php';

	/**
	 * Customizer additions For Theme Footer Section.
	 */
	require get_template_directory() . '/inc/customizer-footer.php';

	/**
	 * Customizer additions For Theme Site logo.
	 */
	require get_template_directory() . '/inc/customizer-Site-logo.php';

	/**
	 * Home Banner Customizer Additions.
	 */
	require get_template_directory() . '/inc/customizer-banner.php';

	/**
	 * TGM Plugin activation..
	*/
	require_once get_template_directory(). '/inc/class-tgm-plugin-activation.php';

	/**
	 * Install Plugins File.
	*/
	require_once get_template_directory(). '/inc/Install-Plugins.php';

	/**
	 * Theme Navigation / Menu Call Back Function File.
	*/
	require_once get_template_directory(). '/inc/navigation-function.php';

	/**
	 * Theme Markito Option Page File.
	*/
	require_once get_template_directory(). '/inc/markito_theme_option_page.php';

	/*****
		* Adds starter content to highlight the theme on fresh sites.
		* This is done conditionally to avoid loading the starter content on every
		* page load, as it is a one-off operation only needed once in the customizer.
	*****/
	if ( is_customize_preview() ) {
		require get_template_directory() . '/starter-content/starter-content.php';
		add_theme_support( 'starter-content', markito_get_starter_content() );
	}
















