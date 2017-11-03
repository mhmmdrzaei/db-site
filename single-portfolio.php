<?php get_header(); ?>

<div class="main">
  <div class="container singlePortfolio">
    

    <div class="content" id="carousel">
       <h2> <?php the_title(); ?></h2>
      <?php if( have_rows('images') ) : ?>
                   <?php while( have_rows('images') ) : the_row(); ?>
                       <div class="slide">
                           <?php $image = get_sub_field('the_image');
                               if( !empty($image) ): ?>
                                   <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php the_sub_field('the_alt');?>" alt="<?php the_sub_field('the_alt');?>" />
                              
                               <?php endif; ?>
                       </div>
                   <?php endwhile; ?>
               
           <?php endif;  // end gallery repeater field?>
           <!-- Project Desc -->
           <div class="ContentText slide">
              
            <?php the_field('project_description'); ?>
           </div>


          
          <?php while( has_sub_fields('essay_pdf_attacher') ): ?>
           <div class="essay slide">
            <?php 
                
                   $file = get_sub_field('the_file');
                
                   if( $file ): ?>
                     
                     <a href="<?php echo $file['url']; ?>"><?php echo $file['filename']; ?><?php the_sub_field('its_title'); ?></a>
                
                   <?php endif; ?>
                  </div>
          <?php endwhile;//end of pdf attacher field ?>
       
   

          

  
              
      <?php get_footer(); ?>
        
              
   
             
   
   

    </div> <!-- /.content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->
