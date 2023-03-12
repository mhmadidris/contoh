<?php
// Add Style
function add_css()
{
   wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css');
   wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css');
   wp_enqueue_style('owl-carousel-css', get_template_directory_uri() . '/assets/lib/owlcarousel/assets/owl.carousel.min.css');
   wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
   if (is_page('form')) {
      wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/form.css');
   } else {
      wp_enqueue_style('style-css', get_template_directory_uri() . '/style.css');
   }
}
add_action('wp_enqueue_scripts', 'add_css');

// Add Scripts
function add_script()
{
   wp_enqueue_script('jquery-js', 'https://code.jquery.com/jquery-3.4.1.min.js');
   wp_enqueue_script('bootstrap-bundle-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js');
   wp_enqueue_script('easing-min-js', get_template_directory_uri() . '/assets/lib/easing/easing.min.js');
   wp_enqueue_script('waypoints-min-js', get_template_directory_uri() . '/assets/lib/waypoints/waypoints.min.js');
   wp_enqueue_script('owl-carousel-js', get_template_directory_uri() . '/assets/lib/owlcarousel/owl.carousel.min.js');
   wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js');
}
add_action('wp_enqueue_scripts', 'add_script');

// Google Font
function add_google_fonts()
{
   wp_enqueue_style('font-google', 'https://fonts.googleapis.com/css2?family=Barlow:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap');
}
add_action('wp_enqueue_scripts', 'add_google_fonts');
