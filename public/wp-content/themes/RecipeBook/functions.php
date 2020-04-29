<?php


    function recipe_book_files(){
        wp_enqueue_style('recipeBook_main_styles',get_stylesheet_uri());
        wp_enqueue_style('font-awesome','https://maxcdn.bootstrapcdn.com/font-awesome/ 4.7.0/css/font-awesome.min.css');
        //nickname for our stylesheet

    }

  
    add_action('wp_enqueue_scripts', 'recipe_book_files');
   

    //You can call theme support without creating a function
    //Let's try it
    add_theme_support('custom-background');
    add_theme_support('post-thumbnails');
    add_image_size('recipesLandscape',1280, 1280, true);         
    add_image_size('recipesPortrait',1280, 1280, true);
    add_image_size('tipsLandscape',400, 260, true);         
    add_image_size('tipsPortrait',480, 650, true); 
    add_image_size('bpost2',800, 800, true); 

    function recipes_adjust_queries($query){
        if(!is_admin() AND is_post_type_archive('recipes') AND $query->is_main_query()){
            $query->set('orderby', 'title');
            $query->set('order', 'ASC');
            $query->set('posts_per_page', -1);

            wp_reset_postdata();
        }

        if(!is_admin() AND is_post_type_archive('tips') AND $query->is_main_query()){
            $query->set('orderby', 'title');
            $query->set('order', 'ASC');
            $query->set('posts_per_page', -1);

            wp_reset_postdata();
        }

    }

    set_post_thumbnail_size( 350, 350, false);
    add_filter( 'meta_content', 'wptexturize' );
    add_filter( 'meta_content', 'convert_smilies' );
    add_filter( 'meta_content', 'convert_chars' );
    add_filter( 'meta_content', 'wpautop' );
    add_filter( 'meta_content', 'shortcode_unautop' );
    add_filter( 'meta_content', 'prepend_attachment' );


    function move_comment_field_to_bottom( $fields ) {
        $comment_field = $fields['comment'];
        unset( $fields['comment'] );
        $fields['comment'] = $comment_field;
        return $fields;
    }

    add_filter( 'comment_form_fields', 'move_comment_field_to_bottom' );

?>