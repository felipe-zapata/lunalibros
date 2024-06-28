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

add_theme_support('menus');

/**
 * Adds custom sidebar widgets for the Jender Theme.
 *
 * @return void
 */
function jender_add_sidebar_widgets() {

   $my_sidebars = array(
      array(
         'name'          => 'Header Widget - Presentación',
         'id'            => 'header-widget-presentacion',
         'description'   => 'Text shown in the "presentacion" widget area',
      ),
      array(
         'name'          => 'Header Widget - Anuncio',
         'id'            => 'header-widget-anuncio',
         'description'   => 'Text shown in the "Anuncio" widget area',
      ),
      array(
         'name'          => 'Footer Widget - Newsletter',
         'id'            => 'footer-widget-newsletter',
         'description'   => 'Text shown in the "Newsletter" widget area',
      ),
      array(
         'name'          => 'Catalogo Widget',
         'id'            => 'catalogo-widget',
         'description'   => 'Text shown in the "Catalogo" widget area',
      ),
      array(
         'name'          => 'Distribución Widget',
         'id'            => 'distribucion-widget',
         'description'   => 'Text shown in the "Distribución" widget area',
         ),
      array(
         'name'          => 'Blog Widget',
         'id'            => 'blog-widget',
         'description'   => 'Text shown in the "Blog" widget area',
      ),
      array(
         'name'          => 'Nosotros Widget',
         'id'            => 'nosotros-widget',
         'description'   => 'Text shown in the "Nosotros" widget area',
      ),  
   );

   $defaults = array(
      'name'          => 'Jender Theme Sidebar',
      'id'            => 'jender-theme-sidebar',
      'description'   => 'The Jender Theme Sidebar Widgets',
      'class'         => '',
      'before_widget' => '',
      'after_widget'  => '',
      'before_title'  => '',
      'after_title'   => '',
   );

   foreach( $my_sidebars as $sidebar ) {
      $args = wp_parse_args( $sidebar, $defaults );
      register_sidebar( $args );
   }
}

add_action('widgets_init', 'jender_add_sidebar_widgets');

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

  return $posts ?? null;
}

/**
 * Query posts IDs based on taxonomy and return the results.
 *
 * @param string $taxonomy The taxonomy to query.
 * @param int $max_posts The maximum number of posts to retrieve. Default is 10.
 * @param array $explicit_terms The terms to query. Default is an empty array.
 *
 * @return array A two dimensional array. First index is the taxonomy term name, second index is the IDs of the posts.
 */
function query_posts_ids_by_taxonomy(string $taxonomy, array $explicit_terms = array(), int $max_posts = 10) {
   $query_results = array();

   $terms = get_terms(
      array(
         'taxonomy' => $taxonomy, 
         'hide_empty' => false
      )
   ); 
      
   // Filter the terms array to use the explicit terms
   if(!empty($terms) && !empty($explicit_terms)) {
      
      foreach ($explicit_terms as $explicit) {
         
         foreach ( $terms as $term ) {
            $filtered_terms[] = $term->term_id === $explicit->term_id ? $term : null;
        }
      }

      $terms = array_filter($filtered_terms);
   }

   foreach ($terms as $term) {
      $args = array(
         'fields' => 'ids',
         'posts_per_page' => $max_posts,
         'tax_query' => array(
            array(
               'taxonomy' => $taxonomy,
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
 * Retrieves a list of content from a specific post type that match a given field value.
 *
 * @param array $field The field to search for. Should be an associative array where the key is the meta key and the value is the meta value.
 * @param string $post_type The post type to search in.
 * @param bool $light (Optional) Whether to return only the post IDs. Default is false.
 * @param int $max_posts (Optional) The maximum number of posts to retrieve. Default is 5.
 * 
 * @return array The list of posts that match the given field value.
 */
function query_single_afc_content(array $field, string $post_type, bool $light = false, int $max_posts = 5) {

   $args = array(      
      'posts_per_page' => $max_posts,
      'post_type' => $post_type,
      'meta_key' => key($field),
      'meta_value' => $field[key($field)],
   );

   if ($light) {
      $args['fields'] = 'ids';
   }
   
   $content = get_posts($args);

   wp_reset_query(); // Reset query data to avoid conflicts

   return $content;
}

/**
 * Retrieves similar book posts based on the given parameters.
 *
 * @param string|int $post_id The ID of the current post.
 * @param string $post_type The post type to search in.
 * @param array $fields The fields to query for.
 * @param string $taxonomy The taxonomy to query.
 * @param string $autor The author of the current post.
 * @param array|null $terms_array The terms to query. Default is null.
 * @param int $max_posts The maximum number of posts to retrieve. Default is 3.
 * @return array The list of similar book posts.
 */
function similar_book_posts (string|int $post_id, string $post_type, array $fields, string $taxonomy, string $autor, array $terms_array = null, int $max_posts = 3) {

   $recommendations = array();

   // Loop throug each taxonomy to get the posts IDs which match the taxonomy
   $recommendations = query_posts_ids_by_taxonomy($taxonomy, $terms_array, $max_posts);

   // Get similar posts IDs from the same author
   if(!empty($autor)) {      
      $autor_field = array('autor' => $autor);
      $recommendations[$autor] = query_single_afc_content($autor_field, $post_type, true, $max_posts);
   }

   foreach ($recommendations as &$term) {
      // Remove the current post from the results
      $term = array_diff($term, array($post_id));

      // If $recommendations is larger than $max_posts, take only the first $max_posts elements
      if(count($term) > $max_posts) {
         $term = array_slice($term, 0, $max_posts);
      }
   }

   // Squeeze the $recommendations array
   if (!empty($recommendations)) {
      $recommendations = array_merge(...array_values($recommendations));
      $recommendations = array_unique($recommendations);
      // if $recommendations is larger than $max_posts, take $max_posts elements randomly
      shuffle($recommendations);
   }
   
   if (count($recommendations) >= $max_posts) {      
      $recommendations = array_slice($recommendations, 0, $max_posts);
   } else {
      /**
       * TODO: Improve the logic to get more similar posts
       *      
      while (count($recommendations) < $max_posts) {
         $recommendations[] = query_single_afc_content(['' => ''], $post_type, true, $max_posts - count($recommendations));
         // Remove the current post from the results
         $recommendations = array_diff($recommendations, array($post_id));
         $recommendations = array_unique($recommendations);
         $recommendations = array_slice($recommendations, 0, $max_posts);
      }
       */
   }

   foreach ($recommendations as $key => $value) {
      $recommendations[$key] = query_custom_post_types($fields, $value, $post_type, 'publish', 1, 'DESC','post_date')[0];
   }
   
   return $recommendations;
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
 * @param array|string|null $image The image to be checked. It can be an array with a 'url' key or a string.
 * 
 * @return string The URL of the image.
 */
function load_default_image(array|string|null $image) {
   $default_image = get_template_directory_uri() . '/assets/imagenes/libro.png';

   if (is_array($image) && isset($image['url'])) {
      $image = $image['url'];
   }

   return $image ?: $default_image;
}