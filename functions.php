<?php
function my_new_contactmethods( $contactmethods ) {
  // Add Twitter
  $contactmethods['twitter'] = 'Twitter nickname';
  //add Facebook
  $contactmethods['facebook'] = 'Facebook';
 
  return $contactmethods;
}
add_filter('user_contactmethods','my_new_contactmethods',10,1);

if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'bottom'));
add_post_type_support( 'page', 'excerpt' );

add_theme_support( 'post-thumbnails' );
add_image_size( 'type-home', 260, 150, TRUE);

add_filter('show_admin_bar', '__return_false');
?>