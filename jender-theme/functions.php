<?php

/**
 * Registers and enqueues multiple CSS files.
 * 
 * @return void
 */
function add_css() {
   wp_register_style('first', get_template_directory_uri() . '/assets/css/style.css', false,'1.1','all');
   wp_enqueue_style( 'first');

   wp_register_style('header', get_template_directory_uri() . '/assets/css/header.css', false,'1.1','all');
   wp_enqueue_style( 'header');

   wp_register_style('footer', get_template_directory_uri() . '/assets/css/footer.css', false,'1.1','all');
   wp_enqueue_style( 'footer');
   
   wp_register_style('index', get_template_directory_uri() . '/assets/css/index.css', false,'1.1','all');
   wp_enqueue_style( 'index');

   wp_register_style('catalogo', get_template_directory_uri() . '/assets/css/catalogo.css', false,'1.1','all');
   wp_enqueue_style( 'catalogo');

   wp_register_style('interna', get_template_directory_uri() . '/assets/css/interna.css', false,'1.1','all');
   wp_enqueue_style( 'interna');

   wp_register_style('distribucion', get_template_directory_uri() . '/assets/css/distribucion.css', false,'1.1','all');
   wp_enqueue_style( 'distribucion');

   wp_register_style('blog', get_template_directory_uri() . '/assets/css/blog.css', false,'1.1','all');
   wp_enqueue_style( 'blog');

   wp_register_style('noto',"https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400;700&display=swap", false,'1.1','all');
   wp_enqueue_style( 'noto');

   wp_register_style('lato',"https://fonts.googleapis.com/css2?family=Lato&display=swap", false,'1.1','all');
   wp_enqueue_style( 'lato');

}

add_action('wp_enqueue_scripts', 'add_css');

/**
 * Registers and enqueues the necessary JavaScript files.
 *
 * @return void
 */
function add_script() {
   wp_register_script('header-script', get_template_directory_uri() . '/assets/js/header.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'header-script');

   wp_register_script('catalogo-script', get_template_directory_uri() . '/assets/js/catalogo.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'catalogo-script');

   wp_register_script('distribucion-script', get_template_directory_uri() . '/assets/js/distribucion.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'distribucion-script');

   wp_register_script('interna-script', get_template_directory_uri() . '/assets/js/interna.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'interna-script');
}

add_action('wp_enqueue_scripts', 'add_script');

add_theme_support( 'menus' );

/**
 * Retrieves a list of custom post types based on the provided parameters.
 *
 * @param array $fields The fields to retrieve.
 * @param string $post_type The post type to query.
 * @param string $post_status The post status to filter by. Defaults to 'publish'.
 * @param int $post_per_page The number of posts to retrieve per page. Defaults to 10.
 * @param string $order The order in which to retrieve the posts. Defaults to 'ASC'.
 * @param string $order_by The field to order the posts by. Defaults to 'date'.
 * 
 * @return array An array of post objects.
 */
function query_custom_post_types(array $fields, int $post_id = null, $post_type, $post_status = 'publish', $post_per_page = 10, $order = 'ASC', $order_by = 'post_date') {
   $posts = array();

   $args = array (
      'post_type' => $post_type,
      'post_status' => $post_status,
      'posts_per_page' => $post_per_page, 
      'orderby' => $order_by, 
      'order' => $order,
   );

   if ($post_id !== null) {
      $args['p'] = $post_id;
   }

   $query = new WP_Query( $args );

   if ($query->have_posts()) {

      while ($query->have_posts()) {
         $query->the_post();

         // Always include basic post data
         $post_data = array(
            'title' => get_the_title(),
            'permalink' => get_permalink(),
         );

        // Loop through the specified fields and add them to the post data
        foreach ($fields as $field) {
            $post_data[$field] = get_field($field);
        }

        $posts[] = $post_data;
      }
  }
   
   wp_reset_postdata(); // Reset post data to avoid conflicts

  return $posts;
}

/**
 * Query posts IDs based on taxonomy and return the results.
 *
 * @param string $taxonomy The taxonomy to query.
 *
 * @return array A two dimensional array. First index is the taxonomy slug, second index is the IDs of the posts.
 */
function query_posts_ids_by_taxonomy(string $taxonomy) {
   $query_results = array();
   $terms = get_terms(
      array(
         'taxonomy' => $taxonomy, 
         'hide_empty' => false
      )
   );

  foreach ($terms as $term) {
      $args = array(
      'fields' => 'ids',
      'tax_query' => array(
         array(
            'taxonomy' => 'pais',
            'field' => 'slug',
            'terms' => $term->slug,
         ),
      ),
      );

      $term_posts = new WP_Query($args);

      foreach ($term_posts->posts as $post_id) {
         $query_results[$term->name][] = $post_id;
      }
  }

   wp_reset_postdata(); // Reset post data to avoid conflicts

   return $query_results;
}

/**
 * Retrieves a list of posts IDs of a specific post type with pagination.
 *
 * @param string $post_type The post type to query.
 * @param int $post_per_page The number of posts to retrieve per page. Defaults to 10.
 * @param int $paged The current page number. Defaults to 1.
 * @return WP_Query The WP_Query object containing the posts ID information.
 */
function pagination_post_ids($post_type, $post_per_page = 10, $paged = 1) {
   $pagination_data = array();
   $ids_list = array();

   $args = array(
      'post_type' => $post_type,
      'posts_per_page' => $post_per_page,
      'paged' => $paged,
      'fields' => 'ids',
   );

   $posts_data = new WP_Query($args);

   if($posts_data->have_posts()) { 
      $total_pages = $posts_data->max_num_pages;

      foreach($posts_data->posts as $post_id) {
         $ids_list[] = $post_id;
      }
   }

   $pagination_data = array(
      'total_pages' => $total_pages ?? null,
      'ids_list' => $ids_list,
   );

   wp_reset_postdata(); // Reset post data to avoid conflicts

   return $pagination_data;   
}

/**
 * Returns the URL of a default image if the provided image is empty or not an array with a 'url' key.
 *
 * @param array|string $image The image to be checked. It can be an array with a 'url' key or a string.
 * 
 * @return string The URL of the image.
 */
function load_default_image(array|string $image) {
   $default_image = get_template_directory_uri() . '/assets/imagenes/libro.png';

   if (is_array($image) && isset($image['url'])) {
      $image = $image['url'];
   }

   return $image ?: $default_image;
}