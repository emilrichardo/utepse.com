<?php get_header(); ?><!-- HEADER ########################-->  

<div class="margin-body"  data-spy="affix" data-offset-top="90"></div>
 


  <div class="container">
 <ol class="breadcrumb my-3 text-uppercase d-flex align-items-center" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</ol>

  
      <div class="row text-center justify-content-center">
        <div class="col-12 col-md-10">
          <div class="page-title">
             <?php
          //the_archive_title( '<h1>', '</h1>' );
          single_term_title( '<h1>', '</h1>');
          the_archive_description( '<div>', '</div>' );
        ?>
            <span class="center-square"></span>
          </div>
          <hr>
          <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    
    <input type="text" class="form-control" name="s" id="s" placeholder="<?php esc_attr_e( 'Buscar nota...', 'twentyeleven' ); ?>" />
    <!-- <input class="btn btn-secondary" type="submit" class="submit" name="submit" id="searchsubmit" value="Buscar" /> -->
  </form>





  
          
  <?php 
  // the query
  $wpb_all_query = new WP_Query(
    array(
      'nopaging'  => false,
      'post_type'=>'post', 
      'post_status'=>'publish', 
      'posts_per_page'=>8,
      'paged' => $paged,  
      
          )
    ); ?>
 
          <div class="noticias-list mt-5 ">
  
  <?php   if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <!-- the loop -->
   
  
            <div class="bg-white item-noticia clearfix">
              <div class=" row justify-content-center align-items-center d-flex ">
                <div class="col-12 col-md-6 clearfix text-center text-md-left">
                  <div class="feature">
                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium' , ['class' => '']); ?></a>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="caption text-md-left py-5 pr-md-4">
                    <span><span class="mes"><?php the_time('M'); ?></span>
             <span class="anio"><?php the_time('Y'); ?></span></span>

                    <a href="<?php the_permalink() ?>"  class="text-dark"><h3 class="fw-light"><?php the_title(); ?></h3></a>

                    <a href="<?php the_permalink() ?>" class="btn btn-outline-secondary ">Ver más <i class="fa fa-angle-right "></i></a>
                  </div>
                </div>
              </div>
            </div><!-- item --> 
            <br>
            <?php endwhile; // end of the loop. ?>
           
  
         
          </div><!-- noticias-list -->
            <?php echo paginate_links( $args ); ?>
  
 
  
  
        </div><!-- 8 col -->
      </div><!-- end row -->
    </div>




   
  

     

<?php get_footer(); ?>
