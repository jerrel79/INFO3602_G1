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
  <div class="rightcolumn">
        <?php 
            $post_id = get_the_ID();
            $recipe_part = get_post_meta($post_id,'recipe_part',true);
            $instructions = get_post_meta($post_id,'how_to_step',true);
            $calories = get_post_meta($post_id,'calories',true);
            $carbs = get_post_meta($post_id,'carbohydrates',true);
            $fats = get_post_meta($post_id,'fats',true);
            $proteins = get_post_meta($post_id,'proteins',true);
            #$fiber = get_post_meta($post_id,'proteins',true);
        ?>
      <div class="card">
          <h5>Ingredients</h5> 

        <p><?php echo apply_filters( 'meta_content', wp_kses_post( $recipe_part) ); ?></p>

      </div>
      <div class="card">
        <h5>Instructions</h5> 
        <p><?php echo apply_filters( 'meta_content', wp_kses_post( $instructions) ); ?></p>
      </div>
      <div class="card">
       <h5>Nutritional Facts</h5> 
            <p><strong>Calories:</strong> <?php echo  $calories ?></p>
            <p><strong>Carbohydrates:</strong> <?php echo  $carbs ?></p>
            <p><strong>Proteins:</strong> <?php echo  $proteins ?></p>
            <p><strong>Fats: </strong><?php echo $fats ?></p>

      </div>
    <div class="card">
        <div class="vertical-menu">
        <a href="<?php echo site_url();?>" class="active">Home</a>
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
<a href="<?php echo get_post_type_archive_link('recipes'); ?>">Back To Recipes</a>
</div>


<?php
    get_footer();
?>
