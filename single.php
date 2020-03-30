<?php get_header(); ?><!-- HEADER ########################-->



<div class="margin-body"  data-spy="affix" data-offset-top="90"></div>
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>



  <div class="container">

  
    
    <div class="row justify-content-center">
      <div class="col-md-10 col-12 pb-lg-4">
        <article>
          

          <div class="page-title text-center ">
         
            <h1 class="font-weight-light mt-3"><?php the_title(); ?></h1>

            <p>
              <small class="text-secondary text-uppercase">
                - <span class="mes"><?php the_time('d'); ?> de <?php the_time('F'); ?></span> de 
              <span class="anio"><?php the_time('Y'); ?></span> -
            </small>
            </p>


            
          </div>
          
         

          <div class="feature-single <?php echo do_shortcode('[types field="ocultar-feature"]'); ?>">
            <?php the_post_thumbnail('large', array('class' => 'img-fluid', 'title' => get_the_title() )); ?>
          </div>

         

          <section class="content-single text-left my-lg-5">
            <?php the_content(); ?>

          </section>
         
          

          
        </article>

       

        
      </div><!-- 8 col -->
    </div><!-- end row -->
  </div>
<?php endwhile ;?>
    <?php endif ;?>










<!-- FOOTER ########################--> 
<?php get_footer(); ?> 