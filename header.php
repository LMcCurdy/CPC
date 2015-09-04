<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>
      <?php
        if( ! is_home() ):
          wp_title( '|', true, 'right' );
        endif;
      ?>
    </title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">  
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/grid.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/pushy.css">  
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/main.css">   
    <!--[if lt IE 9]>
    <script src="<?php bloginfo('template_url'); ?>/js/html5-3.6-respond-1.1.0.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body ontouchstart="">

    
	<!--[if lt IE 7]>
	<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->
    
    <header>
     <h1><?php bloginfo('description'); ?></h1>

        <div id="headstick" class="group stickypanel">
        <nav class="mini">
            <?php wp_nav_menu( array( 'theme_location' => 'minimenu' ) ); ?>
        </nav>
        <nav class="main">
            <div>
                <div class="logo"></div>
                <!-- menu with list elements -->
                <div class="menu-btn">&#9776; Menu</div>
                <div class="desktopnav"><?php wp_nav_menu( array( 'theme_location' => 'mainmenu' ) ); ?></div>
            </div>
        </nav>
    </div>   
</header>
<nav class="pushy pushy-left">
<div id="logo"><img src="http://wecoyorkpa.com/yorkcpc.org/wp-content/themes/cpc_custom_theme/assets/images/logo-flat.jpg" alt="Logo for CPC York PA" /></div>
    <?php wp_nav_menu( array( 'theme_location' => 'mobilemenu' ) ); ?>
</nav>

<!-- Site Overlay -->
<div class="site-overlay"></div>