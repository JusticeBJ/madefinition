<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title('madefinition'); ?></title>
  
  <?php wp_head(); ?>
  
</head>
<body <?php body_class(); ?> > 


<?php
  $color= strtolower(get_field('page_color'));
  if(!empty($color)){
    $print_color= $color;
  }
  else{
    $print_color= 'black';
  }
?> 

<header class="header <?php echo $print_color; ?>">

    <div class="container-fluid gutter8">
      <div class="header__content">
       
        <div class="header__logo">
          <a href="<?php echo site_url();?>"  class="logo">   
            <div class="stage">
              <div class="layer"><h2 class="logo-h2"><span>Ma</span>definition</h2></div>
            </div>
          </a>
        </div>
         
        <div class="header__text">
          <div class="header__menu  menu-hide">
            <?php wp_nav_menu(array('theme_location'=>'primary')); ?> 
          </div>

          <div class="menu-button">
            <div id="menu-container">
              <div id="menu-wrapper-text">Menu</div>
              <div id="menu-wrapper">
                <div id="hamburger-menu"><span></span><span></span><span></span></div>
              </div>
            </div>
          </div>
              
          <?php
            wp_nav_menu(array(
            'menu' => 'Main Menu',
            'theme_location' => 'primary',
            'depth' => 2,
            'container' => false,
            'menu_class' => 'nav navbar-nav menu-list',
            'fallback_cb' => 'wp_page_menu',
            'walker' => new wp_bootstrap_navwalker())
            );
          ?>

        </div>

      </div>
    </div>
</header>