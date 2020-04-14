<!--  MARCKUP DE BENEFICIOS-->

<?php query_posts( array(
        
     
        'posts_per_page' => 20,
        'orderby' => 'date',
        'post_type' => 'beneficios',           
        
    ) ); ?>


    <section id="servicios" class="beneficios mt-5 pt-5">
        <div class="container-fluid">
            <div class="heading-section text-center mb-5">
                <h3 class="font-script display-3">Beneficios gratuitos</h3>
            </div>

            <div class="list-beneficios">
                
                  <?php   if ( have_posts() ) { ?> 
                    <div class="row aling-items-start  px-5">
                    <?php while ( have_posts() ) : the_post(); ?> 
                      <div class="col-6 col-md-4 mb-4">
                        <div class="card shadow">
                            <div class="card-body px-2 py-1">
                                  <div class="row justify-content-start align-items-center">
                                      <div class="col-5 p-0"> 
                                        <img><?php the_post_thumbnail('thumbnail', ['class'=>'three-columns', 'class' => 'rounded-circle']); ?>
                                        </img>
                                      </div> 
                                      <div class="col-7">
                                        <div>
                                            <h4 class="card-title h3"> <?php the_title(); ?> </h4>
                                            <a href="#services-<?php echo get_the_ID()  ?>" class="card-link" data-toggle="modal"> Ver más...</a>
                                        </div>
                                       </div>   
                                  </div>      
                            </div>
                        </div>  
                       </div>
                    <?php endwhile; // end of the loop. ?>    
                      </div>
                <?php } ?>    
            </div>
        </div>

</section>