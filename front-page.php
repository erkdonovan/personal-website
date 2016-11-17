<?php get_header(); ?>

<main id="front">
  <!-- FEATURED WORK STARTS -->
  <section class="projects extrapadding" id="work">
    <div class="container">
      <h2>Featured Work</h2>
      <div class="projects__flex">
        <?php 

          $portfolioArgs = array( 'featured' => 'portfolio', 'posts_per_page' => '3' ) ;

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
                <a href="<?php echo $link; ?>" target="_blank">
                  <span>View It</span>
                </a>
              <?php endif; ?>
            </div>
          </div>

        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>
      </div>
      <div class="projects__more">
        <a href="<?php the_field('portfolio_url') ?>">See More Work <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
      </div>
    </div>
  </section>
  <!-- FEATURED WORK ENDS -->

  <!-- BIO STARTS -->
  <section class="about extrapadding"  id="about">
    <?php  get_template_part( 'about' ); ?>
  </section> 
  <!-- BIO ENDS -->


  <!-- BLOG POSTS STARTS -->
  <section class="blog extrapadding" id="blog">
    <div class="container">
      <h2>Blog</h2>
      <h4>I write stuff on <a href="https://medium.com/@erkdonovan">Medium</a> sometimes</h4>
      <?php echo do_shortcode('[display_medium_posts handle="@erkdonovan" total=3]'); ?> 
    </div>
  </section>
  <!-- BLOG PSOTS ENDS -->
</main>


<?php get_footer(); ?>