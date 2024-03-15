<?php 
	add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
	function theme_enqueue_styles() {

		wp_enqueue_style( 'theme-style', get_stylesheet_uri(), null, STM_THEME_VERSION, 'all' );

		
	}

    add_action( 'save_post_stm-courses', function ( $post_id ) {
        update_post_meta( $post_id, 'course_certificate', '' );
        update_post_meta( $post_id, 'current_students', '' );
    });