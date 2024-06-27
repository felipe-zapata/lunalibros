<?php 
/*
Template Name: Single Autor
*/

// Post ID
$post_id = get_the_ID();
$max_posts = 3;

// Author information
$query_authors = array('foto', 'descripcion', 'libro');
$author = query_custom_post_types($query_authors, $post_id, 'autor', 'publish', 1, 'DESC', 'post_date');
$author = $author[0];

// Books information
$books = array();
$query_books = array('cover', 'coleccion');

if (!empty($author['libro'])) {
  foreach ($author['libro'] as $book) {
    $books[] = query_custom_post_types($query_books, $book->ID, 'libro', 'publish', 1, 'DESC', 'post_date')[0];
  }
}

// Randomly show $max_posts number of books
shuffle($books);
   
if (count($books) >= $max_posts) {      
  $books = array_slice($books, 0, $max_posts);
}

// Collections information
$collections = array(); 

foreach ($books as $book) {     
  $collections[] = $book['coleccion'];  
}
$collections = get_collections($collections);

get_header();
?>
<pre>
  <?php print_r($author); ?>
</pre>
<main>
  <section class="interna">
    <!-- TODO: responsive for the image -->
    <img class="interna-image" src="<?php echo load_default_image($author['foto']); ?>" alt=" "  />
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
      <h3 class="boletines-title"><?php echo $author['title'] ?></h3>
      <div class="interna-description interna-description_activo interna-description_autor" id="interna-description">
        <?php echo !empty($author['descripcion']) ? htmlspecialchars_decode(nl2br($author['descripcion'])) : '' ?>
      </div>
      <div class="interna-compraTitulo">En Luna Libros ha publicado:</div>
      <div class="interna-compra">
        <!-- TODO: links? dinamicos o fijos? -->
        <?php foreach ($books as $book) { ?>
          <a href="<?php echo $book['permalink']; ?>">
            <img class="interna-author-recommended" src="<?php echo load_default_image($book['cover']); ?>" alt="<?php echo $book['title']; ?>" />
          </a>
        <?php } ?>
        
    </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>