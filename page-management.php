<?php /* Template Name: Management */  ?>

<?php get_header(); ?>



<div class="top">
  <section class="service-types max1200">
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
            
            <article class="packages types">
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
<div class="testimonial">
  <div class="service-types">
    <div class="container carousel" data-flickity='{ "wrapAround": true }'>
      <?php 
        while(have_rows('testimonials_repeater')) : the_row();
      ?>
        <?php 
           // vars

          $name = get_sub_field('client_name');
          $title = get_sub_field('client_title');
          $link = get_sub_field('client_link');
          $quote = get_sub_field('quote');

        ?>
        
        <article class="carousel-cell quote">
          <div class="quote--2">
            <p>"<?php echo $quote ?>"</p>
            <a href="<?php echo $link ?>">
              <h3><?php echo $name ?></h3>
            </a>
            <p><?php echo $title ?></p>
          </div>
        </article>
        
      <?php endwhile ?>
    </div>
  </div>
</div>


  <?php get_footer(); ?>