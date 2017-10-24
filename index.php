<?php get_header(); ?>
    
    

    <header
       style="background-image: url(<?php echo $theme_opt['theme_slider_background']['url']; ?>);">
        <div class="header-content">
            <div class="header-content-inner">
               <?php 
                        $maxim_post_query= null;
                        $maxim_post_query = new WP_Query(array(
                          'post_type' => 'slider',
                          
                        ));  ?>
               
<?php $pre= '_maxim_'; 
    if($maxim_post_query->have_posts()){
        $maxim_post_query->the_post() ?>
<?php $slider_cmb2_post = get_post_meta(get_the_ID(), $pre.'maxim_slider_field', true); ?>
                <?php foreach($slider_cmb2_post as $single_slider){ ?>
                <h1 id="homeHeading">
               <?php echo $single_slider[$pre.'maxim_slider_strong_heading'] ?>
                </h1>
                <hr>
                <p><?php echo $single_slider[$pre.'maxim_slider_normal'] ?></p>
                
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
                <?php } } ?>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <?php 
                        $maxim_post_query= null;
                        $maxim_post_query = new WP_Query(array(
                          'post_type' => 'about',
                          
                        ));  ?>
     <?php if($maxim_post_query->have_posts()){$maxim_post_query->the_post(); 
    
      $about_cmb2_con_title = get_post_meta(get_the_ID(), $pre.'maxim_about_con_strong_title', true);
      $about_cmb2_con = get_post_meta(get_the_ID(), $pre.'maxim_about_con', true);
                                           
    ?> 
           
           
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading"><?php echo $about_cmb2_con_title; ?></h2>
                    <hr class="light">
                    <p class="text-faded"><?php echo $about_cmb2_con; ?></p>
                    <a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Get Started!</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    
        <?php 
         $post_query= null;
        $post_query = new WP_Query(array(
        'post_type' => 'service',
                          
            ));  ?>
            
    <?php  if($post_query->have_posts()){ $post_query->the_post(); ?>
         
         
     <?php
                                                        
    $service_cmb2_title = get_post_meta(get_the_ID(), $pre.'service_section_title', true);
    $service_cmb2_post = get_post_meta(get_the_ID(), $pre.'service_item', true);
                                         
    ?>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?php echo $service_cmb2_title; ?></h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
               
               <?php foreach($service_cmb2_post as $single_service) { ?>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="<?php echo $single_service[ $pre.'service_icon']; ?> text-primary sr-icons"></i>
                        <h3><?php echo $single_service[ $pre.'service_title']; ?></h3>
                        <p class="text-muted"><?php echo $single_service[ $pre.'service_description']; ?></p>
                    </div>
                </div>
                <?php } ?>
                  </div>
    </section>
    <?php } ?>

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <?php 
         $post_query= null;
        $post_query = new WP_Query(array(
        'post_type' => 'work',
                          
            ));  ?>
            
    <?php if($post_query->have_posts()){ $post_query->the_post(); ?>
         
         
     <?php
                                                        
    
    $cmb2_work_item = get_post_meta(get_the_ID(), $pre.'work_item', true);

   
                                         
    ?>
           
            <div class="row no-gutter popup-gallery">
               
               
                <?php foreach($cmb2_work_item as $single_work){ ?>
               
                <div class="col-lg-4 col-sm-6">
                    <a href="<?php echo $single_work[$pre.'work_item_image']; ?>" class="portfolio-box">
                        <img src="<?php echo $single_work[$pre.'work_item_image']; ?>" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    <?php echo $single_work[$pre.'work_item_category']; ?>
                                </div>
                                <div class="project-name">
                                   <?php echo $single_work[$pre.'work_item_title']; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
                <?php } ?>
                
 </div>
            <?php } ?>
        </div>
    </section>                
                
                
                
    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Free Download at Start Bootstrap!</h2>
                <a href="http://startbootstrap.com/template-overviews/creative/" class="btn btn-default btn-xl sr-button">Download Now!</a>
            </div>
        </div>
    </aside>

<?php get_footer(); ?>