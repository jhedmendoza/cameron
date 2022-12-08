<?php if ( ! defined( 'ABSPATH' ) ) exit; /* Exit if accessed directly */

add_action( 'after_setup_theme', 'e_theme_setup' );

function e_theme_setup() {
  /* Add theme support for automatic feed links. */
  add_theme_support( 'automatic-feed-links' );

  /* Add HTML5 Search support. */
	add_theme_support('html5', array('search-form'));

  /* Add theme support for post thumbnails (featured images). */
  add_theme_support( 'post-thumbnails' );

  /* Add custom image sizes. */
  add_image_size( 'blog', 650, 630, true );

  /* Add your nav menus function to the 'init' action hook. */
  add_action( 'init', 'e_register_menus' );

  /* Add your sidebars function to the 'widgets_init' action hook. */
  add_action( 'widgets_init', 'e_register_sidebars' );

  /* Async Scripts. */
  add_filter( 'clean_url', 'async_scripts', 11, 1 );

  /* Add custom jQuery function to the 'init' action hook. */
  add_action( 'wp_enqueue_scripts', 'e_jquery' );

  /* Load CSS files on the 'wp_enqueue_scripts' action hook. */
  add_action( 'wp_enqueue_scripts', 'e_load_styles' );

  /* Load JavaScript files on the 'wp_enqueue_scripts' action hook. */
  add_action( 'wp_enqueue_scripts', 'e_load_scripts' );

  /* Deregister Scripts */
  add_action( 'wp_print_scripts', 'e_deregister_javascript', 100 );

  /* Add remove_head_links function to the 'init' action hook. */
  add_action( 'init', 'e_remove_head_links' );

  /* Allow SVG to allowed upload mimes */
  add_filter('upload_mimes', 'e_upload_mimes');

  /* Custom excerpt length */
  add_filter( 'excerpt_length', 'e_excerpt_length', 999 );

  /* Remove Admin Bar */
  add_filter('show_admin_bar', '__return_false');

  /* Remove the Wordpress generator tag */
  remove_action('wp_head', 'wp_generator');

  /* Pagination */
  add_action( 'pagination', 'e_pagination' );

  /* Remove <p> Tags on images */
  add_filter('the_content', 'filter_ptags_on_images');

  /* Add vary header */
  add_filter('wp_headers', 'add_vary_header');

  /* Title Tag Support */
  add_theme_support( 'title-tag' );

  /* Remove Emoji Styles */
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );

  // Commented out as staging website was giving header information already sent Error
  //add_action('wp_enqueue_scripts', create_function(null, "wp_dequeue_script('devicepx');"), 20);

  /* WP Head Fix */
  remove_action( 'wp_head', 'rest_output_link_wp_head' );
}

function e_register_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu', 'wordpress' ),
      'mobile-menu' => __( 'Mobile Menu', 'wordpress' ),
      'about-menu' => __( 'About Menu', 'wordpress' ),
      'patents-menu' => __( 'Patents Menu', 'wordpress' ),
      'designs-menu' => __( 'Designs Menu', 'wordpress' ),
      'copyright-menu' => __( 'Copyright Menu', 'wordpress' ),
      'trademarks-menu' => __( 'Trademarks Menu', 'wordpress' ),
      'rightside-menu' => __( 'Right Side Menu', 'wordpress' )
    )
  );
}

function e_register_sidebars() {
  /* Register dynamic sidebars using register_sidebar() here. */
  register_sidebar(array(
    'name' => 'Footer',
    'id'   => 'e_footer',
    'description'   => 'Footer Widget Area',
    'before_widget' => '<div class="widget section">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));
}

function async_scripts($url) {
  if ( strpos( $url, '#asyncload') === false )
    return $url;
  else if ( is_admin() )
    return str_replace( '#asyncload', '', $url );
  else
    return str_replace( '#asyncload', '', $url )."' async='async";
}

function e_jquery() {
  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', false, '1.9.1', false);
  wp_enqueue_script( 'jquery' );
}

function e_load_styles()
{

  $version = '1';

  wp_register_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', false, false, 'all' );
  wp_register_style( 'grid', get_template_directory_uri() . '/css/foundation.css', false, false, 'all' );
  wp_register_style( 'fontawesome', get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.min.css', false, false, 'all' );
  wp_register_style( 'animate', get_template_directory_uri() . '/css/animate.css', false, false, 'all' );
  wp_register_style( 'owl-style', get_template_directory_uri() . '/js/owl/assets/owl.carousel.min.css', false, false, 'all' );
  wp_register_style( 'owl-theme', get_template_directory_uri() . '/js/owl/assets/owl.theme.default.css', false, false, 'all' );
  wp_register_style( 'swipebox-style', get_template_directory_uri() . '/js/swipebox/css/swipebox.min.css', false, false, 'all' );
  wp_enqueue_style( 'normalize' );
  wp_enqueue_style( 'grid' );
  wp_enqueue_style( 'fontawesome' );
  wp_enqueue_style( 'animate' );
  wp_enqueue_style( 'owl-style' );
  wp_enqueue_style( 'owl-theme' );
  wp_enqueue_style( 'swipebox-style' );
  wp_enqueue_style( 'style', get_stylesheet_uri(), array(), rand(111,9999), 'all' );
  wp_enqueue_style( 'us-style-css', get_stylesheet_directory_uri() . '/css/us-style.css', false, false, 'all' );
  wp_enqueue_style( 'new-common-css', get_stylesheet_directory_uri() . '/css/new-common.css?v=1', false, null, 'all' );
  wp_enqueue_style( 'knowledge-hub-css', get_stylesheet_directory_uri() . '/css/knowledge-hub.css', false, false, 'all' );
}

function e_load_scripts() {

  wp_enqueue_script('classie', get_template_directory_uri() . '/js/classie.js', false, '', true);
  wp_enqueue_script('owl-js', get_template_directory_uri() . '/js/owl/owl.carousel.min.js', false, '', true);
  wp_enqueue_script('swipebox-js', get_template_directory_uri() . '/js/swipebox/js/jquery.swipebox.min.js', false, '', true);
  wp_enqueue_script('common-script', get_template_directory_uri() . '/js/common.js?v=1', array(), null, true);
  wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/scripts.js', array(), null, true);
}

function e_deregister_javascript() {
  wp_deregister_script('lsow-modernizr');
  wp_deregister_script('lsow-waypoints');
}

function project_dequeue_unnecessary_styles() {
  wp_dequeue_style( 'featherlight-css' );
  wp_deregister_style( 'featherlight-css' );
}
add_action( 'wp_print_styles', 'project_dequeue_unnecessary_styles' );

function e_remove_head_links() {
  /* Removes unneccesary header links */
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');
}

function e_upload_mimes ( $existing_mimes=array() ) {
  // add the file extension to the array
  $existing_mimes['svg'] = 'mime/type';
  $existing_mimes['ico'] = 'mime/type';
  // call the modified list of extensions
  return $existing_mimes;
}

function e_excerpt_length( $length ) {
  return 10;
}

function e_pagination($prev = '»', $next = '«') {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    $pagination = array(
        'base' => @add_query_arg('paged','%#%'),
        'format' => '',
        'total' => $wp_query->max_num_pages,
        'current' => $current,
        'type' => 'plain'
);
    if( $wp_rewrite->using_permalinks() )
        $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );

    if( !empty($wp_query->query_vars['s']) )
        $pagination['add_args'] = array( 's' => get_query_var( 's' ) );

    echo paginate_links( $pagination );
}

function siblings($link) {
    global $post;
    $siblings = get_pages('child_of='.$post->post_parent.'&parent='.$post->post_parent);
    foreach ($siblings as $key=>$sibling){
        if ($post->ID == $sibling->ID){
            $ID = $key;
        }
    }
    $closest = array('before'=>get_permalink($siblings[$ID-1]->ID),'after'=>get_permalink($siblings[$ID+1]->ID));

    if ($link == 'before' || $link == 'after') { echo $closest[$link]; } else { return $closest; }
}

function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
function add_vary_header($headers) {
  $headers['Vary'] = 'User-Agent';
  return $headers;
}

/*** Remove Query String from Static Resources ***/
function remove_cssjs_ver( $src ) {
 if( strpos( $src, '?ver=' ) )
 $src = remove_query_arg( 'ver', $src );
 return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );

function tealButton($atts, $content = null) {
   extract(shortcode_atts(array('link' => '#'), $atts));
   return '<a class="teal-button" href="'.$link.'">' . do_shortcode($content) . '</a>';
}
add_shortcode('teal-button', 'tealButton');

function purpleButton($atts, $content = null) {
   extract(shortcode_atts(array('link' => '#'), $atts));
   return '<a class="purple-button" href="'.$link.'">' . do_shortcode($content) . '</a>';
}
add_shortcode('purple-button', 'purpleButton');

function blueButton($atts, $content = null) {
   extract(shortcode_atts(array('link' => '#'), $atts));
   return '<a class="blue-button" href="'.$link.'">' . do_shortcode($content) . '</a>';
}
add_shortcode('blue-button', 'blueButton');

/* ACF 5 */
define('ACF_EARLY_ACCESS', '5');
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page();
}

add_filter('script_loader_tag', 'clean_script_tag');
function clean_script_tag($input) {
$input = str_replace("type='text/javascript' ", '', $input);
return str_replace("'", '"', $input);
}

// Prevent non admins to see the admin area and redirect to pct-zoom
// add_action( 'init', 'blockusers_init' );
// function blockusers_init() {
//   if( is_admin() && ! current_user_can( 'administrator' ) && ! ( defined( 'DOING_AJAX' ) && DOING_AJAX ) ) {
//   wp_redirect(
//     home_url()."/pct-zoom/"
//    );
//   exit;
//   }
// }

/**
 * Reduce login time for subscribers to the set limit
 */
add_filter('auth_cookie_expiration', 'auth_cookie_expiration_filter_subscribers');
function auth_cookie_expiration_filter_subscribers() {
  // 3600 seconds in 1 hour
  $subLimit = 3600;
  return $subLimit;
}

// Hide ACF update notification
function filter_plugin_updates( $value ) {
	if (isset( $value->response['advanced-custom-fields-pro/acf.php'] )) {
    	unset( $value->response['advanced-custom-fields-pro/acf.php'] );
	}
    return $value;
}
add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );

add_filter( 'body_class','my_body_classes' );
function my_body_classes( $classes ) {

    // if(is_front_page() && isset($_SESSION['user_country_code']) && $_SESSION['user_country_code'] == 'US') {
    if(is_front_page()) {
      $classes[] = 'page-template-page-us-home-php';
    }

    return $classes;
}

add_action('wp_ajax_category_filter', 'category_filter');
add_action('wp_ajax_nopriv_category_filter', 'category_filter');

function category_filter() {

  $category_name = sanitize_text_field($_POST['category']);
  $post_per_page = isset($_POST['page']) ? sanitize_text_field($_POST['page']) : 9;


  $args = array(
    'post_type'       => 'post',
    'post_status'     => 'publish',
    'category_name'   =>  ($category_name == 'all') ? '' : $category_name,
    'order'           => 'DESC',
    'posts_per_page'  => $post_per_page,
  );

  $result = new WP_Query( $args );
  $data = [];

  while ( $result->have_posts() ) : $result->the_post();
    $data[] = array(
      'post_title'    => get_the_title(),
      'post_url'      => get_post_permalink(),
      'thumbnail_url' => get_the_post_thumbnail_url(),
      'exerpt'        => wp_strip_all_tags( get_the_excerpt()),
    );
  endwhile;

  if ( !empty($data) ) {
    echo wp_json_encode([
      'status' => true,
      'msg'    => 'Data found.',
      'data'   => $data,
      'total_posts' => $result->found_posts
    ]);
  }
  else {
    echo wp_json_encode([
      'status' => false,
      'msg'    => 'Data is empty.',
      'data'   => '',
      'total_posts' => 0,
    ]);
  }
  exit;
}

/**
 * Enable vCard Upload
 *
 */
function be_enable_vcard_upload( $mime_types ){
    $mime_types['vcf'] = 'text/vcard';
    return $mime_types;
}
add_filter('upload_mimes', 'be_enable_vcard_upload' );





?>
