<main class="about" id="about">

  <!-- BIO STARTS -->
  <section class="about extrapadding">
    <div class="container flex-container">
        <div class="about__left">
          <div class="about__left--image">
            <?php $profileImage = get_field('profile_image', 690); ?>
            <img src="<?php echo $profileImage['url'] ?>" alt="<?php echo $profileImage['alt'] ?>">
          </div>
          <div class="about__left--headline">
            <h1><?php the_field('headline_title', 690); ?></h1>
          </div>
        </div>

        <div class="about__right">
          <div class="about__right--bio">
            <?php the_field('about_bio', 690); ?>
          </div>
          <div class="about__right--skills">
            <!-- SKILLS STARTS -->
            <h3>Skills</h3>
            <div class="skills__flex">
              <?php 
                while(have_rows('skills_repeater', 690)) : the_row();
              ?>
                <?php 
                   // vars
                  $icon = get_sub_field('icon');
                  $aoda = get_sub_field('aoda_text');
                ?>
              
                <article>
                  <i class="<?php echo $icon ?>" aria-hidden="true" data-title="<?php echo $aoda ?>"></i>
                  <p class="aoda"><?php echo $aoda ?></p>
                </article>
              <?php endwhile ?>
            </div> 
            <!-- SKILLS ENDS -->
          </div>
        </div>
      </div>
    </div>
  </section> <!-- /.section -->
  <!-- BIO ENDS -->

  
</main>