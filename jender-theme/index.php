<?php 
get_header();

// Catalogo de Libros
$query_books = array('autor', 'cover', 'descripcion');
$books = query_custom_post_types($query_books, null, 'libro', 'publish', 3, 'DESC', 'post_date');

// Catalogo de Boletines
$query_bulletins = array('imagen', 'texto');
$bulletins = query_custom_post_types($query_bulletins, null, 'blog', 'publish', 2, 'DESC', 'post_date');
?>

<main>
  <section class="presentacion">
    <h1 class="presentacion-title">Somos una casa editorial independiente</h1>
    <?php if ( is_active_sidebar( 'header-widget-presentacion' ) ) { ?>
    <div id="widget-area-presentacion" class="presentacion-description">
      <?php dynamic_sidebar( 'header-widget-presentacion' ); ?>
    </div>
    <?php } ?>
    <div class="presentacion-mas">
      <a href="/nosotros" class="presentacion-button-mas">+</a>
      <a href="/nosotros" class="presentacion-button-text">Conoce más</a>
    </div>
    <div class="presentacion-lateral" id="presentacion-lateral">
      <div>Un nuevo boletín todos los meses</div>
      <div><span>------------------</span>Gozamos leyendo con lectores lunáticos</div>
    </div>
    <div class="presentacion-libros">
      <div class="presentacion-libros-item first"></div>
      <img src="<?php echo get_template_directory_uri() . "/assets/imagenes/libro3.png;"; ?>" alt=" " class="presentacion-libros-item second" />
      <img src="<?php echo get_template_directory_uri() . "/assets/imagenes/libro6.png;"; ?>" alt=" " class="presentacion-libros-item third" />
      <img src="<?php echo get_template_directory_uri() . "/assets/imagenes/libro1.png;"; ?>" alt=" " class="presentacion-libros-item first" />
      <img src="<?php echo get_template_directory_uri() . "/assets/imagenes/libro4.png;"; ?>" alt=" " class="presentacion-libros-item second" />
      <img src="<?php echo get_template_directory_uri() . "/assets/imagenes/libro7.png;"; ?>" alt=" " class="presentacion-libros-item third" />
      <img src="<?php echo get_template_directory_uri() . "/assets/imagenes/libro2.png;"; ?>" alt=" " class="presentacion-libros-item first" />
      <img src="<?php echo get_template_directory_uri() . "/assets/imagenes/libro5.png;"; ?>" alt=" " class="presentacion-libros-item second" />
      <img src="<?php echo get_template_directory_uri() . "/assets/imagenes/libro8.png;"; ?>" alt=" " class="presentacion-libros-item third" />
    </div>
  </section>
  <section class="boletines">
    <div class="boletines-header">
      <!--TODO: Change titles, TODO?-->
      <p class="boletines-luna">LUNA LIBROS</p>

      <h3 class="boletines-title">Catálogo</h3>
    </div>
    <div class="boletines-articles">
    <?php foreach ($books as $book) { ?>
        <article class="boletines-item_catalogo">
          <a href="<?php echo $book['permalink'] ?>" class="boletines-item-link">
            <img src="<?php echo load_default_image($book['cover']) ?>" alt=" " class="img-fluid radius-image boletines-images" />
          </a>
          <a href="<?php echo $book['permalink'] ?>" class="boletines-item-link">
            <h4 class="boletines-item-title"><?php echo $book['title'] ?></h4>
          </a>
          <p class="boletines-item-description"><?php echo strip_specific_tags($book['descripcion'], array('p'))  ?></p>
        </article>
    <?php } ?>
    </div>
    <a href="/catalogo" class="boletines-button">VER TODOS</a> 
  </section>
  <section class="boletines">
    <div class="boletines-header">
      <p class="boletines-luna">LUNA LIBROS</p>
      <h3 class="boletines-title">Nuestros Boletines</h3>
    </div>
    <div class="boletines-articles">
      <?php foreach ($bulletins as $bulletin) { ?>
          <article class="boletines-item">
            <a href="<?php echo $bulletin['permalink'] ?>" class="boletines-item-link">
              <img src="<?php echo load_default_image($bulletin['imagen']) ?>" alt=" " class="img-fluid radius-image boletines-images" />
            </a>
            <a href="<?php echo $bulletin['permalink'] ?>" class="boletines-item-link">
              <h4 class="boletines-item-title"><?php echo $bulletin['title'] ?></h4>
            </a>
            <div class="boletines-item-description">
              <?php echo $bulletin['texto'] ?>
            </div>
          </article>
      <?php } ?>
    </div>
    <a href="/blog" class="boletines-button">VER TODOS</a> 
  </section>
  <section class="quote">
    <svg height="100vw" width="100%" class="quote-eclipse">
      <circle cx="50%" cy="100%" r="50%" stroke="white" stroke-width="2" fill="#F8F4F1" />
    </svg>
    <img src="<?php echo get_template_directory_uri() . "/assets/imagenes/quote.png;"; ?>" alt=" " class="quote-img" />
    <h6 class="quote-title">La música es el tiempo presente de los amores imposibles</h6>
    <p class="quote-name">DARÍO JARAMILLO AGUDELO</p>
  </section>
</main>
<?php get_footer(); ?>