<?php



	if ( function_exists('register_sidebar') ) {

	register_sidebar(array(

	'name' => 'Top A',

	'id' => 'top-a',

	'description' => 'Appears as the sidebar on the custom homepage',

	'before_widget' => '<div class="top-a span6">',

	'after_widget' => '</div>',

	));




	
	register_sidebar(array(

	'name' => 'Top B',

	'id' => 'top-b',

	'description' => 'Appears as the sidebar on the custom homepage',

	'before_widget' => '<div class="top-b span6">',

	'after_widget' => '</div>',

	));
	
	
	
	register_sidebar(array(

	'name' => 'Logo One',

	'id' => 'Logo-One',

	'description' => 'Appears as the sidebar on the custom homepage',

	'before_widget' => '<div class="logo-one span4">',

	'after_widget' => '</div>',

	));

	

	register_sidebar(array(

	'name' => 'Logo Two',

	'id' => 'Logo-Two',

	'description' => 'Appears as the sidebar on the custom homepage',

	'before_widget' => '<div class="logo-two">',

	'after_widget' => '</div>',

	));

	

		register_sidebar(array(

	'name' => 'Search',

	'id' => 'Search',

	'description' => 'Appears as the sidebar on the custom homepage',

	'before_widget' => '<div class="search">',

	'after_widget' => '</div>',

	));

	

		register_sidebar(array(

	'name' => 'Menu One',

	'id' => 'menu-one',

	'description' => 'Appears as the sidebar on the custom homepage',

	'before_widget' => '<div class="menu-one span8">',

	'after_widget' => '</div>',

	));

	

		register_sidebar(array(

	'name' => 'Menu Two',

	'id' => 'Menu-Two',

	'description' => 'Appears as the sidebar on the custom homepage',

	'before_widget' => '<div class="menu-two">',

	'after_widget' => '</div>',

	));

	

		register_sidebar(array(

	'name' => 'Extra One',

	'id' => 'extra-one',

	'description' => 'Appears as the sidebar on the custom homepage',

	'before_widget' => '<div class="extra-one">',

	'after_widget' => '</div>',

	));

	

		register_sidebar(array(

	'name' => 'Extra Two',

	'id' => 'extra-two',

	'description' => 'Appears as the sidebar on the custom homepage',

	'before_widget' => '<div class="extra-two">',

	'after_widget' => '</div>',

	));

	

		register_sidebar(array(

	'name' => 'Extra Three',

	'id' => 'extra-three',

	'description' => 'Appears as the sidebar on the custom homepage',

	'before_widget' => '<div class="extra-three">',

	'after_widget' => '</div>',

	));

	

		register_sidebar(array(

	'name' => 'Extra Four',

	'id' => 'extra-four',

	'description' => 'Appears as the sidebar on the custom homepage',

	'before_widget' => '<div class="extra-four">',

	'after_widget' => '</div>',

	));

	

		register_sidebar(array(

	'name' => 'Left Sidebar',

	'id' => 'left-sidebar',

	'description' => 'Appears as the sidebar on the custom homepage',

	'before_widget' => '<div>',

	'after_widget' => '</div>',

	'before_title' => '<div class="page-header"><h3 class="title">',

	'after_title' => '</h3></div>',

	));

	

		register_sidebar(array(

	'name' => 'Right Sidebar',

	'id' => 'right-sidebar',

	'description' => 'Appears as the sidebar on the custom homepage',

	'before_widget' => '<div>',

	'after_widget' => '</div>',

	'before_title' => '<div class="page-header"><h3 class="title">',

	'after_title' => '</h3></div>',

	));

	

		register_sidebar(array(

	'name' => 'Content Top',

	'id' => 'content-top',

	'description' => 'Appears as the sidebar on the custom homepage',

	'before_widget' => '<div class="content-top">',

	'after_widget' => '</div>',

	));

	

		register_sidebar(array(

	'name' => 'Content Bottom',

	'id' => 'content-bottom',

	'description' => 'Appears as the sidebar on the custom homepage',

	'before_widget' => '<div class="content-bottom">',

	'after_widget' => '</div>',

	));

	

		register_sidebar(array(

	'name' => 'Footer One',

	'id' => 'footer-one',

	'description' => 'Appears as the sidebar on the custom homepage',

	'before_widget' => '<div class="footer-one">',

	'after_widget' => '</div>',

	));

	

		register_sidebar(array(

	'name' => 'Footer Two',

	'id' => 'footer-two',

	'description' => 'Appears as the sidebar on the custom homepage',

	'before_widget' => '<div class="footer-two">',

	'after_widget' => '</div>',

	));

	

		register_sidebar(array(

	'name' => 'Footer Three',

	'id' => 'footer-three',

	'description' => 'Appears as the sidebar on the custom homepage',

	'before_widget' => '<div class="footer-threee">',

	'after_widget' => '</div>',

	));

	

		register_sidebar(array(

	'name' => 'Copyright',

	'id' => 'copyright',

	'description' => 'Appears as the sidebar on the custom homepage',

	'before_widget' => '<div class="copyright">',

	'after_widget' => '</div>',

	));



	}

	

	add_theme_support( 'post-thumbnails' ); 

	

	include "admin/functions.php";
	
	
function custom_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 ); 