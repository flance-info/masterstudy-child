<?php 

if ( ! function_exists( 'stm_enqueue_styles_scripts' ) ) {
	function stm_enqueue_styles_scripts() {
		wp_enqueue_style( 'theme-style', get_stylesheet_uri(), null, STM_THEME_VERSION, 'all' );
	}
	add_action( 'wp_enqueue_scripts', 'stm_enqueue_styles_scripts' );
}

function custom_load_script_textdomain_relative_path($relative, $src) {

    // Check if the relative path contains 'languages/themes/masterstudy-lms-learning-management-system'
    if (strpos($relative, 'languages\themes\masterstudy-lms-learning-management-system') !== false) {
        // Replace 'themes' with 'plugins'
        $relative = str_replace('themes', 'plugins', $relative);
		echo 'ttt';
echo $relative;
    }
    // Apply filters and return the modified relative path.
    return apply_filters('custom_load_script_textdomain_relative_path', $relative, $src);
}

// Hook our custom function into the original filter hook 'load_script_textdomain_relative_path'.
add_filter('load_script_textdomain_relative_path', 'custom_load_script_textdomain_relative_path', 10, 2);
