<?php

function render_getwid_template_post_date( $attributes, $content ) {
    //Not BackEnd render if we view from template page
    if ( (get_post_type() == Getwid\PostTemplatePart::$postType) || (get_post_type() == 'revision') ){
        return $content;
    }

    $block_name = 'wp-block-getwid-template-post-date';
    $wrapper_class = $block_name;

    if ( isset( $attributes['className'] ) ) {
        $wrapper_class .= ' '.esc_attr($attributes['className']);
    }

    $wrapper_style = '';
    //Classes
    if ( isset( $attributes['textAlignment']) ) {
        $wrapper_style .= 'text-align: '.esc_attr($attributes['textAlignment']).';';
    }
    if ( isset( $attributes['bold']) &&  $attributes['bold'] ) {
        $wrapper_style .= 'font-weight: bold;';
    }
    if ( isset( $attributes['italic']) && $attributes['italic'] ) {
        $wrapper_style .= 'font-style: italic;';
    }    

    if ( isset( $attributes['customFontSize']) ) {
        $wrapper_style .= 'font-size: '.esc_attr($attributes['customFontSize']).'px;';
    }  

    if (isset($attributes['fontSize'])){
        $wrapper_class .= ' has-'.esc_attr($attributes['fontSize']).'-font-size';
    }   

    $archive_year  = get_the_time('Y');
    $archive_month = get_the_time('m');
    $archive_day   = get_the_time('d');

    $is_back_end = \defined( 'REST_REQUEST' ) && REST_REQUEST && ! empty( $_REQUEST['context'] ) && 'edit' === $_REQUEST['context'];
    
    //Link style & class
    getwid_custom_color_style_and_class($wrapper_style, $wrapper_class, $attributes, 'color', $is_back_end); 

    $icon_class = '';
    $icon_style = '';
    getwid_custom_color_style_and_class($icon_style, $icon_class, $attributes, 'color', $is_back_end, ['color' => 'iconColor', 'custom' => 'customIconColor']); 

	$result = '';

    $extra_attr = array(
        'wrapper_class' => $wrapper_class,
        'wrapper_style' => $wrapper_style,
        'archive_year' => $archive_year,
        'archive_month' => $archive_month,
        'archive_day' => $archive_day, 
        'icon_class' => $icon_class,
        'icon_style' => $icon_style,              
    );

	if ( get_the_date() ) {
		ob_start();
        
            getwid_get_template_part('template-parts/post-date', $attributes, false, $extra_attr);

		$result = ob_get_clean();
	}

    return $result;
}
register_block_type(
    'getwid/template-post-date',
    array(
        'attributes' => array(
            'blockDivider' => array(
                'type' => 'string',
            ),

            //Colors
            'textColor' => array(
                'type' => 'string',
            ),
            'customTextColor' => array(
                'type' => 'string',
            ),
            'backgroundColor' => array(
                'type' => 'string',
            ),        
            'customBackgroundColor' => array(
                'type' => 'string',
            ),
            //Colors

            'icon' => array(
                'type' => 'string',
                'default' => 'fas fa-calendar',
            ),
            'iconColor' => array(
                'type' => 'string',
            ),
            'customIconColor' => array(
                'type' => 'string',
            ),              
            'fontSize' => array(
                'type' => 'string',
            ),    
            'customFontSize' => array(
                'type' => 'number',
            ),              
            'bold' => array(
                'type' => 'boolean',
                'default' => false,
            ),
            'italic' => array(
                'type' => 'boolean',
                'default' => false,
            ),                       
            'textAlignment' => array(
                'type' => 'string',
            ),

            'className' => array(
                'type' => 'string',
            ),          
        ),
        'render_callback' => 'render_getwid_template_post_date',
    )
);