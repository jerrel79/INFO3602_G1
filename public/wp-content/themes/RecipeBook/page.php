<?php
    get_header();
?>
<div class="hero-image" style='background-image: url("<?php echo get_theme_file_uri('./images/Recipebook.png');?>)'>
        <div class="hero-text">
          
        </div>
</div>


<div class="FrontBody">  
                <div class="col-sm-12">
                            <div class="light-font">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a class="white-text" href="<?php echo site_url();?>">Home</a></li>
                                    <li class="breadcrumb-item active"><?php the_title()?></li>
                                </ol>

                             </div>
                </div>

        <div class="row">
          <div class="leftcolumn">
          <?php             
              while(have_posts()){          
                  the_post();   
                  ?>

                <section id="AboutSection" class="section-padding about-section">
                    <div class="container">
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="section_title">
                                <h4><?php the_title();?></h4>
                                  <!-- <h2 class="section_main_title">We Provide Easy Recipes for your most interesting food cravings!</h2> -->
                                </div>
                              </div>
                            </div>

                            <div class="">
                              <p>
                                <?php the_content();?>
                             </p>
                            <div class="hgt-20"></div>
                            
                            </div>

                    </div>
        </section>

  <?php
        } 
?>
          </div>
      
        </div>
        
    
  </div>

<?php
    get_footer();
?>
