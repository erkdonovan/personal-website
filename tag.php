<?php get_header(); ?>
  <div class="container projects">
    <div class="projects__flex">
      <?php

        $portfolioArgs = array(
          'post_type' => 'portfolio_items',
          'tag' => $tag
        );

        $portfolioLoop = new WP_Query($portfolioArgs);

        if($portfolioLoop->have_posts()) while($portfolioLoop->have_posts()) : $portfolioLoop->the_post();
        ?>

        <div class="projects__flex--item">
          <div>
            <h3><?php the_title(); ?></h3>
            <?php $image = get_field('main_hero_image'); ?>
            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
            <p><?php the_tags( 'Built with: ', ', ', '<br />' ); ?></p>
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
<?php get_footer(); ?>