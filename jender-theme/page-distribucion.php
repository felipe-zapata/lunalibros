<?php
get_header();

// Pestañas
$distributors_structure = query_posts_ids_by_taxonomy('pais');

// Lista de Distribuidores
$query_distributors = array('ubicacion', 'rrss', 'otro');
$distributors = query_custom_post_types($query_distributors, null, 'distribucion', 'publish', 10, 'DESC', 'post_date');
?>
<main>
  <section class="distribucion">
    <div class="boletines-header">
      <p class="boletines-luna">LUNA LIBROS</p>
      <h3 class="boletines-title">Distribución</h3>
      <?php if ( is_active_sidebar( 'distribucion-widget' ) ) : ?>
      <div id="distribucion-widget" class="catalogo-description">
        <?php dynamic_sidebar( 'distribucion-widget' ); ?>
      </div>
      <?php endif; ?>      
    </div>
    <div class="catalogo-subtitulos distribucion-subtitulos">
      <!-- TODO: Clicks -->
      <div class="catalogo-subtitulos_activo" id="distribucion-todos">Todos</div>
      <?php foreach ($distributors_structure as $country => $id) { ?>
      <div id="distribucion-<?php echo strtolower($country) ?>"><?php echo $country ?></div>
      <?php } ?>
      </div>
    <div class="distribucion-grid distribucion-grid_activo" id="distribucion-grid-todos">
      <!-- TODO: Links? -->
      <?php foreach ($distributors as $distributor) { ?>
        <article class="distribucion-libreria">
          <div class="distribucion-nombre"><?php echo $distributor['title'] ?></div>
          <div class="distribucion-ciudad"><?php echo $distributor['ubicacion'] ?></div>
          <a href="<?php echo $distributor['rrss']['url'] ?>" target="_blank" >
            <div class="distribucion-link">
              <img src="<?php echo get_template_directory_uri() . "/assets/imagenes/instagram.svg;"; ?>" alt=" " class="distribucion-link_icon" />
              <div><?php echo $distributor['rrss']['texto'] ?></div>
            </div>
          </a>
        </article>
      <?php } ?>
    </div>
    <?php foreach ($distributors_structure as $country => $ids) { ?>
    <div class="distribucion-grid" id="distribucion-grid-<?php echo strtolower($country) ?>">
    <!-- TODO: Links? -->
    <?php foreach ($ids as $id) { ?>
      <?php $distributor = query_custom_post_types($query_distributors, $id, 'distribucion', 'publish', 1, 'DESC', 'post_date')[0]; ?>
      <article class="distribucion-libreria">
        <div class="distribucion-nombre"><?php echo $distributor['title'] ?></div>
        <div class="distribucion-ciudad"><?php echo $distributor['ubicacion'] ?></div>
        <a href="<?php echo $distributor['rrss']['url'] ?>" target="_blank" >
          <div class="distribucion-link">
            <img src="<?php echo get_template_directory_uri() . "/assets/imagenes/instagram.svg;"; ?>" alt=" " class="distribucion-link_icon" />
            <div><?php echo $distributor['rrss']['texto'] ?></div>
          </div>
        </a>
      </article>
    <?php } ?>          
    </div>
    <?php } ?>    
  </section>
<?php get_footer(); ?>