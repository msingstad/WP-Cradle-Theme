<?php
/** 
 * For more info: https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */			
	
// Theme support options
require_once(get_template_directory().'/functions/theme-support.php'); 

// WP Head and other cleanup functions
require_once(get_template_directory().'/functions/cleanup.php'); 

// Register scripts and stylesheets
require_once(get_template_directory().'/functions/enqueue-scripts.php'); 

// Register custom menus and menu walkers
require_once(get_template_directory().'/functions/menu.php'); 

// Register sidebars/widget areas
require_once(get_template_directory().'/functions/sidebar.php'); 

// Remove WordPress comments
require_once(get_template_directory().'/functions/comments.php'); 

// Pagination 
require_once(get_template_directory().'/functions/page-navi.php'); 

// Adds support for multiple languages
require_once(get_template_directory().'/functions/translations/translation.php'); 

// Customize the WordPress login menu
require_once(get_template_directory().'/functions/login.php');

// Customize the WordPress admin
require_once(get_template_directory().'/functions/admin.php'); 

// Breadcrumbs
require_once(get_template_directory().'/functions/breadcrumbs.php'); 

// WordPress helpers
require_once(get_template_directory().'/functions/helpers.php');