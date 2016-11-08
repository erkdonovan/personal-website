<?php /* Template Name: Gallery */  ?>

<?php get_header(); ?>

<div class="section">

  <div class="innerWrapper">
  <div class="wp-content">
  <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        <div class="gallery-images">
        <?php 

        $images = get_field('images');

if( $images ): ?>
    <ul>
        <?php foreach( $images as $image ): ?>
            <li class="each-image">
                <a href="<?php echo $image['url']; ?>">
                     <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
                <p><?php echo $image['caption']; ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
    </div>

    <?php endwhile; // end the loop?>
  

  </div>
  
</div> <!-- /.innerWrapper -->
</div> <!-- /.section -->
<?php get_footer(); ?>