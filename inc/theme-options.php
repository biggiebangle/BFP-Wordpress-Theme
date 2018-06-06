<?php
/**
 * Initialize the custom Theme Options.
 */
add_action( 'init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 *
 * @return    void
 * @since     2.3.0
 */
function custom_theme_options() {

  /* OptionTree is not loaded yet, or this is not an admin request */
  if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() )
    return false;

  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( ot_settings_id(), array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'content'       => array( 
        array(
          'id'        => 'option_types_help',
          'title'     => __( 'Option Types', 'bfp-theme' ),
          'content'   => '<p>' . __( 'Help content goes here!', 'bfp-theme' ) . '</p>'
        )
      ),
      'sidebar'       => '<p>' . __( 'Sidebar content goes here!', 'bfp-theme' ) . '</p>'
    ),
    'sections'        => array( 
	
	  array(
		  'title'   => 'Carousel Settings',
		  'id'      => 'carousel_settings'
	  ),
	  array(
		  'title'   => 'BFP Summary',
		  'id'      => 'bfp_summary'
	  ), 
	  array(      
		  'title'   => 'Make a Difference',
		  'id'      => 'action_settings'
	  ),   					
	  array(
		  'title'   => 'Highlights',
		  'id'      => 'highlights_settings'
	  )

    ),
    'settings'        => array( 
	
		//==================================================================
		// CAROUSEL SETTINGS SECTION STARTS ================================
		//==================================================================
		
		array(
			'id'          => 'bfp_welcome',
			'label'       => 'Welcome to the BFP homepage',
			'desc'        => '<h1>Welcome to the BFP homepage settings page.</h1>
			<p>Please update the current home page here. Each section is a tab on the left.</p> <p>This tab includes the carousel. There are three slides.</p>',
			'std'         => '',
			'type'        => 'textblock',
			'section'     => 'carousel_settings',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => ''
		),
		array(
			'id'          => 'slide1_title',
			'label'       => __( 'First Slide Title', 'bfp-theme' ),
			'desc'        => __( 'Please add the title of the first slide.', 'bfp-theme' ),
			'std'         => '',
			'type'        => 'text',
			'section'     => 'carousel_settings',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		),
      	array(
			'id'          => 'slide1_textarea',
			'label'       => __( 'First Slide Textarea', 'bfp-theme' ),
			'desc'        => sprintf( __( 'The Textarea option type is a large string value used for custom code or text in the theme and has a WYSIWYG editor that can be filtered to change the how it is displayed. For example, you can filter %s, %s, %s, and %s.', 'bfp-theme' ), '<code>wpautop</code>', '<code>media_buttons</code>', '<code>tinymce</code>', '<code>quicktags</code>' ),
			'std'         => '',
			'type'        => 'textarea',
			'section'     => 'carousel_settings',
			'rows'        => '15',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		  ),
		array(
			'id'          => 'slide1_link',
			'label'       => __( 'First Slide URL Link', 'bfp-theme' ),
			'desc'        => __( 'Please add the URL address to which the slide links. This could be a page within the wordpress site or anywhere else', 'bfp-theme' ),
			'std'         => '',
			'type'        => 'text',
			'section'     => 'carousel_settings',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		),
	
		  	array(
			'id'          => 'slide1_link_title',
			'label'       => __( 'First Slide Link Title', 'bfp-theme' ),
			'desc'        => __( 'Please add the title of the link button.', 'bfp-theme' ),
			'std'         => '',
			'type'        => 'text',
			'section'     => 'carousel_settings',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		),
			array(
			'id'          => 'slide2_title',
			'label'       => __( 'Second Slide Title', 'bfp-theme' ),
			'desc'        => __( 'Please add the title of the second slide.', 'bfp-theme' ),
			'std'         => '',
			'type'        => 'text',
			'section'     => 'carousel_settings',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		),
      	array(
			'id'          => 'slide2_textarea',
			'label'       => __( 'Second Slide Textarea', 'bfp-theme' ),
			'desc'        => sprintf( __( 'The Textarea option type is a large string value used for custom code or text in the theme and has a WYSIWYG editor that can be filtered to change the how it is displayed. For example, you can filter %s, %s, %s, and %s.', 'bfp-theme' ), '<code>wpautop</code>', '<code>media_buttons</code>', '<code>tinymce</code>', '<code>quicktags</code>' ),
			'std'         => '',
			'type'        => 'textarea',
			'section'     => 'carousel_settings',
			'rows'        => '15',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		  ),
		array(
			'id'          => 'slide2_link',
			'label'       => __( 'Second Slide URL Link', 'bfp-theme' ),
			'desc'        => __( 'Please add the URL address to which the slide links. This could be a page within the wordpress site or anywhere else.', 'bfp-theme' ),
			'std'         => '',
			'type'        => 'text',
			'section'     => 'carousel_settings',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		),
		  
		  array(
			'id'          => 'slide2_link_title',
			'label'       => __( 'Second Slide Link Title', 'bfp-theme' ),
			'desc'        => __( 'Please add the title of the link button.', 'bfp-theme' ),
			'std'         => '',
			'type'        => 'text',
			'section'     => 'carousel_settings',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		),
		
			array(
			'id'          => 'slide3_title',
			'label'       => __( 'Third Slide Title', 'bfp-theme' ),
			'desc'        => __( 'Please add the title of the second slide.', 'bfp-theme' ),
			'std'         => '',
			'type'        => 'text',
			'section'     => 'carousel_settings',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		),
      	array(
			'id'          => 'slide3_textarea',
			'label'       => __( 'Third Slide Textarea', 'bfp-theme' ),
			'desc'        => sprintf( __( 'The Textarea option type is a large string value used for custom code or text in the theme and has a WYSIWYG editor that can be filtered to change the how it is displayed. For example, you can filter %s, %s, %s, and %s.', 'bfp-theme' ), '<code>wpautop</code>', '<code>media_buttons</code>', '<code>tinymce</code>', '<code>quicktags</code>' ),
			'std'         => '',
			'type'        => 'textarea',
			'section'     => 'carousel_settings',
			'rows'        => '15',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		  ),
		array(
			'id'          => 'slide3_link',
			'label'       => __( 'Third Slide URL Link', 'bfp-theme' ),
			'desc'        => __( 'Please add the URL address to which the slide links. This could be a page within the wordpress site or anywhere else.', 'bfp-theme' ),
			'std'         => '',
			'type'        => 'text',
			'section'     => 'carousel_settings',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		),
	
		  array(
			'id'          => 'slide3_link_title',
			'label'       => __( 'Third Slide Link Title', 'bfp-theme' ),
			'desc'        => __( 'Please add the title of the link button.', 'bfp-theme' ),
			'std'         => '',
			'type'        => 'text',
			'section'     => 'carousel_settings',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		),
		
		//==================================================================
		// SUMMARY SETTINGS SECTION STARTS =================================
		//==================================================================
						
		array(
			'id'          => 'bfp_summary_intro',
			'label'       => 'BFP Summary',
			'desc'        => '<h1>Welcome to the BFP Summary section.</h1>
			 <p>This tab includes the BFP Summary.</p>',
			'std'         => '',
			'type'        => 'textblock',
			'section'     => 'bfp_summary',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => ''
		),
		array(
			'id'          => 'bfp_summary_title',
			'label'       => __( 'BFP Summary Title', 'bfp-theme' ),
			'desc'        => __( 'Please add the title of your summary.', 'bfp-theme' ),
			'std'         => '',
			'type'        => 'text',
			'section'     => 'bfp_summary',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		),
      	array(
			'id'          => 'bfp_summary_textarea',
			'label'       => __( 'BFP Summary Textarea', 'bfp-theme' ),
			'desc'        => sprintf( __( 'The Textarea option type is a large string value used for custom code or text in the theme and has a WYSIWYG editor that can be filtered to change the how it is displayed. For example, you can filter %s, %s, %s, and %s.', 'bfp-theme' ), '<code>wpautop</code>', '<code>media_buttons</code>', '<code>tinymce</code>', '<code>quicktags</code>' ),
			'std'         => '',
			'type'        => 'textarea',
			'section'     => 'bfp_summary',
			'rows'        => '15',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		  ),
		  array(
			'id'          => 'bfp_summary_link_title',
			'label'       => __( 'BFP Summary Link Title', 'bfp-theme' ),
			'desc'        => __( 'Please add the title of the link.', 'bfp-theme' ),
			'std'         => '',
			'type'        => 'text',
			'section'     => 'bfp_summary',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		),
		array(
			'id'          => 'bfp_summary_link',
			'label'       => __( 'BFP Summary URL Link', 'bfp-theme' ),
			'desc'        => __( 'Please add the full URL address. This is a light box, so the link should be either vimeo or youtube.', 'bfp-theme' ),
			'std'         => '',
			'type'        => 'text',
			'section'     => 'bfp_summary',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		),
		 array(
			'id'          => 'summary_image_radio',
			'label'       => __( 'Summary Image', 'bfp-theme' ),
			'desc'        => __( 'Do you want a new image for your summary?', 'bfp-theme' ),
			'std'         => 'no',
			'type'        => 'radio',
			'section'     => 'bfp_summary',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and',
			'choices'     => array( 
			  array(
				'value'       => 'yes',
				'label'       => __( 'Yes', 'bfp-theme' ),
				'src'         => ''
			  ),
			  array(
				'value'       => 'no',
				'label'       => __( 'No', 'bfp-theme' ),
				'src'         => ''
			  )	
			)
		  ),
		array(
			'label'       => __( 'Upload or Choose Image', 'bfp-theme'),
			'id'          => 'summary_image',
			'type'        => 'upload',
			'desc'        => 'Add your custom summary image here. Please note, the image must be approximately 330x330 pixels and it will be displayed within a circle.',
			'std'         => '',
			'section'     => 'bfp_summary',
			'condition'   => 'summary_image_radio:is(yes)',
        	'operator'    => 'and'
		),
		//==================================================================
		// ACTION SETTINGS SECTION STARTS ==================================
		//==================================================================
						
		array(
			'id'          => 'actions_intro',
			'label'       => 'Actions Intro',
			'desc'        => '<h1>Welcome to the Make a Difference section</h1>
			 <p>Add three actions that visitors can take immediately.</p>',
			'std'         => '',
			'type'        => 'textblock',
			'section'     => 'action_settings',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => ''
		),
		array(
			'id'          => 'action1_title',
			'label'       => __( 'First Action Title', 'bfp-theme' ),
			'desc'        => __( 'Please add the title of the first action.', 'bfp-theme' ),
			'std'         => '',
			'type'        => 'text',
			'section'     => 'action_settings',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		),
      	array(
			'id'          => 'action1_textarea',
			'label'       => __( 'First Action Textarea', 'bfp-theme' ),
			'desc'        => sprintf( __( 'The Textarea option type is a large string value used for custom code or text in the theme and has a WYSIWYG editor that can be filtered to change the how it is displayed. For example, you can filter %s, %s, %s, and %s.', 'bfp-theme' ), '<code>wpautop</code>', '<code>media_buttons</code>', '<code>tinymce</code>', '<code>quicktags</code>' ),
			'std'         => '',
			'type'        => 'textarea',
			'section'     => 'action_settings',
			'rows'        => '15',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		  ),

		array(
			'id'          => 'action1_link',
			'label'       => __( 'Action URL Link', 'bfp-theme' ),
			'desc'        => __( 'Please add the full URL address to which the action links. This could be a page within the wordpress site or anywhere else.', 'bfp-theme' ),
			'std'         => '',
			'type'        => 'text',
			'section'     => 'action_settings',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		),
		 array(
			'label'       => __( 'New Browser Window', 'bfp-theme' ),
			'id'          => 'action1_browser_window',
			'type'        => 'select',
			'std'         => 'same',
			'section'     => 'action_settings',
			'desc'        => 'Does this link need to open in a new browser window? Then please select, New Window, from the dropdown. If it the link is to a section within the site, please choose same.',
			 'choices'     => array( 
				  array(
					'value'       => '',
					'label'       => __( '-- Choose One --', '' ),
					'src'         => ''
				  ),
				  array(
					'value'       => 'same',
					'label'       => __( 'Same', 'bfp-theme' ),
					'src'         => ''
				  ),
				  array(
					'value'       => 'new',
					'label'       => __( 'New Window', 'bfp-theme' ),
					'src'         => ''
				  )
			)
		),
		array(
			'label'       => __( 'First Action Image', 'bfp-theme' ),
			'id'          => 'action1_image',
			'type'        => 'select',
			'std'         => 'paw',
			'section'     => 'action_settings',
			'desc'        => '',
			 'choices'     => array( 
				  array(
					'value'       => '',
					'label'       => __( '-- Choose One --', '' ),
					'src'         => ''
				  ),
				  array(
					'value'       => 'paw',
					'label'       => __( 'Paw', 'bfp-theme' ),
					'src'         => ''
				  ),
				  array(
					'value'       => 'political',
					'label'       => __( 'Political Image', 'bfp-theme' ),
					'src'         => ''
				  ),
				  array(
					'value'       => 'add_own',
					'label'       => __( 'Add Your Own', 'bfp-theme' ),
					'src'         => ''
				  )
			)
		),
		array(
			'label'       => __( 'Upload Image', 'bfp-theme'),
			'id'          => 'action1_image_custom',
			'type'        => 'upload',
			'desc'        => 'You chose to add a custom image. Please add it here. Please note, the image must be approximately 330x330 pixels and must be a png with transparency.',
			'std'         => '',
			'section'     => 'action_settings',
			'condition'   => 'action1_image:is(add_own)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'action2_title',
			'label'       => __( 'Second Action Title', 'bfp-theme' ),
			'desc'        => __( 'Please add the title of the second action.', 'bfp-theme' ),
			'std'         => '',
			'type'        => 'text',
			'section'     => 'action_settings',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		),
      	array(
			'id'          => 'action2_textarea',
			'label'       => __( 'Second Action Textarea', 'bfp-theme' ),
			'desc'        => sprintf( __( 'The Textarea option type is a large string value used for custom code or text in the theme and has a WYSIWYG editor that can be filtered to change the how it is displayed. For example, you can filter %s, %s, %s, and %s.', 'bfp-theme' ), '<code>wpautop</code>', '<code>media_buttons</code>', '<code>tinymce</code>', '<code>quicktags</code>' ),
			'std'         => '',
			'type'        => 'textarea',
			'section'     => 'action_settings',
			'rows'        => '15',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		  ),

		array(
			'id'          => 'action2_link',
			'label'       => __( 'Action URL Link', 'bfp-theme' ),
			'desc'        => __( 'Please add the full URL address to which the action links. This could be a page within the wordpress site or anywhere else.', 'bfp-theme' ),
			'std'         => '',
			'type'        => 'text',
			'section'     => 'action_settings',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		),
		 array(
			'label'       => __( 'New Browser Window', 'bfp-theme' ),
			'id'          => 'action2_browser_window',
			'type'        => 'select',
			'std'         => 'same',
			'section'     => 'action_settings',
			'desc'        => 'Does this link need to open in a new browser window? Then please select, New Window, from the dropdown. If it the link is to a section within the site, please choose same.',
			 'choices'     => array( 
				  array(
					'value'       => '',
					'label'       => __( '-- Choose One --', '' ),
					'src'         => ''
				  ),
				  array(
					'value'       => 'same',
					'label'       => __( 'Same', 'bfp-theme' ),
					'src'         => ''
				  ),
				  array(
					'value'       => 'new',
					'label'       => __( 'New Window', 'bfp-theme' ),
					'src'         => ''
				  )
			)
		),
		array(
			'label'       => __( 'Second Action Image', 'bfp-theme' ),
			'id'          => 'action2_image',
			'type'        => 'select',
			'std'         => 'paw',
			'section'     => 'action_settings',
			'desc'        => '',
			 'choices'     => array( 
				  array(
					'value'       => '',
					'label'       => __( '-- Choose One --', '' ),
					'src'         => ''
				  ),
				  array(
					'value'       => 'paw',
					'label'       => __( 'Paw', 'bfp-theme' ),
					'src'         => ''
				  ),
				  array(
					'value'       => 'political',
					'label'       => __( 'Political Image', 'bfp-theme' ),
					'src'         => ''
				  ),
				  array(
					'value'       => 'add_own',
					'label'       => __( 'Add Your Own', 'bfp-theme' ),
					'src'         => ''
				  )
			)
		),
		array(
			'label'       => __( 'Upload Image', 'bfp-theme'),
			'id'          => 'action2_image_custom',
			'type'        => 'upload',
			'desc'        => 'You chose to add a custom image. Please add it here. Please note, the image must be approximately 330x330 pixels and must be a png with transparency.',
			'std'         => '',
			'section'     => 'action_settings',
			'condition'   => 'action2_image:is(add_own)',
			'operator'    => 'and'
		),		
			
			
			array(
			'id'          => 'action3_title',
			'label'       => __( 'Third Action Title', 'bfp-theme' ),
			'desc'        => __( 'Please add the title of the third action.', 'bfp-theme' ),
			'std'         => '',
			'type'        => 'text',
			'section'     => 'action_settings',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		),
      	array(
			'id'          => 'action3_textarea',
			'label'       => __( 'Third Action Textarea', 'bfp-theme' ),
			'desc'        => sprintf( __( 'The Textarea option type is a large string value used for custom code or text in the theme and has a WYSIWYG editor that can be filtered to change the how it is displayed. For example, you can filter %s, %s, %s, and %s.', 'bfp-theme' ), '<code>wpautop</code>', '<code>media_buttons</code>', '<code>tinymce</code>', '<code>quicktags</code>' ),
			'std'         => '',
			'type'        => 'textarea',
			'section'     => 'action_settings',
			'rows'        => '15',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		  ),

		array(
		  'id'          => 'action3_link',
		  'label'       => __( 'Action URL Link', 'bfp-theme' ),
		  'desc'        => __( 'Please add the full URL address to which the action links. This could be a page within the wordpress site or anywhere else.', 'bfp-theme' ),
		  'std'         => '',
		  'type'        => 'text',
		  'section'     => 'action_settings',
		  'rows'        => '',
		  'post_type'   => '',
		  'taxonomy'    => '',
		  'min_max_step'=> '',
		  'class'       => '',
		  'condition'   => '',
		  'operator'    => 'and'
	  ),
	  array(
			'label'       => __( 'New Browser Window', 'bfp-theme' ),
			'id'          => 'action3_browser_window',
			'type'        => 'select',
			'std'         => 'same',
			'section'     => 'action_settings',
			'desc'        => 'Does this link need to open in a new browser window? Then please select, New Window, from the dropdown. If it the link is to a section within the site, please choose same.',
			 'choices'     => array( 
				  array(
					'value'       => '',
					'label'       => __( '-- Choose One --', '' ),
					'src'         => ''
				  ),
				  array(
					'value'       => 'same',
					'label'       => __( 'Same', 'bfp-theme' ),
					'src'         => ''
				  ),
				  array(
					'value'       => 'new',
					'label'       => __( 'New Window', 'bfp-theme' ),
					'src'         => ''
				  )
			)
		),
		 array(
			'label'       => __( 'Third Action Image', 'bfp-theme' ),
			'id'          => 'action3_image',
			'type'        => 'select',
			'std'         => 'paw',
			'section'     => 'action_settings',
			'desc'        => '',
			 'choices'     => array( 
				  array(
					'value'       => '',
					'label'       => __( '-- Choose One --', '' ),
					'src'         => ''
				  ),
				  array(
					'value'       => 'paw',
					'label'       => __( 'Paw', 'bfp-theme' ),
					'src'         => ''
				  ),
				  array(
					'value'       => 'political',
					'label'       => __( 'Political Image', 'bfp-theme' ),
					'src'         => ''
				  ),
				  array(
					'value'       => 'add_own',
					'label'       => __( 'Add Your Own', 'bfp-theme' ),
					'src'         => ''
				  )
			)
		),
		array(
			'label'       => __( 'Upload Image', 'bfp-theme'),
			'id'          => 'action3_image_custom',
			'type'        => 'upload',
			'desc'        => 'You chose to add a custom image. Please add it here. Please note, the image must be approximately 330x330 pixels and must be a png with transparency.',
			'std'         => '',
			'section'     => 'action_settings',
			'condition'   => 'action3_image:is(add_own)',
			'operator'    => 'and'
		),		
			
	//==================================================================
		// HIGHLIGHTS SETTINGS SECTION STARTS ==============================
		//==================================================================
						
		array(
			'id'          => 'bfp_hightlights_intro',
			'label'       => 'BFP Highlights',
			'desc'        => '<h1>Welcome to the BFP Highlight section.</h1>
			 <p>This tab includes the BFP Highlights. Highlights are the latest four blog posts in the Highlights category.',
			'std'         => '',
			'type'        => 'textblock',
			'section'     => 'highlights_settings',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => ''
		)				
    
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings ); 
  }
  
  /* Lets OptionTree know the UI Builder is being overridden */
  global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;
  
}