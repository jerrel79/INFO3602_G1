<?php
    get_header();
?>

<div class="hero-image-pages" style='background-image: url("<?php echo get_theme_file_uri('./images/pagesBG.jpg');?>)'>
        <div class="hero-text-pages">
          <h2><?php the_title(); ?> </h2>
        </div>
    </div>
<div class="FrontBody">
<?php              
while(have_posts()){          
    the_post();               
    ?>
    

    <div class="row">
  <div class="leftcolumn">
            <div class="card">
                <div class="col-md-4">
                <div class="HomePostsTips">
                          <?php the_post_thumbnail();?>
                        </div>
                    
                </div>

                                
                <span class="main-article-category" style="color:black;"><?php echo get_the_category_list(', ');?></span></br><br/>
                                    <p>
                                        <?php the_content();?>
                                    </p>
                                    <p> Posted by <?php the_author()?> on <?php the_time('n.j.y')?></p>       
                </div>


  </div>
  <?php 
            $post_id = get_the_ID();
            $tools = get_post_meta($post_id,'tools',true);
            $hack = get_post_meta($post_id,'hack',true);
            $related = get_post_meta($post_id,'related',true);

        ?>
  <div class="rightcolumn">
      <div class="card">
        <h5>Kitchen Tools</h5> 
        <?php
             if($tools){
                 echo apply_filters( 'meta_content', wp_kses_post( $tools) ); 
            }
            else{
              echo "<p>None to show sorry</p>";
            }
        ?>
      </div>
      <div class="card">
        <h5>Kitchen Hacks</h5>
        <?php
          if($hack){
            echo apply_filters( 'meta_content', wp_kses_post( $hack) ); 
          }
          else{
            echo "<p>None to show sorry</p>";
          }

        ?>
      </div>

      <div class="card">
          <h5 style="color:black;">Recipes To Try With This</h5>
            <p>
              <?php

                  if($related){
                        $post = $related;
                        setup_postdata( $post );

              ?>

                          <a href="<?php echo get_the_permalink($post);?>" style="color: blue; text-decoration:none;">
                                <?php echo get_the_title($post); 
                                     wp_reset_postdata();?>
                            </a>



              <?php
                  }
              else{
                echo "<p>None to show</p>";
              }
              //end containing tag here
              ?>
            </p>
      </div>
    <div class="card">
        <div class="vertical-menu">
        <a href="<?php echo site_url();?>" class="active">Home</a>
        <a href="<?php echo get_post_type_archive_link('recipes');  ?>">Recipes</a>

        </div>
    </div>
  </div>
</div>
     

        
        
        
    
    <?php     
        } 
?>

       



</div>




<div class="pagination">
<a href="<?php echo get_post_type_archive_link('tips'); ?>">Back To Recipe Tips</a>
</div>


<?php
    get_footer();
?>
