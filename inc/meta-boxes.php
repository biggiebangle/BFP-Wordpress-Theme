<?php
/**
 * Initialize the custom Meta Boxes. 
 */
add_action( 'admin_init', 'custom_meta_boxes' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types in theme-options.php.
 *
 * @return    void
 * @since     2.3.0
 */
function custom_meta_boxes() {
  
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */
  $protect_meta_box = array(
    'id'          => 'protect_meta_box',
    'title'       => __( 'Protect Meta Box', 'bfp-theme' ),
    'desc'        => '',
    'pages'       => array( 'page' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => __( 'Conditions', 'bfp-theme' ),
        'id'          => 'demo_conditions',
        'type'        => 'tab'
      ),
      array(
        'label'       => __( 'Show Gallery', 'bfp-theme' ),
        'id'          => 'demo_show_gallery',
        'type'        => 'on-off',
        'desc'        => sprintf( __( 'Shows the Gallery when set to %s.', 'bfp-theme' ), '<code>on</code>' ),
        'std'         => 'off'
      ),
      array(
        'label'       => '',
        'id'          => 'demo_textblock',
        'type'        => 'textblock',
        'desc'        => __( 'Congratulations, you created a gallery!', 'bfp-theme' ),
        'operator'    => 'and',
        'condition'   => 'demo_show_gallery:is(on),demo_gallery:not()'
      ),
      array(
        'label'       => __( 'Gallery', 'bfp-theme' ),
        'id'          => 'demo_gallery',
        'type'        => 'gallery',
        'desc'        => sprintf( __( 'This is a Gallery option type. It displays when %s.', 'bfp-theme' ), '<code>demo_show_gallery:is(on)</code>' ),
        'condition'   => 'demo_show_gallery:is(on)'
      ),
      array(
        'label'       => __( 'More Options', 'bfp-theme' ),
        'id'          => 'demo_more_options',
        'type'        => 'tab'
      ),
      array(
        'label'       => __( 'Protect Text', 'bfp-theme' ),
        'id'          => 'protect_text',
        'type'        => 'text',
        'desc'        => __( 'This is a demo Text field.', 'bfp-theme' )
      ),
      array(
        'label'       => __( 'Textarea', 'bfp-theme' ),
        'id'          => 'demo_textarea',
        'type'        => 'textarea',
        'desc'        => __( 'This is a demo Textarea field.', 'bfp-theme' )
      )
    )
  );
  
    $rescue_meta_box = array(
    'id'          => 'rescue_meta_box',
    'title'       => __( 'Rescue Meta Box', 'bfp-theme' ),
    'desc'        => '',
    'pages'       => array( 'page' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => __( 'Conditions', 'bfp-theme' ),
        'id'          => 'rescue_conditions',
        'type'        => 'tab'
      ),
      array(
        'label'       => __( 'Show Gallery', 'bfp-theme' ),
        'id'          => 'rescue_show_gallery',
        'type'        => 'on-off',
        'desc'        => sprintf( __( 'Shows the Gallery when set to %s.', 'bfp-theme' ), '<code>on</code>' ),
        'std'         => 'off'
      ),
      array(
        'label'       => '',
        'id'          => 'rescue_textblock',
        'type'        => 'textblock',
        'desc'        => __( 'Congratulations, you created a gallery!', 'bfp-theme' ),
        'operator'    => 'and',
        'condition'   => 'rescue_show_gallery:is(on),rescue_gallery:not()'
      ),
      array(
        'label'       => __( 'Gallery', 'bfp-theme' ),
        'id'          => 'rescue_gallery',
        'type'        => 'gallery',
        'desc'        => sprintf( __( 'This is a Gallery option type. It displays when %s.', 'bfp-theme' ), '<code>rescue_show_gallery:is(on)</code>' ),
        'condition'   => 'rescue_show_gallery:is(on)'
      ),
      array(
        'label'       => __( 'More Options', 'bfp-theme' ),
        'id'          => 'rescue_more_options',
        'type'        => 'tab'
      ),
      array(
        'label'       => __( 'Rescue Text', 'bfp-theme' ),
        'id'          => 'rescue_text',
        'type'        => 'text',
        'desc'        => __( 'This is a demo Text field.', 'bfp-theme' )
      ),
      array(
        'label'       => __( 'Textarea', 'bfp-theme' ),
        'id'          => 'rescue_textarea',
        'type'        => 'textarea',
        'desc'        => __( 'This is a demo Textarea field.', 'bfp-theme' )
      )
    )
  );
  
  /**
   * Register our meta boxes using the 
   * ot_register_meta_box() function.
   */
  //if ( function_exists( 'ot_register_meta_box' ) )
  

		//ot_register_meta_box( $protect_meta_box );
   		//ot_register_meta_box( $rescue_meta_box );
	


}