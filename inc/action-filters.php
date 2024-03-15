<?php 

/**
 * Change STM course meta data
 */ 
if ( ! function_exists( 'stm_change_course_metas' ) ) {
	function stm_change_course_metas( $post_id )
	{
		update_post_meta( $post_id, 'course_certificate', '' );
        update_post_meta( $post_id, 'current_students', '' );
	}

	add_action( 'save_post_stm-courses', 'stm_change_course_metas' );
}

/**
 * Remove affiliate course from LMS metabox
 */ 
if ( ! function_exists( 'stm_override_lms_template' ) ) {
  function stm_override_lms_template( $path, $template ) {
    $course_builder_file = get_stylesheet_directory_uri().'/stm-lms-templates/'.$template;
    return file_exists( $course_builder_file ) ? $course_builder_file : $path;
  }

  add_filter( 'stm_lms_template_file', 'stm_override_lms_template', 10, 2 );
}

