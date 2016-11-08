<?php /* Template Name: Photography */  ?>

<?php get_header(); ?>

<div class="section">
 <!-- PHOTOGRPAHY -->
 <div class="innerWrapper">
   <?php // Start the loop ?>
   <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <h2><?php the_title(); ?></h2>

      <div class="flickr">
        <a href="https://www.flickr.com/photos/erikaruth/sets/72157649376487031/"><img class="pics" src="<?php echo get_site_url();?>/wp-content/themes/erika-donovan/images/work.jpg" alt="2014 Portraits"><p>Portraits</p></a>
      </div>
      <div class="flickr">
        <a href="https://www.flickr.com/photos/erikaruth/sets/72157650114817839/"><img class="pics" src="<?php echo get_site_url();?>/wp-content/themes/erika-donovan/images/dodgers.jpg" alt="Sports"><p>Sports</p></a>
      </div>
      <div class="flickr">
        <a href="https://www.flickr.com/photos/erikaruth/sets/72157647055187284/"><img class="pics" src="<?php echo get_site_url();?>/wp-content/themes/erika-donovan/images/family.jpg" alt="Family Portraits"><p>Family Portraits</p></a>
      </div>

    <div class="connect">
      <a href="mailto:hello@erikadonovan.com?subject=Photogrpahy" title="Let's Chat about a Photos for you!">Contact me for a Quote! </a>
    </div>
  </div>
  <div class="quotes clearfix">
    <div class="full-left">
      <div>
        <img src="<?php echo get_site_url();?>/wp-content/themes/erika-donovan/images/vanessa.jpg" class="img-left" alt="Vanessa Lee">
      </div>
      <p>Erika is reliable, fun and a joy to work with. She made me feel comfortable during our sessions and kept things casual. After the session, the edited shots were sent really fast and looked great. - <em>Vanessa Lee, Canvas</em></p>
    </div>
    <div class="full-right">
      <div>
        <img src="<?php echo get_site_url();?>/wp-content/themes/erika-donovan/images/casie.jpg" class="img-right" alt="Casie Stewart">
      </div>
      <p>Was great working with Erika. Shoot was quick, and fun. We didn't have much of a plan but Erika was able to work on her feet and get some good shots. Creative use of the tall grass was great! - <em>Casie Stewart</em></p>
    </div>
  </div>
  <div class="innerWrapper bullet-list">
    <div class="photo-content clearfix">
     <?php the_content(); ?>
    </div>
  </div>

  <div class="quotes clearfix">
    <div class="full-center">
      <div>
        <img src="<?php echo get_site_url();?>/wp-content/themes/erika-donovan/images/reggy.png" class="img-left" alt="Reggy">
      </div>
      <p>It was easy, comfortable and relaxed! I got some pretty great photos and I still get compliments on them. Erika is easy to work with and I would recommend her to anyone looking for some great photos. - <em>Reggy Sy</em></p>
    </div>
    </div>

<?php endwhile; // end the loop?>

</div> <!-- /.section -->
<?php get_footer(); ?>