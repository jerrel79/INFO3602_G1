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
            <div class="card d-flex justify-content-center">
                <div class="col-md-2">
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
  <div class="rightcolumn">
      <div class="card">
      <h4 style="color:black;">Related Recipes</h4>
            <p>
              <?php
                  $relatedRecipes = get_field('related_news_recipe');
                  if($relatedRecipes){
                      //start containing tag here
                      //style to portray related recipes


                      //style to portray related recipes
                      foreach($relatedRecipes as $recipe){ //for each a post object
              ?>
                        <button type="button" class="btn btn-primary" >
                          <a href="<?php echo get_the_permalink($recipe);?>" style="color:white; text-decoration:none;">
                                <?php echo get_the_title($recipe);?>
                            </a>
                        </button>     
              
                
              <?php
                  }
              }else{
                echo "<p>None to show</p>";
              }
              //end containing tag here
              ?>
            </p>   
      </div>
    <div class="card">
        <div class="vertical-menu">
        <a href="<?php echo get_post_type_archive_link('recipes'); ?>" class="active">Recipes</a>
        <a href="<?php echo get_post_type_archive_link('tips');  ?>">Recipe Tips</a>
        
        </div>
    </div>
  </div>
</div>
     

        
        
        
    
    <?php     
        } 
?>

       



</div>




<div class="pagination">
<a href="<?php echo site_url();?>">Back Home</a>
</div>


<?php
    get_footer();
?>
