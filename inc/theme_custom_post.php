<?php 

function theme_custom_post(){
    
    register_post_type('slider', array(
    'label' => 'Slider',
    'public' => true,
    'supports' => array('title', 'custom-fields')
    ));
    
   register_post_type('about', array(
    'label' => 'About',
    'public' => true,
    'supports' => array('title', 'thumbnail', 'custom-fields' )
    ));
    
    register_post_type('service', array(
    'label' => 'Service',
    'public' => true,
    'supports' => array('title', 'custom-fields')
    ));
    
  register_post_type('service', array(
    'label' => 'Service',
    'public' => true,
    'supports' => array('title', 'thumbnail', 'custom-fields' )
    ));
    
 register_post_type('work', array(
    'label' => 'Work',
    'public' => true,
    'supports' => array('title', 'thumbnail', 'custom-fields' )
    ));    
    
    
//    register_post_type('footer', array(
//    'label' => 'Footer',
//    'public' => true,
//    'supports' => array('title', 'thumbnail', 'custom-fields' )
//    ));
    
    
}
add_action('init', 'theme_custom_post');