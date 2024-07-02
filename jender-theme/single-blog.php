<?php 
/*
Template Name: Single Blog
Template Post Type: blog
*/

// Post ID
$post_id = get_the_ID();
$max_posts = 3;

$query_blog = array('imagen', 'texto', 'topico', 'descripcion');
$blog = query_custom_post_types($query_blog, $post_id, 'blog', 'publish', 2, 'DESC', 'post_date')[0];

// Post Author Information
$user_info = get_userdata(get_post_field('post_author', $post_id));
$full_name = $user_info->first_name . ' ' . $user_info->last_name;
$author_name = !empty(preg_replace('/\s+/', '', $full_name)) ? $full_name : $user_info->nickname;
$author_name = $author_name ?? $user_info->user_login;

get_header(); 
?>
<main>
  <section>
    <div class="boletines-header">
      <p class="boletines-luna">
      <?php 
        foreach ($blog['topico'] as $topic) {
          echo strtoupper($topic->name);
          
          if( next( $blog['topico'] ) ) { 
            echo ' - ';
          }
        }      
      ?>
      </p>
      <h3 class="boletines-title"><?php echo $blog['title'] ?></h3>
      <h4 class="post-author"><?php echo $author_name ?></h4>
      <div class="catalogo-description"><?php echo $blog['descripcion'] ?></div>
    </div>
  </section>
  <section class="post"><?php echo $blog['texto'] ?></section>
</main>
<?php get_footer(); ?>