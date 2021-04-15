<?php 
  add_theme_support('post-thumbnails');
  add_theme_support('menus');
  add_theme_support('widgets');
  add_theme_support( 'title-tag' );
  

  add_action('after_setup_theme', 'registrera_meny');

  function registrera_meny()
  {
    register_nav_menu('sidebarmeny', 'sidebarmeny');
  }
  
    register_sidebar(
      array(
        'name' => 'Footer Info 1',
        'description' => 'Kort info om sidan i footerfältet',
        'id' => 'footer',
        'before_widget' => '<div class="col-xs-12 col-sm-6 col-md-4">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
      )
    );


    register_sidebar(
      array(
        'name' => 'Footer Info 2',
        'description' => 'Kontakt info om sidan i footerfältet',
        'id' => 'footertwo',
        'before_widget' => '<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
      )
    );
    register_sidebar(
      array(
        'name' => 'Footer Social Media',
        'description' => 'Social media',
        'id' => 'footerthree',
        'before_widget' => '<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">',
        'after_widget' => '</ul></div>',
        'before_title' => '<h4>',
        'after_title' => '</h4><ul class="social">',
      )
    );
  
    register_sidebar(
      array(
        'name' => 'Main Side Bar',
        'description' => 'Social media',
        'id' => 'mainsidebar',
        'class' => 'sidebar'
      )
    );
  

  

  /* Ladda in Css och scripts */
  add_action('wp_enqueue_scripts', 'themeScripts' );
  function themeScripts(){
    wp_enqueue_style('themestyle', get_template_directory_uri(). '/css/style.css');
    wp_enqueue_style('bootstrapstyle', get_template_directory_uri(). '/css/bootstrap.css');
    wp_enqueue_style('fastyle', get_template_directory_uri(). '/css/font-awesome.css');
  }

  add_action('wp_enqueue_scripts', 'myScripts');
  function myScripts(){
    wp_enqueue_script('themescript', get_template_directory_uri(). '/js/script.js',[],false,true);
    wp_enqueue_script('jqueryscript', get_template_directory_uri(). '/js/jquery.js', ['jquery'],false,true);
  }
  
  ?>
