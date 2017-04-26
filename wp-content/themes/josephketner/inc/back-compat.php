<?php
/**
 * Joseph Ketner back compat functionality
 *
 * Prevents Joseph Ketner from running on WordPress versions prior to 3.6,
 * since this theme is not meant to be backward compatible and relies on
 * many new functions and markup changes introduced in 3.6.
 *
 * @package WordPress
 * @subpackage Joseph_Ketner
 * @since Joseph Ketner 1.0
 */

/**
 * Prevent switching to Joseph Ketner on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Joseph Ketner 1.0
 *
 * @return void
 */
function josephketner_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'josephketner_upgrade_notice' );
}
add_action( 'after_switch_theme', 'josephketner_switch_theme' );

/**
 * Add message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Joseph Ketner on WordPress versions prior to 3.6.
 *
 * @since Joseph Ketner 1.0
 *
 * @return void
 */
function josephketner_upgrade_notice() {
	$message = sprintf( __( 'Joseph Ketner requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'josephketner' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevent the Theme Customizer from being loaded on WordPress versions prior to 3.6.
 *
 * @since Joseph Ketner 1.0
 *
 * @return void
 */
function josephketner_customize() {
	wp_die( sprintf( __( 'Joseph Ketner requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'josephketner' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'josephketner_customize' );

/**
 * Prevent the Theme Preview from being loaded on WordPress versions prior to 3.4.
 *
 * @since Joseph Ketner 1.0
 *
 * @return void
 */
function josephketner_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Joseph Ketner requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'josephketner' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'josephketner_preview' );
