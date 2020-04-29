<?php 

 //registering our post types
 function recipeBook_post_types(){
    register_post_type('recipes',array(
        'supports' => array('title', 'editor','excerpt','custom-fields','thumbnail', 'comments', 'author'),
        'rewrite'=> array('slug' => 'recipe'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Recipes',
            'add_new_item' => 'Add New Recipe',
            'edit_item' => 'Edit Recipe',
            'all_items' => 'All Recipes',
            'singular_name' => 'Recipe',
            

        ),
        'menu_icon' => 'dashicons-carrot'

    ));

    register_post_type('tips',array(
        'supports' => array('title', 'editor','excerpt','custom-fields','thumbnail', 'comments', 'author'),
        'rewrite'=> array('slug' => 'tip'),
        'has_archive' => true,
        'public' => true, 
        'labels' => array(
            'name' => "Recipe Tips",
            'add_new_item' => 'Add New Recipe Tip',
            'edit_item' => 'Edit Recipe Tip',
            'all_items' => 'All Recipe Tips',
            'singular_name' => "Recipe Tip"
        ),
        'menu_icon' => 'dashicons-welcome-learn-more'
    ));
}

add_post_type_support( 'your Custom Post Type Name', 'post-thumbnails' );
add_action('init','recipeBook_post_types');
add_theme_support('post-thumbnails');


?>
