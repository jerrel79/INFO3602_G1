<?php
    get_header();
?>

<div class="hero-image" style='background-image: url("<?php echo get_theme_file_uri('./images/Recipebook.png');?>)'>
        <div class="hero-text">
          
        </div>
</div>

<div class="container text-center">
        <br>
        <br>
        <br>
            <div class="col-sm-12">
            <h4 style="color: black;"> All Recipes</h4>
            </div>
   
  
       
        <?php
            $args = array (
                'paged' => get_query_var('paged'),
                'post_type'              => 'recipes',
            ); 
            $count = 0;
            $the_query = new WP_Query( $args );

            // The Loop
            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts()) {
                    $the_query->the_post(); 
                    $count++;
                    if($count%3==1){?>
                    <div class="row">
                        <?php } ?>
                    
                    <div class="col-sm-4" style="height: 620px">
                    <div class="card h-100 w-100" style="width: 300px;">
                    <?php the_post_thumbnail($size = 'post-thumbnail', array('class' => 'card-img-top' ) ); ?>
                        <div class="card-body text-left">
                            <h5 class="card-title lead"><?php the_title()?></h5>
                            <p><small>Posted by <?php the_author()?> on <?php the_time('n.j.y')?></small></p>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                        </div>
                    <div class="card-footer text-muted bg-transparent border-top-0">
                        
                    </div>
                    <div class="card-footer text-muted bg-transparent border-top-0">
                       <a href="<?php the_permalink()?>" class="btn btn-info pull-right">Read More</a> 
                    </div>

                    </div>
                    </div>
                                     
                    <?php if($count%3==0){ ?>
                    </div>
                    <?php } 
                    ?>

                    
                    <?php
                        
                }

                        /* Restore original Post Data */
                        wp_reset_postdata();
                    } else {
                       echo "NO POSTS";
                    }
             ?>
        <?php if($count==10 || $count % 10 != 0){?> </div> <?php } ?>

    </div>
<br>


<div class='row pagination' style="padding-left: 16.5%">
<div class = "col-sm-2">
    <?php 
      echo paginate_links();
    ?>
</div>
</div>
<br>

<?php
    get_footer();
?>