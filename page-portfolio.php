<?php get_header();  ?>

<section class="projects">
  <div class="container extrapadding">
    <div class="projects__flex">
      <?php 

        $portfolioArgs = array(
          'post_type' => 'portfolio_items',
        );

        $portfolioLoop = new WP_Query($portfolioArgs);

        if($portfolioLoop->have_posts()) while($portfolioLoop->have_posts()) : $portfolioLoop->the_post();

      ?>
        <div class="projects__flex--item">
          <div>
            <h3><?php the_title(); ?></h3>
            <?php the_post_thumbnail( array(250) ); ?>
            <p><?php the_tags( 'Code Used: ', ', ', '<br />' ); ?></p>
            <?php the_content(); ?>

            <?php $link = get_field('link_to_project'); ?>
          </div>
          <div class="button">
            <?php if( $link ): ?>
              <a href="<?php echo $link; ?>">
                <span>View It</span>
              </a>
            <?php endif; ?>
          </div>
        </div>

      <?php endwhile; ?>

      <?php wp_reset_postdata(); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>