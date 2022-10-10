<?php get_header(); ?>
<main>
  <section class="presentacion">
    <h1 class="presentacion-title">Somos una casa editorial independiente</h1>
    <p class="presentacion-description">Publicamos poesía, ensayo y crónica</p>
    <div class="presentacion-mas">
      <a href="#" class="presentacion-button-mas">+</a>
      <a href="#" class="presentacion-button-text">Conoce más</a>
    </div>
    <div class="presentacion-lateral">
      <div>Un nuevo boletín todos los meses</div>
      <div><span>------------------</span>Gozamos leyendo con lectores lunáticos</div>
    </div>
    <div class="presentacion-libros">
      <div class="presentacion-libros-item first"></div>
      <img src="<?php echo get_template_directory_uri() . "/assets/imagenes/libro1.png;"; ?>" alt=" " class="presentacion-libros-item second" />
      <img src="<?php echo get_template_directory_uri() . "/assets/imagenes/libro1.png;"; ?>" alt=" " class="presentacion-libros-item third" />
      <img src="<?php echo get_template_directory_uri() . "/assets/imagenes/libro1.png;"; ?>" alt=" " class="presentacion-libros-item first" />
      <img src="<?php echo get_template_directory_uri() . "/assets/imagenes/libro1.png;"; ?>" alt=" " class="presentacion-libros-item second" />
      <img src="<?php echo get_template_directory_uri() . "/assets/imagenes/libro1.png;"; ?>" alt=" " class="presentacion-libros-item third" />
      <img src="<?php echo get_template_directory_uri() . "/assets/imagenes/libro1.png;"; ?>" alt=" " class="presentacion-libros-item first" />
      <img src="<?php echo get_template_directory_uri() . "/assets/imagenes/libro1.png;"; ?>" alt=" " class="presentacion-libros-item second" />
      <img src="<?php echo get_template_directory_uri() . "/assets/imagenes/libro1.png;"; ?>" alt=" " class="presentacion-libros-item third" />
    </div>
  </section>
  <section class="boletines">
    <div class="boletines-header">
      <p class="boletines-luna">LUNA LIBROS</p>
      <h3 class="boletines-title">Catálogo</h3>
    </div>
    <div class="boletines-articles">
      <article class="boletines-item_catalogo">
        <img src="<?php echo get_template_directory_uri() . "/assets/imagenes/libro.png;"; ?>" alt=" " class="img-fluid radius-image boletines-images" />
        <h4 class="boletines-item-title">Gozar Leyendo #150: Más joven cada día</h4>
        <p class="boletines-item-description">Esta es una descripción del libro o del artículo de máx.<br>  2 líneas.</p>
      </article>
      <article class="boletines-item_catalogo">
        <img src="<?php echo get_template_directory_uri() . "/assets/imagenes/libro.png;"; ?>" alt=" " class="img-fluid radius-image boletines-images" />
        <h4 class="boletines-item-title">Lecturas Lunáticas: Darío Jaramillo Agudelo</h4>
        <p class="boletines-item-description">Esta es una descripción del libro o del artículo de máx.<br>  2 líneas.</p>
      </article>
      <article class="boletines-item_catalogo">
        <img src="<?php echo get_template_directory_uri() . "/assets/imagenes/libro.png;"; ?>" alt=" " class="img-fluid radius-image boletines-images" />
        <h4 class="boletines-item-title">Lecturas Lunáticas: Darío Jaramillo Agudelo</h4>
        <p class="boletines-item-description">Esta es una descripción del libro o del artículo de máx.<br>  2 líneas.</p>
      </article>
    </div>
    <a href="#" class="boletines-button">VER TODOS</a> 
  </section>
  <section class="boletines">
    <div class="boletines-header">
      <p class="boletines-luna">LUNA LIBROS</p>
      <h3 class="boletines-title">Nuestros boletines</h3>
    </div>
    <div class="boletines-articles">
      <article class="boletines-item">
        <img src="<?php echo get_template_directory_uri() . "/assets/imagenes/libro.png;"; ?>" alt=" " class="img-fluid radius-image boletines-images" />
        <h4 class="boletines-item-title">Gozar Leyendo #150: Más joven cada día</h4>
        <p class="boletines-item-description">Esta es una descripción del libro o del artículo de máx.<br>  2 líneas.</p>
      </article>
      <article class="boletines-item">
        <img src="<?php echo get_template_directory_uri() . "/assets/imagenes/libro.png;"; ?>" alt=" " class="img-fluid radius-image boletines-images" />
        <h4 class="boletines-item-title">Lecturas Lunáticas: Darío Jaramillo Agudelo</h4>
        <p class="boletines-item-description">Esta es una descripción del libro o del artículo de máx.<br>  2 líneas.</p>
      </article>
    </div>
    <a href="#" class="boletines-button">VER TODOS</a> 
  </section>
  <section class="quote">
    <svg height="100vw" width="100%" class="quote-eclipse">
      <circle cx="50%" cy="100%" r="50%" stroke="white" stroke-width="2" fill="white" />
    </svg>
    <img src="<?php echo get_template_directory_uri() . "/assets/imagenes/quote.png;"; ?>" alt=" " class="quote-img" />
    <h6 class="quote-title">La música es el tiempo presente de los amores imposibles</h6>
    <p class="quote-name">DARÍO JARAMILLO AGUDELO</p>
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