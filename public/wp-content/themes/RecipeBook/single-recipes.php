<?php
    get_header();
?>

<div class="hero-image-pages" style='background-image: url("<?php echo get_theme_file_uri('./images/RecipeNOT3.jpg');?>)'>
        <div class="hero-text-pages" style="font-weight: 600;">
          <h2><?php the_title(); ?> </h2>
</div>
</div>



<?php              
while(have_posts()){          
    the_post();               
    ?>
    
<div class="container" style="background-color: #F5F5F5; color: #2b2b2b;">
    <div class="row text-center">
                    <div class="col-sm-12">
                            <div class="light-font">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a class="white-text" href="<?php echo site_url();?>">Home</a></li>
                                    <li class="breadcrumb-item"><a class="white-text" href="<?php echo get_post_type_archive_link('recipes'); ?>">Recipes</a></li>
                                    <li class="breadcrumb-item active"><?php the_title()?></li>
                                </ol>

                             </div>
                </div>
                <div class="col-sm-12">
                 <?php the_post_thumbnail($size = 'bpost2', array('class' => 'image' ) ); ?>
                 </div>
    </div>
    <div class="row text-left d-flex justify-content-center">
        <div class="d-flex justify-content-center"style="width: 50%;">
            <div class="col-sm-12">
                <span class="main-article-category" style="color:black;"><?php echo get_the_category_list(', ');?></span></br><br/>
                <p class="recipetext" style="color: #A9A9A9;"><?php the_content();?></p>
                <p> Posted by <?php the_author()?> on <?php the_time('n.j.y')?></p>       
            </div>
        <div class="d-flex justify-content-center">...</div>
        </div>
    </div>

    <div class="row text-center">
                <div class="col-sm-12">
                    <h5> Instructional </h5>
                </div>
    </div>

        
    <div class="row text-left d-flex justify-content-center">
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
        <div class="d-flex justify-content-center"style="width: 50%;">
            <div class="card col-sm-12" style="background-color: #F5F5F5">
                <h5>Ingredients</h5> 
            <p><?php echo apply_filters( 'meta_content', wp_kses_post( $recipe_part) ); ?></p>
        
            </div>
        </div>
    </div>
    
    <div class="row text-left d-flex justify-content-center">
        <div class="d-flex justify-content-center"style="width: 50%;">
          <div class="card col-sm-12" style="background-color: #F5F5F5">
            <h5>Instructions</h5>
            <p><?php echo apply_filters('meta_content', wp_kses_post( $instructions) ); ?></p>
          </div>
        </div>
    </div>
    <div class="row text-left d-flex justify-content-center">
        <div class="d-flex justify-content-center"style="width: 50%;">
          <div class="card col-sm-12" style="background-color: #F5F5F5">
           <h5>Nutritional Facts</h5> 
                <p><strong>Calories:</strong> <?php echo  $calories ?></p>
                <p><strong>Carbohydrates:</strong> <?php echo  $carbs ?></p>
                <p><strong>Proteins:</strong> <?php echo  $proteins ?></p>
                <p><strong>Fats: </strong><?php echo $fats ?></p>
    
          </div>
        </div>
    </div>   
    <br>
    <br>
    <br>
    <?php } ?>
<hr>
<div class="row text-center">
    <div class="col-sm-12">
        <h4 style="color: black;"> Join the Discussion! </h4>
    </div>
</div>
<div class="row text-left d-flex justify-content-center">
    <div class="d-flex justify-content-center" style='width: 50%;'>
        <div class="comments">
        <?php
        $fields =  array(
          'author' =>
              '<input name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .'" size="30" placeholder="'.__('name','text-domain').( $req ? ' (Required)' : '' ).'"/>',
          'email' =>
              '<input name="email" class="form-contro" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .'" size="30" placeholder="'.__('email','text-domain').( $req ? ' (Required)' : '' ).'"/>',
        );
        $args = array(
          'fields'            => apply_filters( 'comment_form_default_fields', $fields ),
          'id_form'           => 'commentform',
          'class_form'        => 'comment-form',
          'id_submit'         => 'submit',
          'class_submit'      => 'submit',
          'name_submit'       => 'submit',
          'submit_button'     => '<input name="%1$s" type="submit" id="%2$s" class="%3$s btn-secondary" value="%4$s" />',
          'title_reply'       => '',
          'title_reply_to'    => __( 'Reply to %s','text-domain' ),
          'cancel_reply_link' => __( 'Cancel comment','text-domain' ),
          'label_submit'      => __( 'Post comment','text-domain' ),
          'format'            => 'xhtml',
          'comment_field'     =>  '<textarea id="comment" name="comment" class="md-textarea form-control text-muted" placeholder="'.__('Comment text','text-domain').'" cols="45" rows="8" aria-required="true">' .'</textarea>',
          'logged_in_as'      => '<p class="logged-in-as"><small>' .
                                sprintf(
                                    __( 'Logged in as %1$s. <a href="%2$s" title="%3$s">%4$s</a>', 'text-domain'),
                                    $user_identity,
                                    wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ),
                                    __('Log out?','text-domain'),
                                    __('Click to log out.','text-domain')
                                ) . '</small></p>',
          'comment_notes_before' => '<p class="comment-notes">' . __( 'Your email address will not be published.','text-domain' ) .'</p>',

        );


        comment_form( $args );
        echo '<br>';
        echo '<br>';
    echo '<div class=""> <h5> Recent Comments </h5>';
    echo '<ol class="commentlist">';
          //Gather comments for a specific page/post 
          $comments = get_comments(array(
            'post_id' => $post->ID,
             'status' => 'approve'
          ));
          wp_list_comments(array(
            'per_page' => 10, // Allow comment pagination
             'reverse_top_level' => false //Show the latest comments at the top of the list
           ), $comments);
          echo '</ol>';
        /*
        if ( comments_open() || '0' != get_comments_number() ) {
          comments_template();
        }*/
        ?>
        </div>
        </div>
    </div>
</div>




<div class="pagination">
<a href="<?php echo get_post_type_archive_link('recipes'); ?>">Back To Recipes</a>
</div>
</div>

<?php
    get_footer();
?>