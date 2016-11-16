
  <div class="container">
    <h2><?php the_field('development_title', 618); ?></h2>
    <div class="flex-container packages__types">
      <?php 
        while(have_rows('development_repeater', 618)) : the_row();
      ?>
        <?php 
           // vars
          $title = get_sub_field('title');
          $details = get_sub_field('details');
          $price = get_sub_field('price');
        ?>
        
        <article class="packages__types--item">
          <div class="packages__types--content">
            <i class="fa fa-ellipsis-h fa-2x" aria-hidden="true"></i>
            <h3><?php echo $title ?></h3>
            <?php echo $details ?>
          </div>
          <h4><?php //echo $price ?></h4>
        </article>
        
      <?php endwhile ?>
    </div>
    <p class="disclaimer"><?php the_field('disclaimer', 618) ?></p>
    <h2><?php the_field('management_title', 618); ?></h2>
    <div class="flex-container packages__types">
      <?php 
        while(have_rows('management_repeater', 618)) : the_row();
      ?>
        <?php 
           // vars
          $title = get_sub_field('title');
          $details = get_sub_field('details');
          $price = get_sub_field('price');
        ?>
        
        <article class="packages__types--item">
          <div class="packages__types--content">
            <i class="fa fa-ellipsis-h fa-2x" aria-hidden="true"></i>
            <h3><?php echo $title ?></h3>
            <?php echo $details ?>
          </div>
          <h4><?php //echo $price ?></h4>
        </article>
        
      <?php endwhile ?>
    </div>
  </div>
  <div class="hourlyrate">
    <div class="container">
      <?php the_field('hourly_rate_text', 618); ?>
    </div>
  </div>
