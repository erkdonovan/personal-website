<?php /* Template Name: About */  ?>

<?php get_header(); ?>

<div class="about-text">

  <div class="innerWrapper">
    <h2><?php the_title(); ?></h2>
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    </div>

    <?php endwhile; // end the loop?>

  </div>
  
</div> <!-- /.innerWrapper -->

</div> <!-- /.section -->
<?php get_footer(); ?>