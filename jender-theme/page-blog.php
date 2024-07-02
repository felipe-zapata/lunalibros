<?php
// Paginacion
$max_to_show = 12;
$current_page = get_query_var('paged') ? get_query_var('paged') : 1;

// Blogs Tabs Structure
$blogs_structure = query_posts_ids_by_taxonomy('topico', array(), -1);

// Catalogo de Blogs
$query_blogs = array('imagen', 'texto', 'topico');
$blogs = pagination_post_ids('blog', $max_to_show , $current_page);
$total_blogs_pages = $blogs['total_pages'];

get_header();
?>

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
        <div class="catalogo-subtitulos_activo" id="blog-todos">Todos</div>        
        <?php foreach ($blogs_structure as $topic => $id) { ?>
        <div id="blog-<?php echo preg_replace('/\s+/', '_', strtolower($topic)); ?>"><?php echo $topic; ?></div>
        <?php } ?>
      </div>
    </div>
  </section>  
  <section class="blog">
    <div class="blog-grid blog-grid_activo" id="blog-grid-todos">
      <?php if ($total_blogs_pages !== null ) {
        foreach ($blogs['ids_list'] as $blog_id) {           
          $blog = query_custom_post_types($query_blogs, $blog_id, 'blog', 'publish', 1, 'DESC', 'post_date')[0];          
      ?>
      <article class="blog-item_catalogo">
        <a href="<?php echo $blog['permalink'] ?>" class="blog-item-link">
          <img src="<?php echo load_default_image($blog['imagen']) ?>" alt=" " class="img-fluid radius-image blog-images" />
        </a>
        <a href="<?php echo $blog['permalink'] ?>" class="boletines-item-link">
          <h4 class="blog-item-title"><?php echo $blog['title'] ?></h4>
        </a>
        <p class="blog-item-description"><?php echo strip_tags($blog['texto']) ?></p>
      </article>
      <?php
        }
      }
      ?>
    </div>
    <?php foreach ($blogs_structure as $topic => $ids) { ?>
    <div class="blog-grid" id="blog-grid-<?php echo preg_replace('/\s+/', '_', strtolower($topic)); ?>">
    <!-- TODO: Links? -->
    <?php foreach ($ids as $id) { 
      $blog = query_custom_post_types($query_blogs, $id, 'blog', 'publish', 1, 'DESC', 'post_date')[0]; 
    ?>
    <article class="blog-item_catalogo <?php echo preg_replace('/\s+/', '_', strtolower($topic)); ?>">
      <a href="<?php echo $blog['permalink'] ?>" class="blog-item-link">
        <img src="<?php echo load_default_image($blog['imagen']) ?>" alt=" " class="img-fluid radius-image blog-images" />
      </a>
      <a href="<?php echo $blog['permalink'] ?>" class="boletines-item-link">
        <h4 class="blog-item-title"><?php echo $blog['title'] ?></h4>
      </a>
      <p class="blog-item-description"><?php echo strip_tags($blog['texto']) ?></p>
    </article>
    <?php } ?>          
    </div>
    <?php } ?>
    <div class="catalogo catalogo-paginacion">
      <?php if ($total_blogs_pages > 1) {
        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(
          array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_blogs_pages,
            'prev_text' => __('« previo'),
            'next_text' => __('siguiente »'),
          )
        );
      }
      ?>
    </div>
    <!-- TODO: Pagination -->
  </section>
</main>
<?php get_footer(); ?>