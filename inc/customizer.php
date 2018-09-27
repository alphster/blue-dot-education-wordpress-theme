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

$lorips = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
$lorips2 = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";

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
			'priority' => 30,
			'description' => __( 'Random settings in the footer.', '_s' )
		)
	);

	$wp_customize->add_setting( 'bde_address1', array('default' => 'P.O. Box 123456'));
	$wp_customize->add_control( 'bde_address1', array('type' => 'text', 'section' => 'footer-section', 'label' => 'Address Line 1', 'settings' => 'bde_address1'));
	$wp_customize->add_setting( 'bde_address2', array('default' => 'San Diego, CA 92109'));
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

	$wp_customize->add_setting( 'hero_sub_title', array('default' => 'Enhancing Education through Experiences.'));
	$wp_customize->add_control( 'hero_sub_title', array('type' => 'text', 'section' => 'hero-section', 'label' => 'Sub-Title', 'settings' => 'hero_sub_title'));
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

	global $lorips, $lorips2;

	$wp_customize->add_setting( 'text_header_aboutus', array('default' => 'About Us'));
	$wp_customize->add_control( 'text_header_aboutus', array('type' => 'text', 'section' => 'aboutus-section', 'label' => 'About Us Header Text', 'settings' => 'text_header_aboutus'));

	$wp_customize->add_setting( 'textarea_header_aboutus', array('default' => $lorips2));
	$wp_customize->add_control( 'textarea_header_aboutus', array('type' => 'textarea', 'section' => 'aboutus-section', 'label' => 'About Us Header Sub-Text', 'settings' => 'textarea_header_aboutus'));

	$wp_customize->add_setting( 'core_value_icon1', array('default' => 'fas fa-flask'));
	$wp_customize->add_control( 'core_value_icon1', array('type' => 'text', 'section' => 'aboutus-section', 'label' => 'Icon 1', 'settings' => 'core_value_icon1'));
	$wp_customize->add_setting( 'core_value_color1', array('default' => '#29B6F6'));
	$wp_customize->add_control( 'core_value_color1', array('type' => 'text', 'section' => 'aboutus-section', 'label' => 'Color 1', 'settings' => 'core_value_color1'));
	$wp_customize->add_setting( 'core_value_title1', array('default' => 'Science'));
	$wp_customize->add_control( 'core_value_title1', array('type' => 'text', 'section' => 'aboutus-section', 'label' => 'Title 1', 'settings' => 'core_value_title1'));
	$wp_customize->add_setting( 'core_value_text1', array('default' => $lorips));
	$wp_customize->add_control( 'core_value_text1', array('type' => 'textarea', 'section' => 'aboutus-section', 'label' => 'Text 1', 'settings' => 'core_value_text1'));

	$wp_customize->add_setting( 'core_value_icon2', array('default' => 'fas fa-rocket'));
	$wp_customize->add_control( 'core_value_icon2', array('type' => 'text', 'section' => 'aboutus-section', 'label' => 'Icon 2', 'settings' => 'core_value_icon2'));
	$wp_customize->add_setting( 'core_value_color2', array('default' => '#EF5350'));
	$wp_customize->add_control( 'core_value_color2', array('type' => 'text', 'section' => 'aboutus-section', 'label' => 'Color 2', 'settings' => 'core_value_color2'));
	$wp_customize->add_setting( 'core_value_title2', array('default' => 'Exploration'));
	$wp_customize->add_control( 'core_value_title2', array('type' => 'text', 'section' => 'aboutus-section', 'label' => 'Title 2', 'settings' => 'core_value_title2'));
	$wp_customize->add_setting( 'core_value_text2', array('default' => $lorips));
	$wp_customize->add_control( 'core_value_text2', array('type' => 'textarea', 'section' => 'aboutus-section', 'label' => 'Text 2', 'settings' => 'core_value_text2'));

	$wp_customize->add_setting( 'core_value_icon3', array('default' => 'fas fa-leaf'));
	$wp_customize->add_control( 'core_value_icon3', array('type' => 'text', 'section' => 'aboutus-section', 'label' => 'Icon 3', 'settings' => 'core_value_icon3'));
	$wp_customize->add_setting( 'core_value_color3', array('default' => '#66BB6A'));
	$wp_customize->add_control( 'core_value_color3', array('type' => 'text', 'section' => 'aboutus-section', 'label' => 'Color 3', 'settings' => 'core_value_color3'));
	$wp_customize->add_setting( 'core_value_title3', array('default' => 'Stewardship'));
	$wp_customize->add_control( 'core_value_title3', array('type' => 'text', 'section' => 'aboutus-section', 'label' => 'Title 3', 'settings' => 'core_value_title3'));
	$wp_customize->add_setting( 'core_value_text3', array('default' => $lorips));
	$wp_customize->add_control( 'core_value_text3', array('type' => 'textarea', 'section' => 'aboutus-section', 'label' => 'Text 3', 'settings' => 'core_value_text3'));

	$wp_customize->add_setting( 'core_value_icon4', array('default' => 'fas fa-star'));
	$wp_customize->add_control( 'core_value_icon4', array('type' => 'text', 'section' => 'aboutus-section', 'label' => 'Icon 4', 'settings' => 'core_value_icon4'));
	$wp_customize->add_setting( 'core_value_color4', array('default' => '#FFEB3B'));
	$wp_customize->add_control( 'core_value_color4', array('type' => 'text', 'section' => 'aboutus-section', 'label' => 'Color 4', 'settings' => 'core_value_color4'));
	$wp_customize->add_setting( 'core_value_title4', array('default' => 'Something'));
	$wp_customize->add_control( 'core_value_title4', array('type' => 'text', 'section' => 'aboutus-section', 'label' => 'Title 4', 'settings' => 'core_value_title4'));
	$wp_customize->add_setting( 'core_value_text4', array('default' => $lorips));
	$wp_customize->add_control( 'core_value_text4', array('type' => 'textarea', 'section' => 'aboutus-section', 'label' => 'Text 4', 'settings' => 'core_value_text4'));
}
add_action( 'customize_register', 'bde_about_section' );

function bde_team_section ( $wp_customize ) {
	$wp_customize->add_section(
		'team-section',
		array(
			'title' => __( 'Team Settings', '_s' ),
			'priority' => 25
		)
	);

	global $lorips, $lorips2;

	$wp_customize->add_setting( 'text_header_team', array('default' => 'Meet the Team'));
	$wp_customize->add_control( 'text_header_team', array('type' => 'text', 'section' => 'team-section', 'label' => 'Team Header Text', 'settings' => 'text_header_team'));

	$wp_customize->add_setting( 'textarea_header_team', array('default' => $lorips2));
	$wp_customize->add_control( 'textarea_header_team', array('type' => 'textarea', 'section' => 'team-section', 'label' => 'Team Header Sub-Text', 'settings' => 'textarea_header_team'));

	$wp_customize->add_setting( 'team_member_name1', array('default' => 'Andrew Lerario'));
	$wp_customize->add_control( 'team_member_name1', array('type' => 'text', 'section' => 'team-section', 'label' => 'Member Name 1', 'settings' => 'team_member_name1'));
	$wp_customize->add_setting( 'team_member_text1', array('default' => $lorips2));
	$wp_customize->add_control( 'team_member_text1', array('type' => 'text', 'section' => 'team-section', 'label' => 'Member Text 1', 'settings' => 'team_member_text1'));
	$wp_customize->add_setting( 'team_member_pic1');
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'team_member_pic1_control', array(
        'label' => __('Upload Image', 'name-theme'), 'section' => 'team-section', 'settings' => 'team_member_pic1')));

	$wp_customize->add_setting( 'team_member_name2', array('default' => 'Brian Delgado'));
	$wp_customize->add_control( 'team_member_name2', array('type' => 'text', 'section' => 'team-section', 'label' => 'Member Name 2', 'settings' => 'team_member_name2'));
	$wp_customize->add_setting( 'team_member_text2', array('default' => $lorips2));
	$wp_customize->add_control( 'team_member_text2', array('type' => 'text', 'section' => 'team-section', 'label' => 'Member Text 2', 'settings' => 'team_member_text2'));
	$wp_customize->add_setting( 'team_member_pic2');
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'team_member_pic2_control', array(
        'label' => __('Upload Image', 'name-theme'), 'section' => 'team-section', 'settings' => 'team_member_pic2')));

	$wp_customize->add_setting( 'team_member_name3', array('default' => 'Adam Borek'));
	$wp_customize->add_control( 'team_member_name3', array('type' => 'text', 'section' => 'team-section', 'label' => 'Member Name 3', 'settings' => 'team_member_name3'));
	$wp_customize->add_setting( 'team_member_text3', array('default' => $lorips2));
	$wp_customize->add_control( 'team_member_text3', array('type' => 'text', 'section' => 'team-section', 'label' => 'Member Text 3', 'settings' => 'team_member_text3'));
	$wp_customize->add_setting( 'team_member_pic3');
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'team_member_pic3_control', array(
        'label' => __('Upload Image', 'name-theme'), 'section' => 'team-section', 'settings' => 'team_member_pic3')));

	$wp_customize->add_setting( 'team_member_name4', array('default' => 'Wesley Davis'));
	$wp_customize->add_control( 'team_member_name4', array('type' => 'text', 'section' => 'team-section', 'label' => 'Member Name 4', 'settings' => 'team_member_name4'));
	$wp_customize->add_setting( 'team_member_text4', array('default' => $lorips2));
	$wp_customize->add_control( 'team_member_text4', array('type' => 'text', 'section' => 'team-section', 'label' => 'Member Text 4', 'settings' => 'team_member_text4'));
	$wp_customize->add_setting( 'team_member_pic4');
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'team_member_pic4_control', array(
        'label' => __('Upload Image', 'name-theme'), 'section' => 'team-section', 'settings' => 'team_member_pic4')));

	$wp_customize->add_setting( 'team_member_name5', array('default' => 'Mike Strong'));
	$wp_customize->add_control( 'team_member_name5', array('type' => 'text', 'section' => 'team-section', 'label' => 'Member Name 5', 'settings' => 'team_member_name5'));
	$wp_customize->add_setting( 'team_member_text5', array('default' => $lorips2));
	$wp_customize->add_control( 'team_member_text5', array('type' => 'text', 'section' => 'team-section', 'label' => 'Member Text 5', 'settings' => 'team_member_text5'));
	$wp_customize->add_setting( 'team_member_pic5');
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'team_member_pic5_control', array(
        'label' => __('Upload Image', 'name-theme'), 'section' => 'team-section', 'settings' => 'team_member_pic5')));
}
add_action( 'customize_register', 'bde_team_section' );

function bde_social_media_register ( $wp_customize ) {
	// Add Social Media Section
	$wp_customize->add_section(
		'social-media',
		array(
			'title' => __( 'Social Media Settings', '_s' ),
			'priority' => 23,
			'description' => __( 'Come on now, you know what to do with this. It\'ll make icons appear in the footer.', '_s' )
		)
	);

	$wp_customize->add_setting( 'url_twitter', array('default' => 'https://twitter.com'));
	$wp_customize->add_control( 'url_twitter', array('type' => 'text', 'section' => 'social-media', 'label' => 'Twitter', 'settings' => 'url_twitter'));
	$wp_customize->add_setting( 'url_facebook', array('default' => 'https://facebook.com'));
	$wp_customize->add_control( 'url_facebook', array('type' => 'text', 'section' => 'social-media', 'label' => 'Facebook', 'settings' => 'url_facebook'));
	$wp_customize->add_setting( 'url_instagram', array('default' => 'https://instagram.com'));
	$wp_customize->add_control( 'url_instagram', array('type' => 'text', 'section' => 'social-media', 'label' => 'Instagram', 'settings' => 'url_instagram'));
	$wp_customize->add_setting( 'url_linkedin', array('default' => 'https://linkedin.com'));
	$wp_customize->add_control( 'url_linkedin', array('type' => 'text', 'section' => 'social-media', 'label' => 'Linked In', 'settings' => 'url_linkedin'));
	$wp_customize->add_setting( 'url_github', array('default' => 'https://github.com/alphster/blue-dot-education-wordpress-theme' ));
	$wp_customize->add_control( 'url_github', array('type' => 'text', 'section' => 'social-media', 'label' => 'Github', 'settings' => 'url_github'));
}
add_action( 'customize_register', 'bde_social_media_register' );

function bde_contact_us_register ( $wp_customize ) {
	$wp_customize->add_section(
		'contact-us',
		array(
			'title' => __( 'Contact Us Settings', '_s' ),
			'priority' => 26,
			'description' => __( 'Use WP Forms plugin to create a contact form and set the ID here.', '_s' )
		)
	);

	global $lorips, $lorips2;

	$wp_customize->add_setting( 'text_header_contactus', array('default' => 'Let\'s get in Touch!'));
	$wp_customize->add_control( 'text_header_contactus', array('type' => 'text', 'section' => 'contact-us', 'label' => 'Header Text', 'settings' => 'text_header_contactus'));

	$wp_customize->add_setting( 'textarea_header_contactus', array('default' => $lorips2));
	$wp_customize->add_control( 'textarea_header_contactus', array('type' => 'textarea', 'section' => 'contact-us', 'label' => 'Header Sub-Text', 'settings' => 'textarea_header_contactus'));

	$wp_customize->add_setting( 'contact_wpforms_id' );
	$wp_customize->add_control( 'contact_wpforms_id', array('type' => 'text', 'section' => 'contact-us', 'label' => 'WP Form ID', 'settings' => 'contact_wpforms_id'));
}
add_action( 'customize_register', 'bde_contact_us_register' );

function bde_programs_register ( $wp_customize ) {
	$wp_customize->add_section(
		'programs-section',
		array(
			'title' => __( 'Programs/Projects Settings', '_s' ),
			'priority' => 25,
			'description' => __( 'Customize the programs/projects section of the site.', '_s' )
		)
	);

	global $lorips, $lorips2;

	$wp_customize->add_setting( 'text_header_programs', array('default' => 'Our Programs & Projects'));
	$wp_customize->add_control( 'text_header_programs', array('type' => 'text', 'section' => 'programs-section', 'label' => 'Programs Header Text', 'settings' => 'text_header_programs'));

	$wp_customize->add_setting( 'textarea_header_programs', array('default' => $lorips2));
	$wp_customize->add_control( 'textarea_header_programs', array('type' => 'textarea', 'section' => 'programs-section', 'label' => 'Programs Header Sub-Text', 'settings' => 'textarea_header_programs'));
}
add_action( 'customize_register', 'bde_programs_register' );

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

