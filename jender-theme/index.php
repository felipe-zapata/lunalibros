<?php get_header(); ?>
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
      <? 
        $booksToShow = array (
          0 => 
          array (
            0 => 'Humanidades',
            1 => 'El hombre nómada',
            2 => 'Attali, Jacques',
            3 => 'En este libro, Jacques Attali recorre la historia de la humanidad como no se había hecho hasta hoy. El hombre es nómada desde sus orígenes hace varios millones de años; sólo ha sido sedentario durante un corto período de tiempo y en la actualidad está tratando de convertirse en un nuevo tipo de nómada, que viaja por el mundo sin necesidad de desplazarse.',
            4 => 'Traducción: Elisabeth Lager y Emma Rodríguez\\nÁrea temática: Historia\\n480 páginas\\n13 x 19 cm\\nRústica\\nISBN: 978-958-99206-1-9\\nEnero de 2010\\n$45.000\\nDistribución para América Latina',
            5 => '$ 45.000',
            6 => '',
            7 => '',
          ),
          1 => 
          array (
            0 => 'Humanidades',
            1 => 'Mito o logos. Hacia La República de Platón',
            2 => 'Gaviria Díaz, Carlos',
            3 => 'Este libro es una introducción a la filosofía de Platón y, específicamente, a la que, desde la perspectiva del autor, constituye la obra más acabada del pensamiento platónico: La República. Con ese propósito, se han elegido unos cuantos hitos de lo que podría llamarse el pensamiento preplatónico, imprescindibles para un entendimiento cabal y provechoso de la obra inmensa de Platón.',
            4 => 'Coedición con Editorial Universidad del Rosario\\nÁrea temática: Filosofía\\n136 páginas\\n11 x 17 cm\\nTapa dura\\nISBN: 978-958-57388-5-0\\nAbril de 2013\\n$42.000\\nDistribución mundial: Siglo del Hombre',
            5 => '$ 42.000',
            6 => 'Logo Siglo del hombre\\nhttps://libreriasiglo.com/37942-mito-o-logos-hacia-la-republica-de-platon',
            7 => '',
          ),
          2 => 
          array (
            0 => 'Humanidades',
            1 => 'Egobody. La fábrica del hombre nuevo',
            2 => 'Redeker, Robert',
            3 => 'Egobody, el hombre que confunde su alma y su yo interior con su cuerpo. Es en lo que nos hemos convertido los humanos del siglo XXI. Los antiguos lazos que nos encadenaban unos con otros, que nos tranquilizaban ante el porvenir y nos protegían ante lo desconocido y el vacío del mañana y de la muerte, se han despedazado. Robert Redeker presenta aquí la radiografía de una sociedad a la deriva, con el talento del polemista y la agudeza del filósofo.\\n¿De qué está hecha la carne de este hombre nuevo en tiempos de la industria alimentaria? ¿A qué se parece su cuerpo cuando la publicidad y la comunicación han expulsado el voluntarismo político e ideológico? ¿Qué será de una sociedad en la cual la exaltación de la “mentalidad” ha reemplazado al alma o al yo interior? Robert Redeker se vuelve arqueólogo de nuestro nuevo paisaje mental.',
            4 => 'Traducción: Emma Rodríguez Camacho\\nCoedición con FCE\\nColección: Filosofía\\n152 páginas\\n13,5 x 21 cm\\nRústica\\nISBN: 978-958-38-0216-4\\nMarzo de 2014\\n$48.000\\nDistribución mundial: FCE\\n',
            5 => '$ 48.000',
            6 => 'Logo FCE\\nhttps://www.fondodeculturaeconomica.com/Ficha/9789583802164/F',
            7 => '',
          ),
        );
      ?>
      <h3 class="boletines-title">Catálogo</h3>
    </div>
    <div class="boletines-articles">
    <?php 
      foreach ($booksToShow as $book) {
        echo '<article class="boletines-item_catalogo">';
        echo '<img src="'.get_template_directory_uri()."/assets/imagenes/libro.png;".'" alt=" " class="img-fluid radius-image boletines-images" />';
        echo '<h4 class="boletines-item-title">'.$book[1].'</h4>';
        echo '<p class="boletines-item-description">'.$book[3].'</p>';
        echo '</article>';
      }
    ?>
    </div>
    <a href="#" class="boletines-button">VER TODOS</a> 
  </section>
  <!-- TODO: Show  -->
  <!-- <section class="boletines">
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
  </section> -->
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