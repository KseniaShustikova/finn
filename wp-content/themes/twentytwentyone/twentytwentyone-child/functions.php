<?php
function enqueue_parent_styles()
{
    wp_enqueue_style('parent-style', get_stylesheet_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_parent_styles', 25);
$url_path = dirname($_SERVER['REQUEST_URI']); 
 if ( '/aktivacziya-uchetnoj-zapisi' === $url_path ) { $bypass = true; }
?>
