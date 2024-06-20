<?php get_header(); ?>
<main>
  <section class="interna">
    <!-- TODO: responsive for the image -->
    <img class="interna-image" src="<?php echo get_template_directory_uri() . "/assets/imagenes/interna.png;"; ?>" alt=" "  />
    <div class="interna-text">
      <p class="boletines-luna">HUMANIDADES</p>
      <h3 class="boletines-title">Sobre la fotografía</h3>
      <h4 class="interna-author">Walter Benjamin</h4>
      <div class="interna-subtitulos">
        <div class="interna-subtitulos_activo" id="description-btn">Descripción</div>
        <div id="ficha-btn">Ficha técnica</div>
      </div>
      <div class="interna-description interna-description_activo" id="interna-description">
        Lorem ipsum dolor sit amet consectetur adipiscing elit sodales potenti nascetur volutpat tortor, metus tempus molestie habitant nisi penatibus lacus ultrices non velit etiam lobortis parturient, aliquet rutrum facilisis cubilia porta nec sagittis eget massa varius habitasse, lorem ipsum dolor sit amet consectetur adipiscing elit sodales potenti nascetur volutpat tortor, metus tempus molestie habitant nisi penatibus lacus ultrices non velit etiam lobortis parturient, aliquet rutrum facilisis cubilia porta nec sagittis eget massa varius habitasse, lorem ipsum dolor sit amet 
      </div>
      <div class="interna-description" id="interna-ficha">
        Traducción de José Muñoz Millanes<br />
        Sello: Pre-Textos América<br />
        Colección: Humanidades<br />
        Área temática: Filosofía<br />
        156 páginas<br />
        13 x 19 cm<br />
        Rústica<br />
        ISBN: 978-958-52419-1-6<br />
        Octubre de 2019<br />
        Distribución para Colombia, Ecuador y México
      </div>
      <div class="interna-compraTitulo">Compra en línea</div>
      <div class="interna-compra">
        <!-- TODO: links? dinamicos o fijos? -->
        <img class="interna-compra-image" src="<?php echo get_template_directory_uri() . "/assets/imagenes/compra-logo.png;"; ?>" alt=" " />
        <img class="interna-compra-image" src="<?php echo get_template_directory_uri() . "/assets/imagenes/compra-logo-1.png;"; ?>" alt=" " />
        <img class="interna-compra-image" src="<?php echo get_template_directory_uri() . "/assets/imagenes/compra-logo-2.png;"; ?>" alt=" " />
    </div>
      </div>
    </div>
  </section>
  <section class="interesar">
    <p class="boletines-luna">LUNA LIBROS</p>
    <h3 class="boletines-title">Te puede interesar</h3>
    <div class="interesar-principal">
      <article class="boletines-item_catalogo">
        <img src="<?php echo get_template_directory_uri() . "/assets/imagenes/libro.png;"; ?>" alt=" " class="img-fluid radius-image boletines-images" />
        <h4 class="boletines-item-title">Interesar</h4>
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
  </section>
</main>
<?php get_footer(); ?>