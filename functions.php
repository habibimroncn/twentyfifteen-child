<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    // Add Font Awesome
	wp_enqueue_style( 'fonts-awesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );

	//add scripts
	wp_enqueue_script( 'custom-scripts', get_stylesheet_directory_uri() . '/js/functions.js', array('jquery'), '20150511', true );

}

add_action( 'init', 'add_nav_menu' );
function add_nav_menu(){
	register_nav_menus( array('secondary' => __( 'Secondary Menu', 'twentyfifteen'),
		) );
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