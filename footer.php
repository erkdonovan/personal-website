
  <footer class="footer">
    <div class="container footer__flex">
      <div class="footer__left">
        <p><strong>Email</strong></p>
        <p><?php the_field('email_address', 'option'); ?></p>
        <div class="footer__left--social">
          <?php 
            while(have_rows('social_repeater', 'option')) : the_row();
          ?>
            <?php 
               // vars
              $type = get_sub_field('type', 'option');
              $icon = get_sub_field('icon', 'option');
              $link = get_sub_field('link', 'option');
            ?>
            
            <article>
              <a href="<?php echo $link ?>" alt="<?php echo $type ?>"><i class="fa <?php echo $icon ?> fa-2x" aria-hidden="true"></i></a>
            </article>
            
          <?php endwhile ?>
        </div>
        <p>Designed by: <a href="<?php the_field('designer_url', 'option') ?>"></a><?php the_field('designed_by', 'option') ?></p>
        <?php $succulent = get_field('succulent_image', 'option') ?>
        <img src="<?php echo $succulent['url'] ?>" alt="">
        <p><i class="fa fa-copyright"></i> <?php the_field('copy_right_info', 'option'); ?></p>
      </div>
      <div class="footer__right">
        <article class="footer__right--contact" id="contact">
          <?php $contactForm = get_field('contact_form_shortcode', 'option');
              $contactForm = trim($contactForm);
           ?>
          <?php echo do_shortcode($contactForm); ?>
        </article>
      </div>
    </div>
  </footer>
  <script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>
    <!-- GOOGLE ANALYTICS -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-48722502-1', 'erikadonovan.com');
    ga('send', 'pageview');

    </script>
  <?php wp_footer(); ?>
</body>


</html>