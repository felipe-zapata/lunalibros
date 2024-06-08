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

<?php	
$posts = get_posts([
  'post_type'  => 'any',
  'title' => 'Inicio',
]);
$header_anuncio = trim(strip_tags($posts[0]->post_content));
$header_anuncio = empty($header_anuncio) ? '¡EGAN BERNAL Y LOS HIJOS DE LA CORDILLERA PRONTO EN LIBRERÍAS!' : $header_anuncio ;
?>

  <header>
    <div class="topHeader">
      <div class="topHeader-anuncio"><?php echo $header_anuncio; ?></div>
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
          <li><a class="navigation-link" href="#0">Catálogo</a></li>
          <li><a class="navigation-link" href="#0">Distribución</a></li>
          <li><a class="navigation-link" href="#0">Blog</a></li>
          <li><a class="navigation-link" href="#0">Nosotros</a></li>
      </ul>
    </div>
  </header>
