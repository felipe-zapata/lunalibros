<?php
/*
Template Name: Single Libro
*/

// Post ID
$post_id = get_the_ID();
$price_format = new NumberFormatter('es_CO', NumberFormatter::CURRENCY);

// Books information
$query_books = array('autor', 'cover', 'descripcion', 'coleccion', 'isbn', 'ficha_tecnica', 'pvp', 'compra_en_linea', 'prensa');
$book = query_custom_post_types($query_books, $post_id, 'libro', 'publish', 1, 'DESC', 'post_date');
$book = $book[0];

// Recommended books
$recommended_books = similar_book_posts($post_id, 'libro', $query_books, 'coleccion', $book['autor'], $book['coleccion'], 3);

// Authors information
$author = get_authors_by_title(array($book['autor']), array())[0];

// Stores information
$query_stores = array('url', 'logo');
$stores = array();

if (!empty($book['compra_en_linea'])) {
  foreach ($book['compra_en_linea'] as $store) {
    $stores[] = query_custom_post_types($query_stores, $store->ID, 'tienda', 'any', 1, 'DESC', 'post_date')[0];
  }
}

// Collections information
$collections = array(); 
$collections = get_collections(array($book['coleccion']));

get_header();
?>
<main>
  <section class="interna">
    <!-- TODO: responsive for the image -->
    <img class="interna-image" src="<?php echo load_default_image($book['cover']); ?>" alt=" " />    
    <div class="interna-text">
      <p class="boletines-luna">
        <?php 
        foreach ($collections as $collection) {
          echo strtoupper($collection->name);
          
          if( next( $collections ) ) { 
            echo ' - ';
          }
        }      
        ?>
      </p>
      <h3 class="boletines-title"><?php echo $post->post_title ?></h3>
      <h4 class="interna-author">
        <?php if (!empty($author)) { ?>
          <a href="<?php echo $author['permalink']; ?>">
            <?php echo $author['title']; ?>
          </a>
        <?php } else { ?>
          <?php echo $book['autor']; ?>
        <?php } ?>
      </h4>
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
      <?php if (!empty($book['pvp']) || !empty($book['compra_en_linea'])) { ?>
      <div class="interna-compraTitulo">Compra en línea</div>
      <div class="interna-compra">
        <!-- TODO: links? dinamicos o fijos? -->
        <div class="interna-compra-text"><?php echo !empty($book['pvp']) ? $price_format->formatCurrency($book['pvp'], 'COP') : '' ?></div>        
        <?php foreach ($stores as $store) { ?>
          <a href="<?php echo $store['url']; ?>" target="_blank">
            <img class="interna-compra-image" src="<?php echo load_default_image($store['logo']); ?>" alt="<?php echo $store['title']; ?>" />
          </a>
        <?php } ?>
      </div>
      <?php } ?>
    </div>
  </section>
  <section class="interesar">
    <p class="boletines-luna">LUNA LIBROS</p>
    <h3 class="boletines-title">Te puede interesar</h3>
    <div class="interesar-principal">
      <?php foreach ($recommended_books as $recommended_book) { ?>
      <article class="boletines-item_catalogo">
        <a href="<?php echo $recommended_book['permalink'] ?>" class="boletines-item-link">
          <img src="<?php echo load_default_image($recommended_book['cover']) ?>" alt=" " class="img-fluid radius-image boletines-images" />
        </a>
        <a href="<?php echo $recommended_book['permalink'] ?>" class="boletines-item-link">
          <h4 class="boletines-item-title"><?php echo $recommended_book['title'] ?></h4>
        </a>
        <p class="boletines-item-description"><?php echo $recommended_book['descripcion'] ?></p>
      </article>
      <?php } ?>      
    </div>
  </section>
</main>
<?php get_footer(); ?>