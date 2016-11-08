<?php /* Template Name: Web Development */  ?>

<?php get_header(); ?>

<div class="section">
  <!-- WEB -->
  
  <div class="innerWrapper">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      
      <h3>Here is some of my work</h3>
      <div class="webdev-port">
        <a href="http://theblueprint.com/christmas-card/"><img src="<?php echo get_site_url();?>/wp-content/themes/erika-donovan/images/websites/tbp-christmas-card.png" alt="The Blueprint Christmas Card"></a>
        <div class="webdev-port-text">
          <h4>The Blueprint Christmas Card</h4>
          <p>Company Christmas card</p>
          <ul class="no-bullet-list">
            <li>HTML & CSS</li>
            <li>Responsive</li>
            <li>Animiaton</li>
            <li>Positioning</li>
            <li>JavaScript</li>
          </ul>
        </div>
      </div>
      <div class="webdev-port">
        <a href="/projects/hackeryou/"><img src="<?php echo get_site_url();?>/wp-content/themes/erika-donovan/images/websites/TorontosOutdoorAdventuresHome.png" alt="HackerYou Project 2 - Home Page"></a>
        <div class="webdev-port-text">
          <h4>HackerYou Project - Home Page</h4>
          <p>Second HackerYou project</p>
          <ul class="no-bullet-list">
            <li>HTML & CSS</li>
            <li>Responsive</li>
            <li>Positioning</li>
          </ul>
        </div>
      </div>
      <div class="webdev-port">
        <a href="/projects/september-2014/"><img src="<?php echo get_site_url();?>/wp-content/themes/erika-donovan/images/websites/ErikaDonovanSept2014.png" alt="My website in September 2014"></a>
        <div class="webdev-port-text">
          <h4>My website from September</h4>
          <p></p>
          <ul class="no-bullet-list">
            <li>HTML & CSS</li>
            <li>Responsive</li>
          </ul>
        </div>
      </div>
      <div class="webdev-port">
        <a href="/projects/placeholdersite/"><img src="<?php echo get_site_url();?>/wp-content/themes/erika-donovan/images/websites/erikadonovanOct312014.png" alt="My website placeholder"></a>
        <div class="webdev-port-text">
          <h4>My recent placeholder site</h4>
          <p></p>
          <ul class="no-bullet-list">
            <li>HTML & CSS</li>
            <li>Responsive</li>
            <li>Animiaton</li>
          </ul>
        </div>
      </div>
      <div class="bullet-list web-dev-content clearfix">
        <?php the_content(); ?>
      </div>
    </div>

  <!-- <div class="quotes clearfix">
  <div class="full-left">
    <div>
      <img src="images/vanessa.jpg" class="img-left" alt="Vanessa Lee">
    </div>
    <p>Erika is reliable, fun and a joy to work with. She made me feel comfortable during our sessions and kept things casual. After the session, the edited shots were sent really fast and looked great.” - <em>Vanessa Lee, Canvas</em></p>
  </div>
  <div class="full-right">
    <div>
      <img src="images/casie.jpg" class="img-right" alt="Casie Stewart">
    </div>
    <p>Was great working with Erika. Shoot was quick, and fun. We didn't have much of a plan but Erika was able to work on her feet and get some good shots. Creative use of the tall grass was great! - <em>Casie Stewart</em></p>
  </div>
</div> -->
<?php endwhile; // end the loop?>

</div> <!-- /.innerWrapper -->
</div> <!-- /.section -->
<?php get_footer(); ?>