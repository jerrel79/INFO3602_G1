<?php
    get_header();
?>

<div class="hero-image-pages" style='background-image: url("<?php echo get_theme_file_uri('./images/pagesBG.jpg');?>)'>
        <div class="hero-text-pages">
          <h2><?php the_title(); ?> </h2>
        </div>
    </div>

<div class="container" style="background-color: #F5F5F5; color: #2b2b2b;">
           <div class="row text-center">
               <div class="col-sm-12">
                            <div class="light-font">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a class="white-text" href="<?php echo site_url();?>">Home</a></li>
                                    <li class="breadcrumb-item"><a class="white-text" href="<?php echo get_post_type_archive_link('tips'); ?>">Tips</a></li>
                                    <li class="breadcrumb-item active"><?php the_title()?></li>
                                </ol>

                             </div>
                </div>
            </div>

<?php 
while(have_posts()){          
    the_post();               
    ?>
    

    <div class="row text-center">
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

  <?php 
            $post_id = get_the_ID();
            $tools = get_post_meta($post_id,'tools',true);
            $hack = get_post_meta($post_id,'hack',true);
            #$related = get_post_meta($post_id,'related',true);
            $post_obj = get_field('related');

        ?>
<div class="row text-left d-flex justify-content-center">
     <div class="d-flex justify-content-center"style="width: 50%;">
        <div class="card col-sm-12" style="background-color: #F5F5F5">
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
    </div>
</div>
<div class="row text-left d-flex justify-content-center">
     <div class="d-flex justify-content-center"style="width: 50%;">
        <div class="card col-sm-12" style="background-color: #F5F5F5">
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
    </div>
</div>
<div class="row text-left d-flex justify-content-center">
        <div class="d-flex justify-content-center"style="width: 50%;">
          <div class="card col-sm-12" style="background-color: #F5F5F5">
              <h5 style="color:black;">Recipes To Try With This</h5>
           
              <?php
                  $relatedRecipes = get_field('related');
                  if($relatedRecipes){
                      //start containing tag here
                      //style to portray related recipes


                      //style to portray related recipes
            foreach($relatedRecipes as $recipe){ //for each a post object
              ?>
               <div class="row text-left d-flex justify-content-left">
                   <div class="d-flex justify-content-center"style="width: 50%;">
                       <div class="col-sm-12">
                          <a href="<?php echo get_the_permalink($recipe);?>" style="text-decoration:none;">
                                <?php echo get_the_title($recipe);?>
                            </a>
                       </div>
                   </div>
              </div>
              
                
              <?php
                  }
              }else{
                echo "<p>None to show</p>";
              }
              //end containing tag here
              ?>
            
    </div>
    </div>
    <br><br>
</div>

 
    <?php     
        } 
?>
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
