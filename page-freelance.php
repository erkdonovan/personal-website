<?php get_header(); ?>
<main id="freelance">
  <!-- SERVICES STARTS -->
  <div class="services-types">
    <div class="container flex-container">
      <?php 
        while(have_rows('services_menu', 7)) : the_row();
      ?>
        <?php 
           // vars
          $title = get_sub_field('title');
          $content = get_sub_field('content');
          $icon = get_sub_field('icon');
          $link = get_sub_field('link');
        ?>
        
        <article class="services-types--item">
          <a href="<?php echo $link ?>" title="<?php echo $title ?>">
            <div class="arrow">
              <i class="fa fa-long-arrow-right fa-2x" aria-hidden="true"></i>
            </div>
            <h3><?php echo $title ?></h3>
            <p><?php echo $content ?></p>
          </a>
        </article>
        
      <?php endwhile ?>
    </div> 
  </div>
  <!-- SERVICES ENDS -->

  <!-- CALL TO ACTION STARTS -->
  <section class="calltoaction extrapadding">
    <div class="container modal-show">
      <?php the_field('call_to_action_1', 7) ?>
    </div>
  </section>
  <!-- CALL TO ACTION ENDS -->

  <!-- FEATURED WORK STARTS -->
  <section class="projects extrapadding" id="work">
    <div class="container">
      <h2>Featured Work</h2>
      <div class="projects__flex">
        <?php 

          $portfolioArgs = array( 'featured' => 'freelance', 'posts_per_page' => '3' ) ;

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

  <!-- PACKAGES STARTS -->
  <section class="packages" id="services">
    <?php  get_template_part( 'services' ); ?>
  </section>
  <!-- PACKAGES ENDS -->

  <!-- TESTIMONIAL STARTS -->
  <?php $testImage = get_field('test_bg_image', 7); ?>
  <section class="testimonial" style="background-image: url(<?php echo $testImage['url'] ?>);">
    <div class="container carousel" data-flickity='{ "wrapAround": true, "autoPlay": true }'>
      <?php 

        $testimonialArgs = array( 
          'featured' => 'testimonial',
          'orderby'=> 'date',
          'order' => 'ASC'
          ) ;

        $testimonialLoop = new WP_Query($testimonialArgs);

        if($testimonialLoop->have_posts()) while($testimonialLoop->have_posts()) : $testimonialLoop->the_post();

      ?>
        <article class="carousel-cell quote">
          <div class="quote--item">
            <div class="quote--item__icon">
              <?php the_content(); ?>
            </div>
            <a href="<?php the_field('client_link'); ?>">
              <h3><?php the_title(); ?></h3>
            </a>
            <p><?php the_field('client_title'); ?></p>
          </div>
        </article>
      <?php endwhile ?>
      <?php wp_reset_postdata(); ?>
    </div>
  </section>
  <!-- TESTIMONIAL ENDS -->

  <!-- CALL TO ACTION STARTS -->
  <section class="calltoaction extrapadding">
    <div class="container modal-show">
      <?php the_field('call_to_action_2', 7) ?>
    </div>
  </section>
  <!-- CALL TO ACTION ENDS -->
</main>

<?php get_footer(); ?>