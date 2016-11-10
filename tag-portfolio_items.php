<?php get_header(); ?>
  <div>
  	<h1><?php printf( __( 'Tag Archives: %s', 'twentyten' ), '' . single_tag_title( '', false ) . '' ); ?></h1>
  	<?php get_template_part( 'loop', 'tag' ); ?>

    <?php 
      if(have_posts()) while(have_posts()) : the_post();
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
  </div>
<?php get_footer(); ?>