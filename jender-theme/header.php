<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Luna Libros - <?php echo get_the_title($post->ID); ?></title>  
  <?php wp_head(); ?>
</head>
<body>
  <header>
    <div class="topHeader">
      <?php if ( is_active_sidebar( 'header-widget-anuncio' ) ) { ?>
      <div id="header-widget-anuncio" class="topHeader-anuncio">
        <?php dynamic_sidebar( 'header-widget-anuncio' ); ?>
      </div>
      <?php } ?>
      <div class="topHeader-hashtag">#LEOINDEPENDIENTE</div>
    </div>
    <div class="header" id="header">
      <a href="<?php echo get_home_url(); ?>">
        <img src="<?php echo get_template_directory_uri().'/assets/imagenes/logo_luna.png;' ?>" alt="" class="header-logo" />
      </a>
      <div class="header-menuButtonContainer">
        <img src="<?php echo get_template_directory_uri().'/assets/imagenes/menu.svg;' ?>" alt="" id="navMenu-btn" class="header-menuButton show" />
        <img src="<?php echo get_template_directory_uri().'/assets/imagenes/close.svg;' ?>" alt="" id="navMenu-close" class="header-menuClose" />
      </div>
    </div>
    <div id="navigation" class="navigation">
      <ul>
          <li><a class="navigation-link" href="/catalogo">Catálogo</a></li>
          <li><a class="navigation-link" href="/distribucion">Distribución</a></li>
          <li><a class="navigation-link" href="/blog">Blog</a></li>
          <li><a class="navigation-link" href="/nosotros">Nosotros</a></li>
      </ul>
    </div>
  </header>
