<?php get_header(); ?>
<div class="section">
  <div class="container">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="projects__flex--item">
        <div>
          <h3><?php the_title(); ?></h3>
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
    <?php endwhile; // end of the loop. ?>
  </div> <!-- /.section -->
</div>
<?php get_footer(); ?>