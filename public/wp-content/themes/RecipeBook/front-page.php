<?php
    get_header();
?>


<?php //Body of index page?>

<!-- hero image -->
<div class="hero-image" style='background-image: url("<?php echo get_theme_file_uri('./images/Recipebook.png');?>)'>
        <div class="hero-text">
          
        </div>
</div>
<!-- hero image -->


<div class="FrontBody">
        <h3 style="color:black; padding-bottom:2px; font-family:Comic Sans MS, cursive, sans-serif;">Recipes</h3> 
        
        <div class="row" style="padding-top: 0px;">
          <div class="leftcolumn">
                <?php 
                    $PostsTest = new WP_Query(array(
                      'posts_per_page'=> 2,
                      'post_type' => 'recipes',
                      'order_by' => 'title',
                      'order' => 'ASC' 
                      
                    ));

                    while($PostsTest->have_posts()){
                      $PostsTest->the_post();
                  ?>
        
                <div class="card">
                    <h2 style="color:black; "><?php the_title();?></h2>
                    <h5><?php echo the_date();?></h5>
                        
                        <div class="HomePosts" >
                          <?php the_post_thumbnail();?>
                        </div>
                    
                    
                    
                    <p> <?php the_excerpt();?> <a href="<?php the_permalink(); ?>" class="btn btn-outline-info">Try Recipe</a></p>
                    <p> Posted by <?php the_author()?> on <?php the_time('n.j.y')?></p>
                    
                </div>
              <?php
              }
              wp_reset_postdata();
             ?>
           
            
          </div>
      
          <div class="rightcolumn">
          <h3 style="color:black; padding-bottom:2px; padding-left:80px; font-family:Comic Sans MS, cursive, sans-serif;">Recipe Tips</h3> 
            <?php 
                    $PostsTest = new WP_Query(array(
                      'posts_per_page'=> 3,
                      'post_type' => 'tips',
                      'order_by' => 'title',
                      'order' => 'ASC' 
                      
                    ));

                    while($PostsTest->have_posts()){
                      $PostsTest->the_post();
                  ?>
        
                <div class="card">
                    <h2 style="color:black;"><?php the_title();?></h2>
                    <h5><?php echo the_date();?></h5>                        
                        <div class="HomePostsTips">
                          <img class="img-responsive" src="<?php the_post_thumbnail_url('tipsLandscape');?>" />

                        </div>
                    
                    
                    <p> <?php the_excerpt();?> <a href="<?php the_permalink(); ?>" class="btn btn-outline-info">Read More</a></p>
                    <p> Posted by <?php the_author()?> on <?php the_time('n.j.y')?> </p>
                    
                </div>
              <?php
              }
              wp_reset_postdata();
             ?>
                        
          </div>
        </div>

        <div class="row">
        <h1 style="width:100%; padidng:4px;">General News</h1>
                
      <?php
          $args = array (
              'post_type'              => 'post',
              'posts_per_page'         => '3',
          );                                             
          $the_query = new WP_Query( $args );

          // The Loop
          if ( $the_query->have_posts() ) {
              
              while ( $the_query->have_posts() ) {
                  $the_query->the_post(); ?>
                  <div class="col-sm-4" style="height: 620px">
                  <div class="card h-100 w-100" style="width: 300px;">
                  <span class="main-article-category" style="color:black;"><?php echo get_the_category_list(', ');?></span>
                  
                      <div class="card-body text-left">
                          <h5 class="card-title lead"><?php the_title()?></h5>
                          <p class="card-text"><?php the_excerpt(); ?></p>
                      </div>
                  <div class="card-footer text-muted bg-transparent border-top-0">
                      <a href="<?php the_permalink()?>" class="btn btn-info pull-right">Read More</a>
                  </div>
                  <div class="card-footer text-muted bg-transparent border-top-0">
                      <div class="views"><p class="small text-muted text-right "> Posted by <?php the_author()?> on <?php the_time('n.j.y')?> </p></div>
                  </div>

                  </div>
                  </div>

                  <?php
              }

                      /* Restore original Post Data */
                      wp_reset_postdata();
                  } else {
                     echo "NO POSTS";
                  }

      ?>
     
      </div>
     
  </div>



<?php
    get_footer();
?>