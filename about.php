
  <div class="container">
    <h2>About me</h2>
    <div class="flex-container">
      <div class="about__left">
        <div class="about__left--headline">
          <h1><?php the_field('headline_title', 690); ?></h1>
        </div>
        <div class="about__left--image">
          <?php $profileImage = get_field('profile_image', 690); ?>
          <img src="<?php echo $profileImage['url'] ?>" alt="<?php echo $profileImage['alt'] ?>">
        </div>
      </div> <!-- about left ends -->

      <div class="about__right">
        <div class="about__right--bio">
          <?php the_field('about_bio', 690); ?>
        </div>
      </div> <!-- about right ends -->
    </div> <!-- flex ends -->
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
            <i class="<?php echo $icon ?>" aria-hidden="true"></i>
            <p class="skill-icon"><?php echo $aoda ?></p>
          </article>
        <?php endwhile ?>
      </div> 
    </div>
  </div>
