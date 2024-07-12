<?php
if ( is_active_sidebar( 'nosotros-decalogue-widget' ) ) {
    $decalogue_widget = get_widget_data( 'nosotros-decalogue-widget' )[0];
    $decalogue_images = get_images_from_folder('assets/imagenes/decalogo/')[1];
    $decalogue_html = generate_decalogue_html($decalogue_widget, $decalogue_images);
}

if ( is_active_sidebar( 'nosotros-faq-widget' ) ) {
    $faq_widget = get_widget_data( 'nosotros-faq-widget' )[0];
    $faq_html = generate_faq_html($faq_widget);
}

get_header(); 
?>
<main>
  <section>
    <div class="boletines-header">
        <p class="boletines-luna">LUNA LIBROS</p>
        <h3 class="boletines-title">Quiénes Somos</h3>
        <?php if ( is_active_sidebar( 'nosotros-title-widget' ) ) { ?>
            <div id="widget-nosotros-title" class="catalogo-description">
            <?php dynamic_sidebar( 'nosotros-title-widget' ); ?>
            </div>
        <?php } ?>
    </div>
  </section>
  <section class="post">
    <div class="post nosotros-section">
        <p class="nosotros-tag">LUNA LIBROS</p>
        <h4 class="nosotros-subtitle">Nuestro Objetivo</h4>
        <?php if ( is_active_sidebar( 'nosotros-objective-widget' ) ) { ?>
            <div id="widget-nosotros-objective" class="nosotros-paragraph">
            <?php dynamic_sidebar( 'nosotros-objective-widget' ); ?>
            </div>
        <?php } ?>
    </div>
    <div class="post nosotros-section">
        <p class="nosotros-tag">LUNA LIBROS</p>
        <h4 class="nosotros-subtitle">Decálogo del Lector lunático</h4>
        <div class="nosotros-grid">            
            <?php if ( is_active_sidebar( 'nosotros-decalogue-widget' ) ) {
                echo $decalogue_html;
            }
            ?>
        </div>
    </div>
    <div class="post nosotros-section">
        <p class="nosotros-tag">LUNA LIBROS</p>
        <h4 class="nosotros-subtitle">Servicios editoriales</h4>
        <?php if ( is_active_sidebar( 'nosotros-editorial-widget' ) ) { ?>
            <div id="widget-nosotros-editorial" class="nosotros-paragraph">
            <?php dynamic_sidebar( 'nosotros-editorial-widget' ); ?>
            </div>
        <?php } ?>
    </div>
    <div class="post nosotros-section">
        <p class="nosotros-tag">LUNA LIBROS</p>
        <h4 class="nosotros-subtitle">Preguntas frecuentes</h4>
        <?php if ( is_active_sidebar( 'nosotros-faq-widget' ) ) { 
            echo $faq_html;
        }
        ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>