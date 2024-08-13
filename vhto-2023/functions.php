<?php 

# Admin panel menu
function custom_menu_order( $menu_ord ) {
     if ( !$menu_ord ) return true;

     return array(
          'index.php', // Dashboard
          'separator1', // First separator
          'edit.php?post_type=page', // Pages
          'edit.php', // Posts
          'edit.php?post_type=activities', // Activities
          'edit.php?post_type=agenda', // Agenda
          'edit.php?post_type=news', // News
          'edit.php?post_type=profiles', // Profiles
          'edit.php?post_type=vacancies', // Vacancies
          'edit.php?post_type=network-publications', // Publications gender & STEM
     );

}

add_filter( 'custom_menu_order', 'custom_menu_order', 10, 1 );
add_filter( 'menu_order', 'custom_menu_order', 10, 1 );

function remove_menus(){
    remove_menu_page( 'edit-comments.php' );
}

add_action( 'admin_menu', 'remove_menus' );

# Add scripts/stylesheets 
function vhto_template_files(){
    // wp_enqueue_style('bulma', 'https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css');
    wp_enqueue_style('custom_bulma', get_theme_file_uri('/style-bulma.css'));
    wp_enqueue_style('vhto_style', get_theme_file_uri('/style.css'));
    wp_enqueue_script('fontawesome', "https://use.fontawesome.com/releases/v6.4.2/js/all.js");
    wp_enqueue_script("main", get_theme_file_uri('/assets/js/main.js'), NULL, microtime(), true);
}
add_action('wp_enqueue_scripts', 'vhto_template_files');

function add_vhto_favicon(){ 
  $favicon_url = get_theme_file_uri('assets/images/logo-vierkant.png');
  echo '<link rel="shortcut icon" href="' . $favicon_url . '" />'; 
}

add_action('wp_head','add_vhto_favicon');

//Making jQuery to load from Google Library
function replace_jquery() {
	if (!is_admin()) {
		// comment out the next two lines to load the local copy of jQuery
		// wp_deregister_script('jquery');
		// wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', false, '3.5.1');
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'replace_jquery');

#enable Thumbnails
add_theme_support( 'post-thumbnails' );

# taxonomies
function add_custom_taxonomies() {
  // Add new "targetgroup" taxonomy to Activities
  register_taxonomy('targetgroup', 'activities', array(
    // Hierarchical taxonomy (like categories)
    'hierarchical' => true,
    'show_in_rest' => true,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'Target Groups', 'taxonomy general name' ),
      'singular_name' => _x( 'Target Group', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Target Groups' ),
      'all_items' => __( 'All Target Groups' ),
      'parent_item' => __( 'Parent Target Group' ),
      'parent_item_colon' => __( 'Parent Target Group:' ),
      'edit_item' => __( 'Edit Target Group' ),
      'update_item' => __( 'Update Target Group' ),
      'add_new_item' => __( 'Add New Target Group' ),
      'new_item_name' => __( 'New Target Group Name' ),
      'menu_name' => __( 'Target Groups' ),
    ),
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'targetgroups', // This controls the base slug that will display before each term
      'with_front' => false, // Don't display the category base before "/locations/"
      'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
    ),
  ));

  // Add new "role" taxonomy to Profiles
  register_taxonomy('role', 'profiles', array(
    // Hierarchical taxonomy (like categories)
    'hierarchical' => true,
    'show_in_rest' => true,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'Role', 'taxonomy general name' ),
      'singular_name' => _x( 'Role', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Roles' ),
      'all_items' => __( 'All Roles' ),
      'parent_item' => __( 'Parent Role' ),
      'parent_item_colon' => __( 'Parent Role:' ),
      'edit_item' => __( 'Edit Role' ),
      'update_item' => __( 'Update Role' ),
      'add_new_item' => __( 'Add New Role' ),
      'new_item_name' => __( 'New Role Name' ),
      'menu_name' => __( 'Role' ),
    ),
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'roles', // This controls the base slug that will display before each term
      'with_front' => false, // Don't display the category base before "/locations/"
      'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
    ),
  ));
}
add_action( 'init', 'add_custom_taxonomies', 0 );

// filtering
function filter_vhto_posts() {

  $category_categories = $_POST['categories'];

  if($category_categories != []){
      $content = new WP_Query(array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'tax_query' => array(
            array (
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' =>  $category_categories,
            )
        ),
    ));
  } else {
    $content = new WP_Query(array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => -1,
    ));
  }

  $response = '';

  if($content->have_posts()) {
    ob_start();
    while($content->have_posts()){
      $content->the_post();
      get_template_part('partials/filter' , 'kennis');
    }
    $response = ob_get_clean();
  } else {
    $response = 'empty';
  }

   $return = array(
      'posts' => $response,
  );

  wp_send_json($return);
}

add_action( 'wp_ajax_filter_vhto_posts', 'filter_vhto_posts' );
add_action( 'wp_ajax_nopriv_filter_vhto_posts', 'filter_vhto_posts');

function filter_vhto_activities() {

  $category_targetgroup = $_POST['targetgroup'];

  if($category_targetgroup != []){
      $content = new WP_Query(array(
        'post_type' => 'activities',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'tax_query' => array(
            array (
                'taxonomy' => 'targetgroup',
                'field' => 'slug',
                'terms' =>  $category_targetgroup,
            )
        ),
    ));
  } else {
    $content = new WP_Query(array(
        'post_type' => 'activities',
        'post_status' => 'publish',
        'posts_per_page' => -1,
    ));
  }

  $response = '';

  if($content->have_posts()) {
    ob_start();
    while($content->have_posts()){
      $content->the_post();
      get_template_part('partials/filter' , 'aanbod');
    }
    $response = ob_get_clean();
  } else {
    $response = 'empty';
  }

   $return = array(
      'posts' => $response,
  );

  wp_send_json($return);
}

add_action( 'wp_ajax_filter_vhto_activities', 'filter_vhto_activities' );
add_action( 'wp_ajax_nopriv_filter_vhto_activities', 'filter_vhto_activities');

function sender_email_vhto( $original_email_address ) {
    return 'vhto@vhto.nl';
}
add_filter( 'wp_mail_from', 'sender_email_vhto' );

function signup_form_nieuwsbrief() {
	if ( ! isset( $_POST['signup-form-nieuwsbrief'] )  || ! isset( $_POST['cagnotte-verif'] ) )  {
		return;
	}
  
	if ( ! wp_verify_nonce( $_POST['cagnotte-verif'], 'nieuwsbrief' ) ) {
		return;
	}

  $email =  $_POST['email'];

	$url = wp_get_referer();

	// Everything's OK, let's do the work...
	$url = add_query_arg( 'success', 1, wp_get_referer() );
	
	// Redirect user back to the form, with an error or success marker in $_GET.
	wp_safe_redirect( $url );
  //Send an email to the WordPress administrator if there are no validation errors
  $mail    = 'vhto@vhto.nl';
  $subject = 'Nieuwe aanmelding nieuwsbrief';
  $message = '
    Een nieuwe aanmelding voor de nieuwsbrief
    <table>
      <tr>
        <th>Email</th>
        <td>' . $email .'</td>
      </tr>
  </table>
  ';

  $headers = array('Content-Type: text/html; charset=UTF-8', 'From: VHTO <vhto@vhto.nl>');
  wp_mail( $mail, $subject, $message, $headers );

	exit();
}
add_action( 'template_redirect', 'signup_form_nieuwsbrief');

// add_action( 'wp_enqueue_scripts', 'cxc_enqueue_my_styles_scripts' );  

// function cxc_enqueue_my_styles_scripts() {
// 	wp_enqueue_script( 'recaptcha-script', 'https://www.google.com/recaptcha/api.js' );
// 	wp_enqueue_script( 'custom_script', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery'), '1.0.0', true );
// }

// @ini_set( 'upload_max_size' , '64M' );
// @ini_set( 'post_max_size', '64M');
// @ini_set( 'max_execution_time', '300' );
