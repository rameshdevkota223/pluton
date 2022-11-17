<?php 

 function social_customize_register( $wp_customize ) {
	$wp_customize->add_section( 'social' , array(
		'title'      => ( 'Social link Setting' ),
		'priority'   => 10,
	) );

      /*Facebook link*/
	$wp_customize->add_setting( 'facebook-setting' , array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'theme_supports' => '', // Rarely needed.
		'default' => '',
		'transport' => 'refresh', // or postMessage
		'sanitize_callback' => '',
		'sanitize_js_callback' => '', // Basically to_json.
	) );
	
	$wp_customize->add_control( 'facebook-setting' , array(
		'id'=> 'id',
        'label' => ( 'Facebook link:'),
        'section' => 'social',
	) ) ;

      /*twitter link*/
	$wp_customize->add_setting( 'twitter-setting' , array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'theme_supports' => '', // Rarely needed.
		'default' => '',
		'transport' => 'refresh', // or postMessage
		'sanitize_callback' => '',
		'sanitize_js_callback' => '', // Basically to_json.
	) );
	
	$wp_customize->add_control( 'twitter-setting' , array(
		'id'=> 'id',
        'label' => ( 'Twitter link:'),
        'section' => 'social'
	) ) ;
	
      /*Linkin link*/
	$wp_customize->add_setting( 'linkin-setting' , array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'theme_supports' => '', // Rarely needed.
		'default' => '',
		'transport' => 'refresh', // or postMessage
		'sanitize_callback' => '',
		'sanitize_js_callback' => '', // Basically to_json.
	) );
	
	$wp_customize->add_control( 'linkin-setting' , array(
		'id'=> 'id',
        'label' => ( 'Linkin link:'),
        'section' => 'social',
	) ) ;
	
	

 }
 add_action( 'customize_register', 'social_customize_register' );
 ?>

