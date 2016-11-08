<?php get_header(); ?>

<div class="blue">
  <div class="max1200 service-types">
    <div class="blue-name">

    </div>
  </div>
</div>
<div class="top">
  <section class="service-types">
    <div class="container flex-container">
      <?php 
        while(have_rows('secondary_menu')) : the_row();
      ?>
        <?php 
           // vars
          $title = get_sub_field('title');
          $link = get_sub_field('link');
          $content = get_sub_field('content');
        ?>
        
        <article class="services types">
          <a href="<?php echo $link ?>">
            <div class="arrow">
              <i class="fa fa-long-arrow-right fa-2x" aria-hidden="true"></i>
            </div>
            <h2><?php echo $title ?></h2>
            <p><?php echo $content ?></p>
          </a>
        </article>
        
      <?php endwhile ?>
    </div> 
  </section>
</div>
<div class="bottom">
  <div class="container">
    <div class="bio-section service-types">
      <div class="left-image">
        <?php $profileImage = get_field('profile_image'); ?>
        <img src="<?php echo $profileImage['url'] ?>" alt="<?php echo $profileImage['alt'] ?>">
        <div class="header-text happy-meal">
          <h1><?php the_field('headline_title'); ?></h1>
        </div>
      </div>

      <div class="right bio">
          <?php the_field('bio') ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>