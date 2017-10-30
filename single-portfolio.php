<?php get_header(); ?>

<div class="main">
  <div class="container">
     <h2> <?php the_title(); ?></h2>

    <div class="content">
      <?php if( have_rows('images') ) : ?>
               <ul class="imageList">
                   <?php while( have_rows('images') ) : the_row(); ?>
                       <li>
                           <?php $image = get_sub_field('the_image');
                               if( !empty($image) ): ?>
                                   <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php the_sub_field('the_alt');?>" alt="<?php the_sub_field('the_alt');?>" />
                              
                               <?php endif; ?>
                       </li>
                   <?php endwhile; ?>
               </ul><!-- .bxslider -->
           <?php endif;  // end gallery repeater field?>
           <!-- Project Desc -->
           <div class="ContentText">
              
            <?php the_field('project_description'); ?>
           </div>
       <!-- video -->
       <?php while( has_sub_fields('video') ): ?>
       <div class="video">
           <?php the_sub_field('video_styling'); ?>
           <div class="embed-container">
             <?php the_sub_field('embedded_link'); ?>
           </div>
       </div>
       <?php endwhile;//end of vimeo ?>
   

          

          
          <?php while( has_sub_fields('essay_pdf_attacher') ): ?>
           <div class="essay">
            <?php 
                
                   $file = get_sub_field('the_file');
                
                   if( $file ): ?>
                     
                     <a href="<?php echo $file['url']; ?>"><?php echo $file['filename']; ?><?php the_sub_field('its_title'); ?></a>
                
                   <?php endif; ?>
                  </div>
          <?php endwhile;//end of pdf attacher field ?>
  
              
              
              
   
             
   
   

    </div> <!-- /.content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>