<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="container headerContainer">
    <h1>
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <div class="main-view-container">

    <svg class="scene" 
         version="1.1" 
         xmlns="http://www.w3.org/2000/svg"
         xmlns:xlink="http://www.w3.org/1999/xlink">
                         
        <svg class="text-container" xmlns="http://www.w3.org/2000/svg" viewBox="50 -200 2708.9 450.5">

          
                              
          <text id="text-content" transform="translate(108.549 223.644)">
            <tspan class="row row-1" x="0" y="0">DANA BUZZEE</tspan>

          
        </svg>

                          
    </svg>


</div>



      </a>
    </h1>

 <div class="desktopNav">   <?php wp_nav_menu( array(
     'container' => false,
     'theme_location' => 'primary'
   )); ?></div>

    <nav>
  
  <input id="nav" type="checkbox" />
  
  <label for="nav">
    <b><i></i><i></i><i></i></b>
  </label>
  
  <menu class="away">
        <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?>
  </menu>
  
</nav>
  </div> <!-- /.container -->
</header><!--/.header-->

