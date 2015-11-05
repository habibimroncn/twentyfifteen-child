<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    // Add Font Awesome
	wp_enqueue_style( 'fonts-awesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );

}


add_action( 'the_content', 'my_image_credit', 12 );
function my_image_credit( $content ) {
    if( is_singular() ) {
        $image_credit = get_field( 'image_credit' );
        if( !empty( $image_credit ) ) {
            $content .= '<div class="after-post-section"><h3>Image Credit</h3><div class="section-content">' . $image_credit . '</div></div>';
        }
    }

    return $content;
}
?>