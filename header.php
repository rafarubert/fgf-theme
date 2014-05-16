<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr.js"></script>

    <?php wp_head(); ?>
  </head>
  <body>

    <nav class="top-bar" data-topbar>
      <ul class="title-area">
        <li class="name">
          <h1><a href="<?php echo home_url(); ?>">FGF</a></h1>
        </li>
         <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
      </ul>

      <section class="top-bar-section">
        <!-- Left Nav Section -->
        <?php wp_nav_menu( array( 'menu' => 'principal', 'menu_class' => 'left', 'echo' => true, 'depth' => 0)); ?>
      </section>
    </nav>