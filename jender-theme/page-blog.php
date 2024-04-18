<?php get_header(); ?>
<main>
  <section>
    <div class="boletines-header">
      <p class="boletines-luna">LUNA LIBROS</p>
      <h3 class="boletines-title">Blog</h3>
      <div class="catalogo-description">Gozar Leyendo es un boletín quincenal de recomendaciones de libros por parte de Darío Jaramillo Agudelo, recetas para gozar leyendo en comunidad. Lecturas Lunáticas es un boletín mensual de nuestro equipo editorial que recorre los libros de nuestro catálogo. </div>
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
  <section class="newsletter">
    <img src="<?php echo get_template_directory_uri()."/assets/imagenes/luna.png;"; ?>" alt=" " class="newsletter-logo" />
    <h6 class="newsletter-title">Si desea recibir Gozar Leyendo en su correo, solicítelo acá</h6>
    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sodales potenti nascetur volutpat tortor, metus tempus molestie habitant nisi penatibus lacus ultrices non velit etiam lobortis parturient, aliquet rutrum</p>  
    <form action="#" class="newsletter-subscribe">
      <input type="email" class="newsletter-input" placeholder="INGRESA TU CORREO ELECTRÓNICO">
      <input type="submit" value="SUSCRÍBETE" class="newsletter-submit">
    </form>
  </section>   
</main>
<?php get_footer(); ?>