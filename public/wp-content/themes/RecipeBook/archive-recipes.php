<?php
    get_header();
?>

<div class="hero-image-pages" style='background-image: url("<?php echo get_theme_file_uri('./images/pagesBG.jpg');?>)'>
  <div class="hero-text-pages">
    <h1> Recipes </h1>
  </div>
</div>

<div class="FrontBody">
    <div class="row">
        <div class="leftcolumn">
            <div class="card">
                      <?php              
          while(have_posts()){          
              the_post();               
              ?>
              <div class="Recipes">
                      <div class="row">
                          <div class="col-md-6">
                          <div class="img-responsive HomePostsTips">
                              <?php the_post_thumbnail();?>
                        </div>
                    
                          </div>

                          <div class="col-md-6">
                                <span class="main-article-category"><?php  ?></span>
                              </br>
                              <span class="main-article-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></span>
                              <br/>
                              <p>
                              <?php 
                                  if(has_excerpt()) echo get_the_excerpt(); 
                                  else echo wp_trim_words(get_the_content(),18);
                                ?>
                                
                              </p>

                              <a href="<?php the_permalink(); ?>" class="btn btn-outline-primary" id="TryRecipes" >Try Recipe</a></br></br>
                              <span><span class="author-name">Posted by <?php the_author()?> on <?php the_time('n.j.y')?></span> 
                          </div>
                      </div>
                </div>
                  
              
              <?php     
                  } 
          ?>

            </div>

        </div>

        <div class="rightcolumn">
            <div class="card">
            <div class="vertical-menu">
              <a href="<?php echo site_url();?>" class="active">Home</a>
              <a href="<?php echo get_post_type_archive_link('tips');  ?>">Recipe Tips</a>
            </div>
            </div>

        </div>
    </div>

</div>


<?php 
   
    echo"<div class='pagination'>";
    echo paginate_links();
    echo "</div";
?>     
<?php
    get_footer();
?>