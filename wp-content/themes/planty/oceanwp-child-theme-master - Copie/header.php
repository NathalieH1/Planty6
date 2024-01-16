<?php
/**
 * The Header for our theme.
 *
 * @package OceanWP WordPress theme
 */

?>
<!DOCTYPE html>
<html class="<?php echo esc_attr( oceanwp_html_classes() ); ?>" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<?php wp_head(); ?>
</head>

	<body <?php body_class(); ?> <?php oceanwp_schema_markup( 'html' ); ?>>

<?php wp_body_open(); ?>
	
<?php do_action( 'ocean_before_outer_wrap' ); ?>

	<div id="outer-wrap" class="site clr">

		<a class="skip-link screen-reader-text" href="#main"><?php echo esc_html( oceanwp_theme_strings( 'owp-string-header-skip-link', false ) ); ?></a>

		<?php do_action( 'ocean_before_wrap' ); ?>

		<div id="wrap" class="clr">

			<?php 
			
			do_action( 'ocean_top_bar' ); 
		
			

$custom_logo_id = get_theme_mod('custom_logo');
$logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');

// Si le logo est disponible, l'inclure dans le menu
/*if ($logo_url) {
    echo '<div class="clr container">';
	echo '<div class="clr">';
    echo '<a href="' . esc_url(home_url('/')) . '" class="custom-logo-link"><img src="' . esc_url($logo_url) . '" alt="Logo" class="custom-logo"></a>';
   echo '</div>';
}
			/*wp_nav_menu(
				array(
					'menu' => 'Principal',
					'theme_location' => 'main_menu',
					'menu_class' => 'mobile-menu main-menu dropdown-menu sf-menu',
					'container' => '',)
									
			);
			
			/*wp_nav_menu( array('theme_location'=> 'custom-menu') );*/

			/*echo '</div>';*/
				
	
			?>

<?php do_action( 'ocean_header' );?>

			<?php do_action( 'ocean_before_main' ); 
			
			?>

			<main id="main" class="site-main clr"<?php oceanwp_schema_markup( 'main' ); ?> role="main">

				<?php do_action( 'ocean_page_header' ); ?>
