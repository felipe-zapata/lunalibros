<?php
get_header();

// Paginacion
$max_to_show = 3;
$current_page = get_query_var('paged') ? get_query_var('paged') : 1;

// Catalogo de Libros
$query_books = array('autor', 'cover', 'descripcion');
$books = pagination_post_ids('libro', $max_to_show , $current_page);
$total_books_pages = $books['total_pages'];

// Catalogo de Autores
$query_authors = array('foto', 'descripcion', 'libro');
$authors = pagination_post_ids('autor', $max_to_show , $current_page);
$total_authors_pages = $authors['total_pages'];
?>
<main>
  <section class="catalogo">
    <div class="boletines-header">
      <p class="boletines-luna">LUNA LIBROS</p>
      <h3 class="boletines-title">Catálogo</h3>
      <?php if ( is_active_sidebar( 'header-widget-presentacion' ) ) { ?>
      <div id="header-widget-presentacion" class="catalogo-description">
        <?php dynamic_sidebar( 'catalogo-widget' ); ?>
      </div>
      <?php } ?>
      <div class="catalogo-subtitulos">
        <div class="catalogo-subtitulos_activo" id="titulos-btn">Títulos</div>
        <div id="autores-btn">Autores</div>
      </div>
    </div>
    <div class="catalogo-principal catalogo-principal_activo" id="titulos-catalogo">      
      <?php if ($total_books_pages !== null ) {         
        foreach ($books['ids_list'] as $book_id) {           
          $book = query_custom_post_types($query_books, $book_id, 'libro', 'publish', 1, 'DESC', 'post_date')[0];
      ?>
      <article class="boletines-item_catalogo">
        <a href="<?php echo $book['permalink'] ?>" class="boletines-item-link">
          <img src="<?php echo load_default_image($book['cover']) ?>" alt=" " class="img-fluid radius-image boletines-images" />
        </a>
        <a href="<?php echo $book['permalink'] ?>" class="boletines-item-link">
          <h4 class="boletines-item-title"><?php echo $book['title'] ?></h4>
        </a>
        <p class="boletines-item-description"><?php echo $book['descripcion'] ?></p>
      </article>
      <?php 
        } 
      }
      ?>
      <div class="catalogo catalogo-paginacion">
        <?php if ($total_books_pages > 1) {
          $current_page = max(1, get_query_var('paged'));

          echo paginate_links(
            array(
              'base' => get_pagenum_link(1) . '%_%',
              'format' => '/page/%#%',
              'current' => $current_page,
              'total' => $total_books_pages,
              'prev_text' => __('« previo'),
              'next_text' => __('siguiente »'),
            )
          );
        }
        ?>
      </div>      
      <!-- TODO: Fix pagination between authors and books -->
    </div>
    <div class="catalogo-principal" id="autores-catalogo">
      <?php if ($total_authors_pages !== null ) {         
        foreach ($authors['ids_list'] as $author_id) {           
          $author = query_custom_post_types($query_authors, $author_id, 'autor', 'publish', 1, 'DESC', 'post_date')[0];
      ?>
      <article class="boletines-item_catalogo">
        <a href="<?php echo $author['permalink'] ?>" class="boletines-item-link">  
          <img src="<?php echo load_default_image($author['foto']) ?>" alt=" " class="img-fluid radius-image boletines-images" />
        </a>
        <a href="<?php echo $author['permalink'] ?>" class="boletines-item-link">
          <h4 class="boletines-item-title"><?php echo $author['title'] ?></h4>
        </a>
        <p class="boletines-item-description"><?php echo $author['descripcion'] ?></p>
      </article>
      <?php 
        } 
      }
      ?>
      <div class="catalogo catalogo-paginacion">
        <?php if ($total_authors_pages > 1) {
          $current_page = max(1, get_query_var('paged'));

          echo paginate_links(
            array(
              'base' => get_pagenum_link(1) . '%_%',
              'format' => '/page/%#%',
              'current' => $current_page,
              'total' => $total_authors_pages,
              'prev_text' => __('« previo'),
              'next_text' => __('siguiente »'),
            )
          );
        }
        ?>
      </div>      
      <!-- TODO: Fix pagination between authors and books -->
    </div>
  </section>
</main>
<?php get_footer(); ?>