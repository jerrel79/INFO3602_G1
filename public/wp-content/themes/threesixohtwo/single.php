<?php
require('header.php');
?>

<?
while(have_posts()){
    the_post();
    
    ?>
    <div>
        <h4><?php the_title(); ?></h4>
        <p> <?php the_content(); ?></p>
    </div>
    <hr>
    <?php
}


?>

<?php
require('footer.php');
?>