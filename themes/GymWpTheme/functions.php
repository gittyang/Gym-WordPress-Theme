<?php  

// Link to the queries file
require get_template_directory() . '/inc/queries.php';

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

  // Normalize CSS
  wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');

  // Google Fonts
  wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@400;700&family=Staatliches&display=swap', array(), '1.0.0');

  // Slick Nav CSS
  wp_enqueue_style('slicknavcss', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.10');
  
  // load only on gallery.php
  if( basename( get_page_template() ) === 'gallery.php'):
  // Lightbox CSS
  wp_enqueue_style('lightboxcss', get_template_directory_uri() . '/css/lightbox.min.css', array(), '2.1.11');
  endif;

  // BX Slider
  if( is_front_page() ):
    wp_enqueue_style('bxslidercss', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css', array(), '4.2.12');
  endif;

  // Main Stylesheet
  wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googlefont'), '1.0.0');
  wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', array(), '1.0.0');
  
  // Load JS Files
  wp_enqueue_script('jquery');

  wp_enqueue_script('slicknavjs', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.10', true);
  
  // load only on gallery.php
  if( basename( get_page_template() ) === 'gallery.php'):
  wp_enqueue_script('lightboxjs', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), '1.0.10', true);
  endif;

  // BX Slider
  if( is_front_page() ):
    wp_enqueue_script('bxsliderjs', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js', array('jquery'), true);
  endif;

    // fixedTop Nav
    // if( is_front_page() ):
    //   wp_enqueue_script('fixedtopjs', get_template_directory_uri() . '/js/fixedTop.js' , array('jquery'), '1.0.10', true);
    // endif;

  wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);

}

add_action('wp_enqueue_scripts', 'gymfitness_scripts');


// --- Enable Featured Image in WP Pages + Others ---
function gymfitness_setup() {

  // Register New Image Size
  add_image_size('square', 350, 350, true);
  add_image_size('portrait', 350, 724, true);
  add_image_size('box', 400, 375, true);
  add_image_size('mediumSize', 600, 400, true);
  add_image_size('blog', 966, 644, true);

  // Add Featured Image
  add_theme_support('post-thumbnails');

  // SEA Titles
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'gymfitness_setup');


// Create a Sidebar Widget - 3 Step: Functions.php -> WP Setup -> Front End Code
function gymfitness_widgets() {
  register_sidebar(array(
    'name' => 'Sidebar',
    // id for dynamic_sidebar()
    'id'=> 'sidebar',
    'before_widget' => '<div class="widget">',
    'after_widget'=> '</div>',
    'before_title' => '<h3 class="text-primary">',
    'after_title' => '</h3>',
  )); 
}

add_action('widgets_init', 'gymfitness_widgets');


// Display the Hero image on the background of the front-page
function gym_hero_image() {
  $front_page_id = get_option('page_on_front'); // located @ wp-admin/options.php
  $image_id = get_field('hero_image', $front_page_id); // located @ wp home page ACF hero image
  $image = $image_id['url'];

  // Create a false stylesheet
  wp_register_Style('custom', false);
  wp_enqueue_style('custom');

  $featured_image_css = " 
    body.home .site-header {
      background-image: linear-gradient( rgba(0,0,0, 0.75), rgba(0,0,0, 0.75) ), 
      url( $image );
      background-size: cover; 
    }
  ";
  // Dynamically add to front end
  wp_add_inline_style('custom', $featured_image_css);

}

add_action('init', 'gym_hero_image');

?>


