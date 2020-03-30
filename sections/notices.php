
                
         



<?php query_posts( array(
	    
	    'posts_per_page' => 3,
	    'orderby' => 'date',
	    'post_type' => 'post',					     
	    
	) ); ?>

	



	<?php   if ( have_posts() ) { ?>

<div class="new-minor">
    <div class="container">


	<?php while ( have_posts() ) : the_post(); ?>
		<div class="row justify-content-center">
                    <div class="col-12 col-md-10">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="img-container bg-primary">
                                    <div class="inner">
                                        <?php the_post_thumbnail('large', ['class' => 'card-img']); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 d-flex">
                                <div class=" bg-light caption  align-self-center ">
                                    <h4 class="h5 font-weight-bolder text-muted">Comunicado</h4>
                                    <h3 class="h2 font-weight-bolder"><?php the_title(); ?></h3>
                                    <?php the_time('d'); ?> <?php the_time('M'); ?>
									<?php the_time('Y'); ?>
                                    <p class="lead">
                                        
                                    </p>
                                    <a href="<?php the_permalink(); ?>" class="d-none text-primary">Ver más</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- col -->



                    
                </div>
	
	 	 
	 	 
	 	 
	
	  	
	  		
		   
		    
		    
		    
	  
	<?php endwhile; // end of the loop. ?>



   </div>
</div>

<?php } ?>