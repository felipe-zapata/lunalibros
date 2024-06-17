<?php get_header(); ?>
<main>
  <section>
    <div class="boletines-header">
      <p class="boletines-luna">LUNA LIBROS</p>
      <h3 class="boletines-title">Blog</h3>
      <?php if ( is_active_sidebar( 'blog-widget' ) ) { ?>
      <div id="blog-widget" class="catalogo-description">
        <?php dynamic_sidebar( 'blog-widget' ); ?>
      </div>
      <?php } ?>
      <div class="catalogo-subtitulos blog-subtitulos">
        <!-- TODO: Filter -->
        <div class="catalogo-subtitulos_activo" id="todos-btn">Todos</div>
        <div id="gozar-btn">Gozar Leyendo</div>
        <div id="lecturas-btn">Lecturas Lunáticas</div>
      </div>
    </div>
  </section>
  <section class="blog">
    <article class=""> 
      <img src="<?php echo get_template_directory_uri() . "/assets/imagenes/libro.png;"; ?>" alt=" " class="img-fluid radius-image boletines-images" />
      <h4 class="boletines-item-title">Títulos</h4>
      <p class="boletines-item-description">Esta es una descripción del libro o del artículo de máx.<br>  2 líneas.</p>
    </article>
    <article class="">
      <img src="<?php echo get_template_directory_uri() . "/assets/imagenes/libro.png;"; ?>" alt=" " class="img-fluid radius-image boletines-images" />
      <h4 class="boletines-item-title">Lecturas Lunáticas: Darío Jaramillo Agudelo</h4>
      <p class="boletines-item-description">Esta es una descripción del libro o del artículo de máx.<br>  2 líneas.</p>
    </article>
    <article class="">
      <img src="<?php echo get_template_directory_uri() . "/assets/imagenes/libro.png;"; ?>" alt=" " class="img-fluid radius-image boletines-images" />
      <h4 class="boletines-item-title">Lecturas Lunáticas: Darío Jaramillo Agudelo</h4>
      <p class="boletines-item-description">Esta es una descripción del libro o del artículo de máx.<br>  2 líneas.</p>
    </article>
      <!-- TODO: Pagination -->
  </section>
<?php get_footer(); ?>