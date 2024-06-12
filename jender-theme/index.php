<?php 
get_header();

// Catalogo de Libros
$query_books = array('autor', 'isbn', 'portada', 'sinopsis');
$books = query_custom_post_types($query_books, 'libro', 'publish', 3, 'DESC', 'post_date');

// Catalogo de Boletines
$query_bulletins = array('imagen', 'texto');
$bulletins = query_custom_post_types($query_bulletins, 'boletin', 'publish', 2, 'DESC', 'post_date');
?>

<main>
  <section class="presentacion">
    <h1 class="presentacion-title">Somos una casa editorial independiente</h1>
    <p class="presentacion-description">Publicamos poesía, ensayo y crónica</p>
    <div class="presentacion-mas">
      <a href="#" class="presentacion-button-mas">+</a>
      <a href="#" class="presentacion-button-text">Conoce más</a>
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
          <img src="<?php echo $book['portada'] ?>" alt=" " class="img-fluid radius-image boletines-images" />
          <h4 class="boletines-item-title"><?php echo $book['title'] ?></h4>
          <p class="boletines-item-description"><?php echo $book['sinopsis'] ?></p>
        </article>
    <?php } ?>
    </div>
    <a href="#" class="boletines-button">VER TODOS</a> 
  </section>
  <section class="boletines">
    <div class="boletines-header">
      <p class="boletines-luna">LUNA LIBROS</p>
      <h3 class="boletines-title">Nuestros Boletines</h3>
    </div>
    <div class="boletines-articles">
      <?php foreach ($bulletins as $bulletin) { ?>
          <article class="boletines-item">
            <img src="<?php echo $bulletin['imagen'] ?>" alt=" " class="img-fluid radius-image boletines-images" />
            <h4 class="boletines-item-title"><?php echo $bulletin['title'] ?></h4>
            <div class="boletines-item-description">
              <?php echo $bulletin['texto'] ?>
            </div>            
          </article>
      <?php } ?>
    </div>
    <a href="#" class="boletines-button">VER TODOS</a> 
  </section>
  <section class="quote">
    <svg height="100vw" width="100%" class="quote-eclipse">
      <circle cx="50%" cy="100%" r="50%" stroke="white" stroke-width="2" fill="#F8F4F1" />
    </svg>
    <img src="<?php echo get_template_directory_uri() . "/assets/imagenes/quote.png;"; ?>" alt=" " class="quote-img" />
    <h6 class="quote-title">La música es el tiempo presente de los amores imposibles</h6>
    <p class="quote-name">DARÍO JARAMILLO AGUDELO</p>
  </section>    
  <!--TODO: Show-->
  <!-- <section class="newsletter">
    <img src="<?php echo get_template_directory_uri()."/assets/imagenes/luna.png;"; ?>" alt=" " class="newsletter-logo" />
    <h6 class="newsletter-title">Si desea recibir Gozar Leyendo en su correo, solicítelo acá</h6>
    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sodales potenti nascetur volutpat tortor, metus tempus molestie habitant nisi penatibus lacus ultrices non velit etiam lobortis parturient, aliquet rutrum</p>  
    <form action="#" class="newsletter-subscribe">
      <input type="email" class="newsletter-input" placeholder="INGRESA TU CORREO ELECTRÓNICO">
      <input type="submit" value="SUSCRÍBETE" class="newsletter-submit">
    </form>
  </section>    -->
</main>

<?php get_footer(); ?>