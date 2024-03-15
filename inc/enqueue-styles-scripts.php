<?php 

if ( ! function_exists( 'stm_enqueue_styles_scripts' ) ) {
	function stm_enqueue_styles_scripts() {
		wp_enqueue_style( 'theme-style', get_stylesheet_uri(), null, STM_THEME_VERSION, 'all' );
	}
	add_action( 'wp_enqueue_scripts', 'stm_enqueue_styles_scripts' );
}
