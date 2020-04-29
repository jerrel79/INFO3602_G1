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


<div class="container text-center">
       <br>
        <div class="row">
        <div class="col-sm-12">
        <h3 style="color:black;">Recently Added Recipes</h3>
        </div>
        </div>
    
        <div class="row">
      
        <?php
            $args = array (
                'post_type'              => 'recipes',
                'posts_per_page'         => '3',
            );                                             
            $the_query = new WP_Query( $args );

            // The Loop
            if ( $the_query->have_posts() ) {
                
                while ( $the_query->have_posts() ) {
                    $the_query->the_post(); ?>
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

                    <?php
                }

                        /* Restore original Post Data */
                        wp_reset_postdata();
                    } else {
                       echo "NO POSTS";
                    }
             ?>

        </div>  
        <br>
        <div class="col-sm-12"><p class=""> <a href="<?php echo get_post_type_archive_link('recipes'); ?>"> view all recipes</a></p></div>
         


        <div class="row">
            <div class="col-sm-12">
            <h3 style="color:black;">Recently Added Tips</h3>
            </div>
        </div>
        <!- Kitchen Tips Query will go here -->
        <div class="row">
      
        <?php
            $args = array (
                'post_type'              => 'tips',
                'posts_per_page'         => '3',
            );                                                  
            $the_query = new WP_Query( $args );

            // The Loop
            if ( $the_query->have_posts() ) {
                
                while ( $the_query->have_posts() ) {
                    $the_query->the_post(); ?>
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

                    <?php
                }

                        /* Restore original Post Data */
                        wp_reset_postdata();
                    } else {
                       echo "NO POSTS";
                    }

        ?>
        </div>
        <br>
        <div class="col-sm-12"><p class=""> <a href="<?php echo get_post_type_archive_link('tips'); ?>"> view all tips</a></p></div>
         
                  
        <div class="row">
            <div class="col-sm-12">
            <h3 style="color:black;">General Posts</h3>
            </div> 
        </div>
            
        <div class="row">
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
<br>
<br>


<?php
    get_footer();
?>