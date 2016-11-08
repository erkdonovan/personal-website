<div class="sidebar1">
<div id="sidebar1">
<ul>
     <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>

     <?php endif; ?>
  </ul>
  	<ul class="xoxo">
		<?php  dynamic_sidebar( 'about-widget-area' ); ?>
		<!-- This pulled from the widgets set up online -->
	</ul>
</div>
</div>
	
