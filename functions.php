<?php 
function task_script_enqueue(){
    wp_enqueue_style('custom_style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
    wp_enqueue_script('custom_js', get_template_directory_uri() . '/js/app.js', array('jquery'), '1.0.0', true );  
    wp_enqueue_style( 'google_web_fonts', 'https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap' );
    wp_enqueue_style( 'google_web_fonts', 'https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap' );
    wp_enqueue_style('fonts-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css', array(), '5.14.0', 'all'); 
}
add_action( 'wp_enqueue_scripts', 'task_script_enqueue' );