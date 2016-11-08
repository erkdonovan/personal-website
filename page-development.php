<?php /* Template Name: Development */  ?>

<?php get_header(); ?>

<div class="top">
  <section class="service-types">
    <div class="container flex-container">
      <?php 
        while(have_rows('services_repeater')) : the_row();
      ?>
        <?php 
           // vars
          $title = get_sub_field('title');
          $content = get_sub_field('content');
        ?>
        
        <article class="services types">
          <i class="fa fa-long-arrow-right fa-2x" aria-hidden="true"></i>
          <h2><?php echo $title ?></h2>
          <p><?php echo $content ?></p>
        </article>
        
      <?php endwhile ?>
    </div>
  </section>
</div>
<!-- <div class="service-types">
  <div class="blue-name">
    <?php //the_field('menu_content'); ?>
  </div>
</div> -->
<div class="bottom">
  <section class="service-types">
    <div class="container">
      <h1><?php the_field('packages_title'); ?></h1>
      <div class="flex-container">
          <?php 
            while(have_rows('package_repeater')) : the_row();
          ?>
            <?php 
               // vars
              $title = get_sub_field('title');
              $details = get_sub_field('details');
              $price = get_sub_field('price');
            ?>
            
            <article class="packages types" id="first-word">
              <i class="fa fa-ellipsis-h fa-2x" aria-hidden="true"></i>
              <h2><?php echo $title ?></h2>
              <?php echo $details ?>
              <h3><?php echo $price ?></h3>
            </article>
            
          <?php endwhile ?>
        </div>
      </div>
    </div>
 </section>
</div>
<div class="top">
  <div class="service-types">
    <div class="container flex-container">
      <div class="services types">
        <i class="fa fa-long-arrow-right fa-2x" aria-hidden="true"></i>
        <a href="http://www.dankalmar.com/">
          <h2><span>Dan</span><br>Kalmar</h2>
        </a>
        <p>Dan's website is built using HTML, CSS, and Responsive Design. His main page is built to full your screen with no overflow. Dan also hired me to take photos for his website and future press needs for his comedic career.</p>
      </div>
      <div class="services types">
        <i class="fa fa-long-arrow-right fa-2x" aria-hidden="true"></i>  
        <a href="http://www.erikadonovan.com/projects/christmas-card/">
          <h2><span>The Blueprint</span><br>Christmas Card</h2>
        </a>
        <p>This was a company Christmas card webpage that was designed between the creative director and myself. I build the webpage using HTML & CSS, Responsive, Animation, Positioning, and JavaScript.</p>
      </div>
      <div class="services types">
        <i class="fa fa-long-arrow-right fa-2x" aria-hidden="true"></i>  
        <a href="http://www.erikadonovan.com/projects/hackeryou/">
          <h2><span>HackerYou</span><br>Final Project</h2>
        </a>
        <p>This is a mockup of a website. It was built for my second HackerYou project using HTML & CSS, Responsive, and Positioning.</p>
      </div>
  </div>
  </div>
</div>
<?php get_footer(); ?>