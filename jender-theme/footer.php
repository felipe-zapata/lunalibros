<footer class="footer">
  <section class="newsletter">
    <img src="<?php echo get_template_directory_uri()."/assets/imagenes/luna.png;"; ?>" alt=" " class="newsletter-logo" />
    <h6 class="newsletter-title">Si desea recibir Gozar Leyendo en su correo, solicítelo acá</h6>
    <?php if ( is_active_sidebar( 'footer-widget-newsletter' ) ) : ?>
      <div id="widget-area-footer" class="footer-widget-newsletter">
        <?php dynamic_sidebar( 'footer-widget-newsletter' ); ?>
      </div>
    <?php endif; ?>  
    <form action="#" class="newsletter-subscribe">
      <input type="email" class="newsletter-input" placeholder="INGRESA TU CORREO ELECTRÓNICO">
      <input type="submit" value="SUSCRÍBETE" class="newsletter-submit">
    </form>
  </section>
  <h6 class="footer-text">Al leer se sale del tiempo y se viaja estando quieto</h6>
  <div class="footer-social">
    <a href="https://www.facebook.com/lunalibroscolombia">Facebook</a>
    <a href="https://x.com/Luna_Libros?mx=2">X</a>
    <img src="<?php echo get_template_directory_uri()."/assets/imagenes/logo_luna.png;"; ?>" alt=" " class="footer-logo-luna" />
    <a href="https://www.instagram.com/luna_libros/">Instagram</a>
    <a href="https://www.linkedin.com/in/luna-libros">LinkedIn</a>
  </div>
  <div class="footer-derechos">Todos los derechos reservados © <?php echo date("Y"); ?></div>
  <?php wp_footer(); ?>
</footer>
</body>
</html>