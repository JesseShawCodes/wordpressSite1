<?php

//extract styles & classes
extract($extra_attr);
?>

<div class="<?php echo esc_attr( $wrapper_class ); ?>" <?php echo (!empty($wrapper_style) ? 'style="'.esc_attr($wrapper_style).'"' : '');?>>
    <?php if ( $attributes['showContent'] == 'excerpt' ) {
        echo '<p>'.esc_html( wp_trim_words( get_the_excerpt(), $contentLength ) ).'</p>';
    } elseif ($attributes['showContent'] == 'content'){
        the_content();
    } elseif ($attributes['showContent'] == 'full'){
        echo wp_kses_post( html_entity_decode( $current_post->post_content, ENT_QUOTES, get_option( 'blog_charset' ) ) );
    } ?>
</div>