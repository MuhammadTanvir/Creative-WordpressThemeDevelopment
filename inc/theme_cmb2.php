<?php 

/**
 * Get the bootstrap!
 */
if ( file_exists( __DIR__ . '/cmb2/init.php' ) ) {
  require_once __DIR__ . '/cmb2/init.php';
    
} elseif ( file_exists(  __DIR__ . '/CMB2/init.php' ) ) {
  require_once __DIR__ . '/CMB2/init.php';
}




function theme_cmb2_field_function(){
    $pre= '_maxim_';
    
    $maxim_slider= new_cmb2_box(array(
    'id' => 'maxim_slider_main',
    'title' => 'Maxim Slider Feild',
    'object_types'=> array('slider'),  
    ));
    

    
$slider_main_id =  $maxim_slider->add_field(array(
    'name' => 'Maxim Slider Group Field',
    'id'   => $pre.'maxim_slider_field',
    'type' => 'group',
    ));
    
    $maxim_slider->add_group_field($slider_main_id,  array(
    'name' => 'Maxim Slider Heading',
    'id'   => $pre.'maxim_slider_strong_heading',
    'type' => 'text',
    ));
    $maxim_slider->add_group_field($slider_main_id,  array(
    'name' => 'Maxim Slider Details',
    'id'   => $pre.'maxim_slider_normal',
    'type' => 'text',
    ));
    
 $maxim_about= new_cmb2_box(array(
    'id' => 'maxim_about_main',
    'title' => 'Maxim about Feild',
    'object_types'=> array('about'),  
    ));
    $maxim_about->add_field(array(
    'name' => 'Maxim about Content Title',
    'id'   => $pre.'maxim_about_con_strong_title',
    'type' => 'text',
    ));
    $maxim_about->add_field(array(
    'name' => 'Maxim about Content',
    'id'   => $pre.'maxim_about_con',
    'type' => 'textarea',
    ));
    
    
    

     $exam_service= new_cmb2_box(array(
    'id' => 'exam_service_main',
    'title' => 'Service Feild',
    'object_types'=> array('service'),  
    ));
     $exam_service->add_field(array(
    'name' => 'Service Section Title',
    'id'   => $pre.'service_section_title',
    'type' => 'text',
    )); 
    
    
  $service_main_id =  $exam_service->add_field(array(
    'name' => 'Service Item',
    'id'   => $pre.'service_item',
    'type' => 'group',
    ));
    
     $exam_service->add_group_field($service_main_id,  array(
    'name' => 'Service Icon',
    'id'   => $pre.'service_icon',
    'type' => 'text',
    ));
    
    $exam_service->add_group_field($service_main_id,  array(
    'name' => 'Service Title',
    'id'   => $pre.'service_title',
    'type' => 'text',
    ));
     $exam_service->add_group_field($service_main_id,  array(
    'name' => 'Service Description',
    'id'   => $pre.'service_description',
    'type' => 'textarea',
    ));
        
 
$exam_work= new_cmb2_box(array(
    'id' => 'exam_work_main',
    'title' => 'Work Feild',
    'object_types'=> array('work'),  
    ));
     
    
  $work_main_id =  $exam_work->add_field(array(
    'name' => 'Work Item',
    'id'   => $pre.'work_item',
    'type' => 'group',
    ));
    
    $exam_work->add_group_field($work_main_id,  array(
    'name' => 'Work Item image',
    'id'   => $pre.'work_item_image',
    'type' => 'file',
    ));
    
     $exam_work->add_group_field($work_main_id,  array(
    'name' => 'Work Item Category',
    'id'   => $pre.'work_item_category',
    'type' => 'text',
    ));
    
   $exam_work->add_group_field($work_main_id,  array(
    'name' => 'Work Item Title',
    'id'   => $pre.'work_item_title',
    'type' => 'text',
    ));
    
    

    
  
}
add_action('cmb2_admin_init', 'theme_cmb2_field_function');