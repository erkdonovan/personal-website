<?php /* Template Name: Contact */ ?>

<?php get_header();  ?>
<div id="contact" class="bottom section">

	<div class="section">
<!-- 		<div class="innerWrapper">

			<?php // Start the loop ?>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>

		<?php endwhile; // end the loop?>

		<div class="form"><form action="http://formspree.io/hello@erikadonovan.com" method="POST"><input name="name" type="text" placeholder="Name" />
			<input name="_replyto" type="email" placeholder="Email" />
			<textarea id="message" class="textarea" spellcheck="true" cols="50" name="message" rows="10" placeholder="Message"></textarea>
			<input type="submit" value="Send" /></form>
			<h2>Connect with Me!</h2>
		</div>
		
		<div class="social">
			<ul>
				<li><a href="mailto:hello@erikadonovan.com"><i class="fa fa-envelope fa-2x"></i></a></li>
				<li><a href="http://www.twitter.com/erkdonovan/"><i class="fa fa-twitter fa-2x"></i></a></li>
				<li><a href="https://youtube.com/hiimerika/"><i class="fa fa-youtube-play fa-2x"></i></a></li>
				<li><a href="https://www.flickr.com/photos/erikaruth/sets/"><i class="fa fa-flickr fa-2x"></i></a></li>
				<li><a href="http://hiimerika.com"><i class="fa fa-pencil fa-2x"></i></a></li>
			</ul>
		</div>
	</div> <!-- /.innerWrapper --> -->
<center><iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdNNyWgo9VrZLWMLOzgmfMBVUnHIJBEB-xgNYuoYWeuYbHW9w/viewform?embedded=true" width="760" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe></center>

</div> <!-- /.section -->
<?php get_footer(); ?>