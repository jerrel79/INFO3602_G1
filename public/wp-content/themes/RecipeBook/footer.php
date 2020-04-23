
    <!-- Footer -->
    <footer>
        <div class="footer-top">
          <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 segment-one md-mb-30 sm-mb-30">
                  <h3>Recipebook</h3>
                  <p>All Your Favourites In One Place</p>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 segment-two md-mb-30 sm-mb-30">
                  <h2>Recipebook</h2>
                  <ul>
                    <li><a href="<?php echo get_post_type_archive_link('recipes'); ?>">Recipes</a></li>
                    <li><a href="<?php echo get_post_type_archive_link('tips');  ?>">Kitchen Tips</a></li>
                  </ul>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 segment-three md-mb-30 sm-mb-30">
                    <h2>Recipebook</h2>
                    <p>The Yummier The Better</p>
                  
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 segment-four md-mb-30 sm-mb-30">
                    <h2>Follow Us</h2>
                      <p>Subscribe To Us</p>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                      
                </div>

            
            </div>
          </div>
        </div> 
    </footer>
    
<?php wp_footer();?>    
</body>
</html>