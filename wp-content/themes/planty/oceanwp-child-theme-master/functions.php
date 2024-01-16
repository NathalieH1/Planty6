<?php
/**
 * OceanWP Child Theme Functions
 *
 * When running a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions will be used.
 *
 * Text Domain: oceanwp
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function oceanwp_child_enqueue_parent_style() {

	// Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update the theme).
	$theme   = wp_get_theme( 'OceanWP' );
	$version = $theme->get( 'Version' );

	// Load the stylesheet.
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), 
    filemtime (get_stylesheet_directory() . '/css/theme.css'));
	wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array( 'oceanwp-style' ), $version, 
	filemtime (get_stylesheet_directory() . '/css/theme.css'));;
	
}

add_action( 'wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style' );



function display_button_for_admin($items, $args)
{
    // Vérifier si l'utilisateur est connecté et si le menu est 'main_menu'
    if ($args->theme_location === 'main_menu' && is_user_logged_in()) {
        // Trouver le milieu du menu
        $menu_items = wp_get_nav_menu_items($args->menu);
        $milieu = ceil(count($menu_items) / 2);

        // Ajouter le bouton "Admin" dans le menu
        $nouveau_bouton = '<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-144"><a href="http://localhost/Planty/wp-admin/index.php" class="admin-button">Admin</a></li>';

        // Ajouter le bouton "Admin" après le milieu du menu
        $items = substr_replace($items, $nouveau_bouton, strpos($items, '</li>', (strpos($items, '</li>') * $milieu) / 2) + 5, 0);
    }

    return $items;
}

add_filter('wp_nav_menu_items', 'display_button_for_admin', 10, 2);

