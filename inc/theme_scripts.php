<?php 




function theme_css_and_js(){
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css');
    
    wp_enqueue_style('font-awesome',get_template_directory_uri().'/vendor/font-awesome/css/font-awesome.min.css');
    
    wp_enqueue_style('fonts-googleapis', get_template_directory_uri().'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');
    wp_enqueue_style('fonts', get_template_directory_uri().'https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic');
    
    wp_enqueue_style('magnific', get_template_directory_uri().'/vendor/magnific-popup/magnific-popup.css');
    
   wp_enqueue_style('creative',get_template_directory_uri().'/css/creative.min.css');
    
    wp_enqueue_style('style', get_stylesheet_uri());
    
    
    
wp_enqueue_script('jquery');
	
	wp_enqueue_script('jquery', get_template_directory_uri().'vendor/jquery/jquery.min.js', array('jquery'), 'v-1.2', true);
	
	wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/vendor/vendor/bootstrap/js/bootstrap.min.js/js/bootstrap.min.js', array('jquery'), 'v-1.2', true);
	
	wp_enqueue_script('cdnjs', get_template_directory_uri().'/https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js' , array('jquery'), 'v-1.2', true);
	
	wp_enqueue_script('scrollreveal', get_template_directory_uri().'/vendor/scrollreveal/scrollreveal.min.js' , array('jquery'), 'v-1.2', true);
	
	wp_enqueue_script('magnific-js', get_template_directory_uri().'/vendor/magnific-popup/jquery.magnific-popup.min.js' , array('jquery'), 'v-1.2', true);
	
	wp_enqueue_script('creative-js', get_template_directory_uri().'/js/creative.min.js' , array('jquery'), 'v-1.2', true);
	
	
      
}
add_action('wp_enqueue_scripts', 'theme_css_and_js');

function theme_admin_css_and_js(){
    
      wp_enqueue_style('fons-style', get_template_directory_uri().'/css/font-awesome.css');
}
add_action('admin_enqueue_scripts', 'theme_admin_css_and_js');