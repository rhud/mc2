<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>
 
  <!--[if lt IE 8]>
   <div class="alert alert-warning">
     <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
   </div>
 <![endif]-->
<?php
	get_template_part('templates/header');
?>

<div class="autonav smartheader">
	<a class="menu-link"><i class="icon-menu"></i></a>
	<div class="social"><a href="http://facebook.com/metrocaretoowoomba" target="_blank"><i class="icon-fb"></i></a> <a href="http://instagr.am/metrocaretoowoomba" target="_blank"><i class="icon-instagram"></i></a></div>
</div>
 
<?php include roots_template_path(); ?> 
 
<?php get_template_part('templates/footer'); ?>
 
</body>
</html>