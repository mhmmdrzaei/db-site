<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">

      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  
	<div class="socialMedia">
		<?php while( has_sub_fields('social_media') ): ?>
		       	<a href="<?php the_sub_field('socialmedia_address'); ?>">
		       		<?php the_sub_field('font_awesome_icon'); ?>
		       		<?php the_sub_field('social_media_name'); ?>
		       	</a>
		       <?php endwhile;//end of Social Media ?>
	</div>
        <div class="aboutContent">
        	<?php the_content(); ?>
        		
        	</div>

      <?php endwhile; // end the loop?>

       

    </div> <!-- /,content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>