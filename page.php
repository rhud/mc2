<?php
/*
Template Name: Home Page
*/
?>

<div class="wrap hero" role="document" data-stellar-background-ratio="0.2">
	<div class="empowering"></div>
	<div class="social"><a href="http://facebook.com/metrocaretoowoomba" target="_blank"><i class="icon-fb"></i></a> <a href="http://instagr.am/metrocaretoowoomba" target="_blank"><i class="icon-instagram"></i></a></div>
</div>

<div class="wrap main">
		<article class="featured">
			<div class="inner">
				<?php $recent = new WP_Query("pagename=featured"); while($recent->have_posts()) : $recent->the_post();?>
				       <?php the_content(); ?>
				<?php endwhile; ?>
			</div>
			<div class="clearfix"></div>
		</article>
		
		<article class="about">
			<?php $recent = new WP_Query("pagename=about-us"); while($recent->have_posts()) : $recent->the_post();?>
			       <?php the_content(); ?>
			<?php endwhile; ?>
			<div class="clearfix"></div>
		</article>
		
		<article class="programs">
			<div class="inner">
				<?php $recent = new WP_Query("pagename=programs"); while($recent->have_posts()) : $recent->the_post();?>
				       <?php the_content(); ?>
				<?php endwhile; ?>
			</div>
			<div class="clearfix"></div>
		</article>
		
		<article class="events">
			<div class="inner">
				<?php $recent = new WP_Query("pagename=events"); while($recent->have_posts()) : $recent->the_post();?>
				       <?php the_content(); ?>
				<?php endwhile; ?>
			</div>
			<div class="clearfix"></div>
		</article>
		
		<article class="partnership" data-stellar-background-ratio="0.2">
			<div class="inner">
				<?php $recent = new WP_Query("pagename=partnership"); while($recent->have_posts()) : $recent->the_post();?>
				       <?php the_content(); ?>
				<?php endwhile; ?>
			</div>
			<div class="clearfix"></div>
		</article>
		
		<article class="contact">
			<div class="inner">
				<?php $recent = new WP_Query("pagename=contact"); while($recent->have_posts()) : $recent->the_post();?>
				       <?php the_content(); ?>
				<?php endwhile; ?>
			</div>
		</article>
		
	</div>
</div>