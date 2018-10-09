<?php

add_action( 'wp_enqueue_scripts', 'woodmart_child_enqueue_styles', 1000 );

function woodmart_child_enqueue_styles() {
	$version = woodmart_get_theme_info( 'Version' );
	
	if( woodmart_get_opt( 'minified_css' ) ) {
		wp_enqueue_style( 'woodmart-style', get_template_directory_uri() . '/style.min.css', array('bootstrap'), $version );
	} else {
		wp_enqueue_style( 'woodmart-style', get_template_directory_uri() . '/style.css', array('bootstrap'), $version );
	}
    
     wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('bootstrap'), $version );
    
     if( is_front_page() ){
       wp_enqueue_style( 'pater-liquid', get_stylesheet_directory_uri() . '/pater/pater.css');
    
   
    
    wp_enqueue_style( 'demo-liquid', get_stylesheet_directory_uri() . '/css/demo.css');
         

    
    wp_enqueue_style( 'component-liquid', get_stylesheet_directory_uri() . '/css/component.css' );    
    
    wp_enqueue_script( 'demojs', get_stylesheet_directory_uri() . '/js/demo.js', array( 'jquery' ) );     
    wp_enqueue_script( 'pixi', get_stylesheet_directory_uri() . '/js/pixi.min.js');
    
    wp_enqueue_script( 'TweenMax', get_stylesheet_directory_uri() . '/js/TweenMax.min.js');
    

    
    wp_enqueue_script( 'main_js', get_stylesheet_directory_uri() . '/js/main-liquido.js');
     }
  
    
    wp_enqueue_script( 'main_js2', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0', true );
    

}

add_action('wp_enqueue_scripts', 'woodmart_child_enqueue_styles');
