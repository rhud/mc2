	<footer class="content-info" role="contentinfo">
	  <div class="inner">
	    <?php $recent = new WP_Query("pagename=copyright"); while($recent->have_posts()) : $recent->the_post();?>
		       <?php the_content(); ?>
		<?php endwhile; ?>
	  </div>
	</footer>

</div> <!-- /.wrap.container -->
<?php wp_footer(); ?>
