<?php
/**
 * bde Theme Customizer
 *
 * @package bde
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function bde_hide_stuff ( $wp_customize ) {
	// Add Social Media Section
	$wp_customize->remove_section('header_image');
	$wp_customize->remove_section('background_image');
	$wp_customize->remove_section('colors');
	$wp_customize->remove_section('static_front_page');	 
	$wp_customize->remove_section('custom_css');	 
}
add_action( 'customize_register', 'bde_hide_stuff' );

function bde_footer_stuff ( $wp_customize ) {
	$wp_customize->add_section(
		'footer-section',
		array(
			'title' => __( 'Footer Misc', '_s' ),
			'priority' => 25,
			'description' => __( 'Random settings in the footer.', '_s' )
		)
	);

	$wp_customize->add_setting( 'bde_address1' );
	$wp_customize->add_control( 'bde_address1', array('type' => 'text', 'section' => 'footer-section', 'label' => 'Address Line 1', 'settings' => 'bde_address1'));
	$wp_customize->add_setting( 'bde_address2' );
	$wp_customize->add_control( 'bde_address2', array('type' => 'text', 'section' => 'footer-section', 'label' => 'Address Line 2', 'settings' => 'bde_address2')); 
}
add_action( 'customize_register', 'bde_footer_stuff' );

function bde_hero_stuff ( $wp_customize ) {
	$wp_customize->add_section(
		'hero-section',
		array(
			'title' => __( 'Hero Settings', '_s' ),
			'priority' => 21
		)
	);

	$wp_customize->add_setting( 'text_call_to_action');
	$wp_customize->add_control( 'text_call_to_action', array('type' => 'textarea', 'section' => 'hero-section', 'label' => 'Call to Action Big-Text', 'settings' => 'text_call_to_action'));
	$wp_customize->add_setting( 'text_call_to_action2');
	$wp_customize->add_control( 'text_call_to_action2', array('type' => 'textarea', 'section' => 'hero-section', 'label' => 'Call to Action Sub-Text', 'settings' => 'text_call_to_action2'));
}
add_action( 'customize_register', 'bde_hero_stuff' );

function bde_about_section ( $wp_customize ) {
	$wp_customize->add_section(
		'aboutus-section',
		array(
			'title' => __( 'About Us Settings', '_s' ),
			'priority' => 24
		)
	);

	$wp_customize->add_setting( 'text_header_aboutus');
	$wp_customize->add_control( 'text_header_aboutus', array('type' => 'text', 'section' => 'aboutus-section', 'label' => 'About Us Header Text', 'settings' => 'text_header_aboutus'));

	$wp_customize->add_setting( 'textarea_header_aboutus');
	$wp_customize->add_control( 'textarea_header_aboutus', array('type' => 'text', 'section' => 'aboutus-section', 'label' => 'About Us Header Sub-Text', 'settings' => 'textarea_header_aboutus'));

	$wp_customize->add_setting( 'core_value_icon1', array('default' => 'fas fa-flask'));
	$wp_customize->add_control( 'core_value_icon1', array('type' => 'text', 'section' => 'aboutus-section', 'label' => 'Icon 1', 'settings' => 'core_value_icon1'));
	$wp_customize->add_setting( 'core_value_color1', array('default' => '#29B6F6'));
	$wp_customize->add_control( 'core_value_color1', array('type' => 'text', 'section' => 'aboutus-section', 'label' => 'Color 1', 'settings' => 'core_value_color1'));
	$wp_customize->add_setting( 'core_value_title1');
	$wp_customize->add_control( 'core_value_title1', array('type' => 'text', 'section' => 'aboutus-section', 'label' => 'Title 1', 'settings' => 'core_value_title1'));
	$wp_customize->add_setting( 'core_value_text1');
	$wp_customize->add_control( 'core_value_text1', array('type' => 'textarea', 'section' => 'aboutus-section', 'label' => 'Text 1', 'settings' => 'core_value_text1'));

	$wp_customize->add_setting( 'core_value_icon2', array('default' => 'fas fa-rocket'));
	$wp_customize->add_control( 'core_value_icon2', array('type' => 'text', 'section' => 'aboutus-section', 'label' => 'Icon 2', 'settings' => 'core_value_icon2'));
	$wp_customize->add_setting( 'core_value_color2', array('default' => '#EF5350'));
	$wp_customize->add_control( 'core_value_color2', array('type' => 'text', 'section' => 'aboutus-section', 'label' => 'Color 2', 'settings' => 'core_value_color2'));
	$wp_customize->add_setting( 'core_value_title2');
	$wp_customize->add_control( 'core_value_title2', array('type' => 'text', 'section' => 'aboutus-section', 'label' => 'Title 2', 'settings' => 'core_value_title2'));
	$wp_customize->add_setting( 'core_value_text2');
	$wp_customize->add_control( 'core_value_text2', array('type' => 'textarea', 'section' => 'aboutus-section', 'label' => 'Text 2', 'settings' => 'core_value_text2'));

	$wp_customize->add_setting( 'core_value_icon3', array('default' => 'fas fa-leaf'));
	$wp_customize->add_control( 'core_value_icon3', array('type' => 'text', 'section' => 'aboutus-section', 'label' => 'Icon 3', 'settings' => 'core_value_icon3'));
	$wp_customize->add_setting( 'core_value_color3', array('default' => '#66BB6A'));
	$wp_customize->add_control( 'core_value_color3', array('type' => 'text', 'section' => 'aboutus-section', 'label' => 'Color 3', 'settings' => 'core_value_color3'));
	$wp_customize->add_setting( 'core_value_title3');
	$wp_customize->add_control( 'core_value_title3', array('type' => 'text', 'section' => 'aboutus-section', 'label' => 'Title 3', 'settings' => 'core_value_title3'));
	$wp_customize->add_setting( 'core_value_text3');
	$wp_customize->add_control( 'core_value_text3', array('type' => 'textarea', 'section' => 'aboutus-section', 'label' => 'Text 3', 'settings' => 'core_value_text3'));

	$wp_customize->add_setting( 'core_value_icon4', array('default' => 'fas fa-star'));
	$wp_customize->add_control( 'core_value_icon4', array('type' => 'text', 'section' => 'aboutus-section', 'label' => 'Icon 4', 'settings' => 'core_value_icon4'));
	$wp_customize->add_setting( 'core_value_color4', array('default' => '#FFEB3B'));
	$wp_customize->add_control( 'core_value_color4', array('type' => 'text', 'section' => 'aboutus-section', 'label' => 'Color 4', 'settings' => 'core_value_color4'));
	$wp_customize->add_setting( 'core_value_title4');
	$wp_customize->add_control( 'core_value_title4', array('type' => 'text', 'section' => 'aboutus-section', 'label' => 'Title 4', 'settings' => 'core_value_title4'));
	$wp_customize->add_setting( 'core_value_text4');
	$wp_customize->add_control( 'core_value_text4', array('type' => 'textarea', 'section' => 'aboutus-section', 'label' => 'Text 4', 'settings' => 'core_value_text4'));
}
add_action( 'customize_register', 'bde_about_section' );

function bde_social_media_register ( $wp_customize ) {
	// Add Social Media Section
	$wp_customize->add_section(
		'social-media',
		array(
			'title' => __( 'Social Media', '_s' ),
			'priority' => 23,
			'description' => __( 'Come on now, you know what to do with this. It\'ll make icons appear in the footer.', '_s' )
		)
	);

	$wp_customize->add_setting( 'url_twitter' );
	$wp_customize->add_control( 'url_twitter', array('type' => 'text', 'section' => 'social-media', 'label' => 'Twitter', 'settings' => 'url_twitter'));
	$wp_customize->add_setting( 'url_facebook' );
	$wp_customize->add_control( 'url_facebook', array('type' => 'text', 'section' => 'social-media', 'label' => 'Facebook', 'settings' => 'url_facebook'));
	$wp_customize->add_setting( 'url_instagram' );
	$wp_customize->add_control( 'url_instagram', array('type' => 'text', 'section' => 'social-media', 'label' => 'Instagram', 'settings' => 'url_instagram'));
	$wp_customize->add_setting( 'url_linkedin' );
	$wp_customize->add_control( 'url_linkedin', array('type' => 'text', 'section' => 'social-media', 'label' => 'Linked In', 'settings' => 'url_linkedin'));
	$wp_customize->add_setting( 'url_github', array('default' => 'https://github.com/alphster/blue-dot-education-wordpress-theme' ));
	$wp_customize->add_control( 'url_github', array('type' => 'text', 'section' => 'social-media', 'label' => 'Github', 'settings' => 'url_github'));
}
add_action( 'customize_register', 'bde_social_media_register' );

function bde_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'bde_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'bde_customize_partial_blogdescription',
		) );
	}	
}
add_action( 'customize_register', 'bde_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function bde_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function bde_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function bde_customize_preview_js() {
	wp_enqueue_script( 'bde-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'bde_customize_preview_js' );

