<?php
    get_header();
?>
<div class="hero-image-pages" style='background-image: url("<?php echo get_theme_file_uri('./images/pagesBG.jpg');?>)'>
  <div class="hero-text-pages">
    <h1>Recipes</h1>
  </div>
</div>

<?php 
    while(have_posts()){
        the_post();
?>
        <div class="Recipes">
                <div class="row">
                <div class="col-md-4">
                    <div class="image-post">
                        <?php the_post_thumbnail();?>
                    </div>
                </div>
                <div class="col-md-4">
                        <span class="main-article-category"><?php echo get_the_category_list(', ');?></span>
                    </br>
                    <span class="main-article-title"><?php the_title(); ?></span>
                    <br/>
                    <p><?php the_excerpt(); ?></p>
                    
                    <button type="button" class="btn btn-info" id="blogbuttons"><a href="<?php the_permalink();?>">Contiune reading</a></button></br>
                    <span>By <span class="author-name"><?php the_author_posts_link();?></span></span>
                    <p><?php the_time('n.j.y');?></p>
                </div>
        </div>

        

  </div>



<?php
    }
    echo"<div class='pagination'>";
    echo paginate_links();
    echo "</div";
?>


 
    


<?php
    get_footer();
?>