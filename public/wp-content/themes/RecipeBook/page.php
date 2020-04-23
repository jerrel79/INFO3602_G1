<?php
    get_header();
?>
<div class="hero-image-pages" style='background-image: url("<?php echo get_theme_file_uri('./images/pagesBG.jpg');?>)'>
  <div class="hero-text-pages">
    <h1><?php the_title(); ?> </h1>
  </div>
</div>



<div class="FrontBody">        
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
                                <div class="section_subtitle">......</div>
                                  <!-- <h2 class="section_main_title">We Provide Easy Recipes for your most interesting food cravings!</h2> -->
                                </div>
                              </div>
                            </div>

                            <div class="about-item">
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
      
          <div class="rightcolumn">
            <div class="card">
            <div class="vertical-menu">
              <a href="#" class="active">Home</a>
              <a href="<?php echo get_post_type_archive_link('recipes'); ?>">Recipes</a>
              <a href="<?php echo get_post_type_archive_link('tips');  ?>">Recipe Tips</a>
            </div>

            </div>
            
          </div>
        </div>
        
    
  </div>

<?php
    get_footer();
?>
