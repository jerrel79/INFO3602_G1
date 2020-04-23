<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">   
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="<?php echo get_theme_file_uri('images/favicon.ico');?>">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php wp_head();?>
    <title>Recipebook</title>
</head>

<body>
      <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <!-- Brand/logo -->
            <a class="navbar-brand" href="<?php echo site_url();?>">Recipebook</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                  <!-- Links -->
                  <ul class="navbar-nav md-auto">
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('/about-us'); ?>">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_post_type_archive_link('recipes'); ?>">Recipes</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_post_type_archive_link('tips');  ?>">Kitchen Tips</a>
                      </li>
                  </ul>
            </div> 
      </nav>
