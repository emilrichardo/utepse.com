<?php get_header(); ?><!-- HEADER ########################-->





<div class="bg-white">
    <div class="container">
   
      <div class="row text-center justify-content-center">
        <div class="col-12 col-md-10">
          <div class="page-title">
            <h1>Noticias</h1>
            <span class="center-square"></span>
          </div>

          <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    
    <input type="text" class="form-control" name="s" id="s" placeholder="<?php esc_attr_e( 'Buscar nota...', 'twentyeleven' ); ?>" />
    <!-- <input class="btn btn-secondary" type="submit" class="submit" name="submit" id="searchsubmit" value="Buscar" /> -->
  </form>


<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = 
array( 
  'post_type' => 'post', 
  'posts_per_page' => 10, 
  'paged' => $paged 
);
$wp_query = new WP_Query($args); ?>





  
          <?php 
  // the query
  $wpb_all_query = new WP_Query(
    array(
      'nopaging'  => false,
      'post_type'=>'post', 
      'post_status'=>'publish', 
      'posts_per_page'=>20,
      'paged' => $paged,  
      'category__not_in' => array(358,14)
          )
    ); ?>


  
  <?php if ( $wpb_all_query->have_posts() ) : ?>
          <div class="noticias-list mt-5">


  
            <!-- the loop -->
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
  
            <div class="bg-white item-noticia clearfix">
              <div class=" row justify-content-center align-items-center d-flex ">
                <div class="col-12 col-md-7 col-lg-6 clearfix text-center text-md-left">
                  <div class="feature">
                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium' , array('class' => 'img-fluid img-wide')); ?></a>
                  </div>
                </div>
                <div class="col-12 col-md-5 col-lg-6">
                  <div class="caption text-md-left py-5 pr-md-4">
                    <span><span class="mes"><?php the_time('d'); ?>  <?php the_time('M'); ?></span>
             <span class="anio"><?php the_time('Y'); ?></span></span>

                    <a href="<?php the_permalink() ?>"  class="text-dark"><h3 class="fw-light"><?php the_title(); ?></h3></a>

                    <a href="<?php the_permalink() ?>" class="btn btn-outline-secondary ">Ver más <i class="fa fa-angle-right "></i></a>
                  </div>
                </div>
              </div>
            </div><!-- item --> 
            <br>


            <?php endwhile; ?>

            <div class="btn-group" role="group" aria-label="Basic example">
   <?php next_posts_link( '<button type="button" class="btn btn-light"> &larr; noticias anteriores </button>', $wp_query ->max_num_pages); ?>

  <?php previous_posts_link( '<button type="button" class="btn btn-light">noticias recientes &rarr;</button>' ); ?>
  
</div>




           


  
         
          </div><!-- noticias-list -->
            <?php wp_reset_postdata(); ?>
  
  <?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
  
  
        </div><!-- 8 col -->
      </div><!-- end row -->
    </div>
  
  
    
  </div>



<!-- FOOTER ########################--> 
<?php get_footer(); ?> 