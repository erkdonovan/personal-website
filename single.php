<?php get_header(); ?>
<div class="section">
  <div class="innerWrapper">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <h2 class="entry-title aligncenter"><?php the_title(); ?></h2>

          <div class="entry-meta">
            <p><?php twentyten_posted_on(); ?></p>
<!--             <p><?php the_field('event_person'); ?></p>
            <p><?php the_field('date_taken'); ?></p> -->
          </div><!-- .entry-meta -->

          <div class="entry-content">

          <?php /* START: PUT POST THUMBNAIL HERE */ ?>
           <div class="entry-feature"> <?php the_post_thumbnail('large'); ?></div>
          <?php /* STOP: PUT POST THUMBNAIL HERE */ ?>

            <?php the_content(); ?>
          </div><!-- .entry-content -->


          <div class="entry-utility">
            <?php twentyten_posted_in(); ?>
          </div><!-- .entry-utility -->
        </div><!-- #post-## -->

        <!-- <div id="nav-below" class="navigation">
          <div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '</span> %title' ); ?></div>
          <div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' ); ?></div>
        </div> --><!-- #nav-below -->

        <?php //comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

    <?php // include('sidebar.php'); ?>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->
<?php get_footer(); ?>