<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content porftfolioContent">
    	 <?php $dreamBeanQuery = new WP_Query(array(
               // 'post_per_page' => 1,// if you want all its -1
               'post_type' => array( 'portfolio' ),
               'post_per_page' => array(-1)
           )); ?> 
     
     
       <?php if($dreamBeanQuery-> have_posts()):?>
       <?php while($dreamBeanQuery->have_posts()): ?> 
        
       <?php $dreamBeanQuery->the_post(); ?>
       <?php $dreamBeanQuery->the_content(); ?> 
       
        <a class="redProject" href="<?php the_permalink(); ?>">
         <div class="projectpost">
           <div class="overflowImage">
           <?php the_post_thumbnail( 'medium' ) ?>
             
           </div>
          
          

           <div class="paragraph">
                     <?php the_title(); ?>
            
            </div>
         </div>

         </a>
      
         <?php endwhile; ?>
         <?php wp_reset_postdata(); ?> 
                   <!-- this will end the and reset and go back to normal so you can go back to normal to your page -->
         <?php endif; ?>
    </div> <!-- /,content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>