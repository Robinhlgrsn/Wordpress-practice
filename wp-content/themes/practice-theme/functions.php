<?php 
  add_theme_support('post-thumbnails');
  add_theme_support('menus');
  
  


  /* Ladda in Css och scripts */
  add_action('wp_enqueue_scripts', 'themeScripts' );
  function themeScripts(){
    wp_enqueue_style('themestyle', get_template_directory_uri(). '/style.css');
    wp_enqueue_style('bootstrapstyle', get_template_directory_uri(). '/css/bootstrap.css');
    wp_enqueue_style('fastyle', get_template_directory_uri(). '/css/font-awesome.css');
    wp_enqueue_script('themescript', get_template_directory_uri(). 'js/script.js', [], false ,true );
    wp_enqueue_script('jqueryscript', get_template_directory_uri(). 'js/jquery.js', [], false ,true );
  }
  
  ?>
