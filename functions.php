<?php 

add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );
function chicdressing_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
}

add_filter( 'big_image_size_threshold', '__return_false' );

//permet de décharger les fonts du thème parent ashe.
remove_action( 'wp_enqueue_scripts', 'ashe_gfonts_scripts' );
wp_deregister_script( 'wp_enqueue_scripts', 'ashe_gfonts_scripts' );




 