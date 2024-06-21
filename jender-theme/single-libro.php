<?php
/*
Template Name: Single Libro
*/
$post_id = get_the_ID();
$query_books = array('autor', 'cover', 'descripcion', 'coleccion', 'isbn', 'ficha_tecnica', 'pvp', 'compra_en_linea', 'prensa');
$book = query_custom_post_types($query_books, $post_id, 'libro', 'publish', 1, 'DESC', 'post_date');
$book = $book[0];
$price_format = new NumberFormatter('es_CO', NumberFormatter::CURRENCY);
get_header();
?>
<pre>
    <?php print_r($book); ?>
</pre>
<main>
  <section class="interna">
    <!-- TODO: responsive for the image -->
    <img class="interna-image" src="<?php echo load_default_image($book['cover']); ?>" alt=" " />    
    <div class="interna-text">
      <p class="boletines-luna">
        <?php 
        foreach ($book['coleccion'] as $coleccion) { 
          echo strtoupper($coleccion->name);
          if( next( $book['coleccion'] ) ) { 
            echo ' - ';
          }
        }      
        ?>
      </p>
      <h3 class="boletines-title"><?php echo $post->post_title ?></h3>
      <h4 class="interna-author"><?php echo !empty($book['autor']) ? $book['autor'] : '' ?></h4>
      <div class="interna-subtitulos">
        <div class="interna-subtitulos_activo" id="description-btn">Descripción</div>
        <div id="ficha-btn">Ficha técnica</div>
      </div>
      <div class="interna-description interna-description_activo" id="interna-description">
        <?php echo !empty($book['descripcion']) ? htmlspecialchars_decode(nl2br($book['descripcion'])) : '' ?>
      </div>
      <div class="interna-description" id="interna-ficha">
        <?php echo !empty($book['ficha_tecnica']) ? htmlspecialchars_decode(nl2br($book['ficha_tecnica'])) : '' ?>
      </div>
      <div class="interna-compraTitulo">Compra en línea</div>
      <div class="interna-compra">
        <!-- TODO: links? dinamicos o fijos? -->
        <div class="interna-compra-text"><?php echo !empty($book['pvp']) ? $price_format->formatCurrency($book['pvp'], 'COP') : '' ?></div>
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