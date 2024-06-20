<?php get_header(); ?>
<main>
  <section class="interna">
    <!-- TODO: responsive for the image -->
    <img class="interna-image" src="<?php echo get_template_directory_uri() . "/assets/imagenes/author.png;"; ?>" alt=" "  />
    <div class="interna-text">
      <p class="boletines-luna">HUMANIDADES</p>
      <h3 class="boletines-title">Walter Benjamin</h3>
      <div class="interna-description interna-description_activo interna-description_autor" id="interna-description">
        Walter Benjamin (Berlín, 1892–Port-Bou, Gerona, 1940) es un filósofo y crítico literario alemán de origen judío. Estudió en Berlín, Friburgo y Múnich y se licenció en Berna (1918) con una importante disertación sobre el Concepto de crítica del arte en el Romanticismo alemán. Entre 1923 y 1925 trabajó en un libro sobre el Drama barroco alemán. Influido por el pensamiento de Lukács se acercó al marxismo y en el invierno de 1926 se instaló en Moscú. Volvió a Alemania, y tras abandonar Berlín a la llegada al poder del nazismo, se instaló en París. Tras la invasión de Francia fue bloqueado en la frontera española en su huida hacia Estados Unidos y, temiendo ser entregado a los alemanes, se suicidó en Port-Bou.
      </div>
      <div class="interna-compraTitulo">En Luna Libros ha publicado:</div>
      <div class="interna-compra">
        <!-- TODO: links? dinamicos o fijos? -->
        <img class="interna-compra-image" src="<?php echo get_template_directory_uri() . "/assets/imagenes/author-0.png;"; ?>" alt=" " />
        <img class="interna-compra-image" src="<?php echo get_template_directory_uri() . "/assets/imagenes/author-1.png;"; ?>" alt=" " />
        <img class="interna-compra-image" src="<?php echo get_template_directory_uri() . "/assets/imagenes/author-2.png;"; ?>" alt=" " />
    </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>