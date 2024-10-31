<?php

/*
Plugin Name: Network Enable All Themes
Plugin URI: http://wordpress.org/extend/plugins/network-enable-all-themes/
Description: Enables all themes in multisite. Not for use in a production environment!
Author: Matt Wiebe
Version: 1.1
Author URI: http://somadesign.ca/
License: GPL v2
Network: True
*/


add_filter( 'allowed_themes', 'sd_allowed_themes' );
add_filter( 'pre_site_option_allowedthemes', 'sd_allowed_themes' );

function sd_allowed_themes( $themes ) {
	$themes = array();
	foreach ( wp_get_themes() as $theme ) {
		$themes[ $theme->Stylesheet ] = true;
	}
	return $themes;
}