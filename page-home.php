<?php
/*
Template Name: Home Page
*/
?>

<div class="wrap hero" role="document" data-stellar-background-ratio="0.2">
	<div class="empowering"></div>
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
				<h5 class="alt">PARTNERSHIP</h5>
				<h1>PARTNERSHIP: HOW YOU CAN BE INVOLVED</h1>
				<p>We know that to be effective in supporting and assisting our community we cannot do it alone. Only by developing strong partnerships can we continue to deliver programs and services that really make a difference.</p>
				<h3>OUR SPONSORS</h3>
					<p class="logos">
						<img src="/assets/img/logo.grandcentral.png"/>
						<img src="/assets/img/logo.hippocket.png"/>
						<img src="/assets/img/logo.westridge.png"/>
						<img src="/assets/img/logo.cracker.png"/>
						<img src="/assets/img/logo.specsavers.png"/>
						<img src="/assets/img/logo.downsframing.png"/>
					</p>
				<h3>OUR SUPPORTERS</h3>
				<p class="logos">
					<img src="/assets/img/logo.chamber.png"/>
					<img src="/assets/img/logo.tsn2v.png"/>
					<img src="/assets/img/logo.liag.png"/>
					<img src="/assets/img/logo.fotf.png"/>
				</p>
				<h3>BECOME A PARTNER TODAY</h3>
				<p class="logos"></p>
				If you are interested in becoming a sponsor or supporter of METRO Care, simply enter your email address below and we'll be in contact.
				
				<form id="partnershipform" class="wufoo topLabel page form-inline" action="https://metrocare.wufoo.com/forms/z7x3x5/#public" autocomplete="off" enctype="multipart/form-data" method="post" name="form1" novalidate="">
				<div class="form-group"><input id="Field1" class="field text medium field keywords form-control email" tabindex="1" spellcheck="false" maxlength="255" name="Field1" required="" type="email" value="" placeholder="Your Email" /><input id="saveForm" class="btTxt submit btn btn-default" name="saveForm" type="submit" value="SEND" />
				<input id="idstamp" name="idstamp" type="hidden" value="1/t7ND5LecN923HSSHCZiYH0910h2D4/Lln9gxMh7NI=" /></div>
				</form>
				
				<?php $recent = new WP_Query("pagename=partnership"); while($recent->have_posts()) : $recent->the_post();?>
				       <?php //the_content(); ?>
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