<?php 
function task_script_enqueue(){
    wp_enqueue_style('custom_style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
}
add_action( 'wp_enqueue_scripts', 'task_script_enqueue' );