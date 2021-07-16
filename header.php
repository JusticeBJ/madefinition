<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title('madefinition'); ?></title>
  
  <?php wp_head(); ?>
  
</head>
<body <?php body_class(); ?> > 

  <header class="header">
    <div class="container-fluid container-vw">
      <nav class="navbar navbar-expand-md"> 
        <a class="navbar-brand logo" href="<?php echo site_url();?>">   
          <div class="navbar-brand__container">
            <div class="navbar-brand__content"><span>Ma</span>definition</div>
          </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <div id="hamburger-menu"><span></span><span></span><span></span></div>
        </button>
        <div class="collapse navbar-collapse justify-content-start" id="collapsibleNavbar">
          <?php
            wp_nav_menu(
              array(
                'menu' => 'Main Menu',
                'theme_location' => 'primary',
                'depth' => 2,
                'container' => false,
                'menu_class' => 'navbar-nav',
                'fallback_cb' => 'wp_page_menu',
                'walker' => new wp_bootstrap_navwalker()
              )
            );
          ?>
        </div>
      </nav>
    </div>
  </header>