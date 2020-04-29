<?php  

// Create the Menus - 3 Step: Functions.php -> WP Setup -> Front End Code
function gymfitness_menus() {
  // Wordpress Function
  register_nav_menus( array(
    'main-menu' => 'Main Menu'
  ));
}
 // Hook
add_action('init', 'gymfitness_menus');


// --- Add Stylesheets and JS Files ---

function gymfitness_scripts() {

  //Normalize CSS
  wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');

  //Google Fonts
  wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@400;700&family=Staatliches&display=swap', array(), '1.0.0');

  //Slick Nav CSS
  wp_enqueue_style('slicknavcss', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.10');
  
  // Main Stylesheet
  wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googlefont'), '1.0.0');
  wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', array(), '1.0.0');
  
  // Load JS Files
  wp_enqueue_script('jquery');

  wp_enqueue_script('slicknavjs', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.10', true);

  wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);

}

add_action('wp_enqueue_scripts', 'gymfitness_scripts');


// --- Enable Featured Image in WP Pages + Others ---
function gymfitness_setup() {

  // Register New Image Size
  add_image_size('square', 350, 350, true);
  add_image_size('portrait', 350, 724, true);
  add_image_size('box', 400, 375, true);
  add_image_size('mediumSize', 700, 400, true);
  add_image_size('blog', 966, 644, true);

  // Add Featured Image
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'gymfitness_setup');

?>

