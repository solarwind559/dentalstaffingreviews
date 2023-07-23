<?php
/*
 * Enqueues
 */

if ( ! function_exists('otm_theme_enqueues') ) {
	function otm_theme_enqueues() {

		// Styles

		wp_register_style('swiper', get_template_directory_uri() . '/assets/css/swiper.min.css', false, '4.5.0');
		wp_enqueue_style('swiper');

		wp_register_style('main', get_template_directory_uri() . '/assets/css/main.css', false, null);
		wp_enqueue_style('main');

		// Scripts

		//wp_enqueue_script('jquery');

		wp_register_script('jquery-js', get_template_directory_uri() . '/assets/js/jquery.min.js', false, '1.12.4', true);
		wp_enqueue_script('jquery-js');

		wp_register_script('bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', false, '4.1.3', true);
		wp_enqueue_script('bootstrap-bundle');

		wp_register_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr.js', false, null, true);
		wp_enqueue_script('modernizr');

		wp_register_script('swiper', get_template_directory_uri() . '/assets/js/swiper.min.js', false, '4.5.0', true);
		wp_enqueue_script('swiper');

		wp_register_script('OTMForms', 'https://d3h66sfd9htnrp.cloudfront.net/otm-forms.min.js', false, null, true);
		wp_enqueue_script('OTMForms');

		wp_register_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js', false, null, true);
		wp_enqueue_script('scripts');

		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
	}
}
add_action('wp_enqueue_scripts', 'otm_theme_enqueues', 100);
