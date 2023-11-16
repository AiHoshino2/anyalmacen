<?php
function expert_healthcare_general_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'expert_healthcare_general', array(
			'priority' => 31,
			'title' => esc_html__( 'General', 'expert-healthcare' ),
		)
	);

	/*=========================================
	Breadcrumb  Section
	=========================================*/
	$wp_customize->add_section(
		'breadcrumb_setting', array(
			'title' => esc_html__( 'Breadcrumb Section', 'expert-healthcare' ),
			'priority' => 1,
			'panel' => 'expert_healthcare_general',
		)
	);
	
	// Settings 
	$wp_customize->add_setting(
		'breadcrumb_settings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'expert_healthcare_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'breadcrumb_settings',
		array(
			'type' => 'hidden',
			'label' => __('Settings','expert-healthcare'),
			'section' => 'breadcrumb_setting',
		)
	);
	
	// Breadcrumb Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'hs_breadcrumb' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_healthcare_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'hs_breadcrumb', 
		array(
			'label'	      => esc_html__( 'Hide / Show Section', 'expert-healthcare' ),
			'section'     => 'breadcrumb_setting',
			'settings'    => 'hs_breadcrumb',
			'type'        => 'checkbox'
		) 
	);

	/*=========================================
	Archive Layout Section
	=========================================*/
	$wp_customize->add_section(
		'archive_layout_setting', array(
			'title' => esc_html__( 'Archive Layout', 'expert-healthcare' ),
			'priority' => 3,
			'panel' => 'expert_healthcare_general',
		)
	);
	
	// Settings 
	$wp_customize->add_setting(
		'archive_layout_setting'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'expert_healthcare_sanitize_text',
			'priority' => 1,
		)
	);
	// Archive Layout Setting.
	$wp_customize->add_setting(
		'expert_healthcare_archive_layout', array(
			'default'           => 'column-1',
			'sanitize_callback' => 'expert_healthcare_sanitize_select',
		)
	);

	$wp_customize->add_control(
		'expert_healthcare_archive_layout', array(
			'label'   => esc_html__( 'Select Column Layout', 'expert-healthcare' ),
			'section' => 'archive_layout_setting',
			'type'    => 'select',
			'choices' => array(
				'column-1' => __( 'Column 1', 'expert-healthcare' ),
				'column-2' => __( 'Column 2', 'expert-healthcare' ),
				'column-3' => __( 'Column 3', 'expert-healthcare' ),
				'column-4' => __( 'Column 4', 'expert-healthcare' ),
			),
		)
	);

	/*=========================================
	Preloader Section
	=========================================*/
	$wp_customize->add_section(
		'preloader_section_setting', array(
			'title' => esc_html__( 'Preloader', 'expert-healthcare' ),
			'priority' => 3,
			'panel' => 'expert_healthcare_general',
		)
	);

	// Preloader Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_healthcare_preloader_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_healthcare_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);
	
	$wp_customize->add_control(
	'expert_healthcare_preloader_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Preloader', 'expert-healthcare' ),
			'section'     => 'preloader_section_setting',
			'settings'    => 'expert_healthcare_preloader_setting',
			'type'        => 'checkbox'
		) 
	);

	/*=========================================
	Scroll To Top Section
	=========================================*/
	$wp_customize->add_section(
		'scroll_to_top_section_setting', array(
			'title' => esc_html__( 'Scroll To Top', 'expert-healthcare' ),
			'priority' => 3,
			'panel' => 'expert_healthcare_general',
		)
	);

	// Scroll To Top Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_healthcare_scroll_top_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_healthcare_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);
	
	$wp_customize->add_control(
	'expert_healthcare_scroll_top_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Scroll To Top', 'expert-healthcare' ),
			'section'     => 'scroll_to_top_section_setting',
			'settings'    => 'expert_healthcare_scroll_top_setting',
			'type'        => 'checkbox'
		) 
	);
}

add_action( 'customize_register', 'expert_healthcare_general_setting' );