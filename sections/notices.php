<?php query_posts( array(
	    
	 
	    'posts_per_page' => 1,
	    'orderby' => 'date',
	    'post_type' => 'post',					     
	    
	) ); ?>

<?php   if ( have_posts() ) { ?>

<div class="new-primary">
            <div class="title-sup">
                <h2 class="display-1 text-center text-warning font-weight-bolder">COVID-19</h2>
            </div>
            <div class="row  no-gutters">            
                <div class="col-12 col-md-6 order-md-2">                
                    <div class="img-container bg-primary">
                        <div class="inner">
                           <?php the_post_thumbnail('large', ['class' => 'img op-50']); ?>
                        </div>
                    </div> 
                </div>
                <div class="col-12 col-md-6 d-flex order-md-1">
                    <div class="caption caption-overlay bg-light   align-self-end ">
                        <h4 class="h5 font-weight-bolder text-muted">Comunicado</h4>
                        <h3 class="h2 font-weight-bolder"><?php the_title(); ?></h3>
                        <p><small class="smoth"><span><?php the_time('d'); ?> </span> <span><?php the_time('M'); ?> </span><span><?php the_time('Y'); ?></span></small></p>
                      	<p class="lead"><?php the_excerpt(); ?></p>
                        <a  class="btn btn-outline-primary" href="<?php the_permalink(); ?>" data-toggle="modal" >Ver más</a>
                    </div>
                </div>
            </div>
        </div>


<?php } ?>


       
<?php query_posts( array(
	    
	    'offset' => '1',
	    'posts_per_page' => 1,
	    'orderby' => 'date',
	    'post_type' => 'post',					     
	    
	) ); ?>

<?php   if ( have_posts() ) { ?>


<div class="new-secondary mb-5">
	<?php while ( have_posts() ) : the_post(); ?>
            <div class="row no-gutters">
                <div class="col-12 col-md-6">
                    <div class="img-container bg-primary">
                        <div class="inner">
                            <?php the_post_thumbnail('large', ['class' => 'card-img']); ?>
                        </div>
                    </div> 
                </div>
                <div class="col-12 col-md-6 d-flex">
                    <div class="caption bg-light   align-self-center">
                        <h4 class="h5 font-weight-bolder text-muted">Prevención</h4>
                        <h3 class="h3 font-weight-bolder"><?php the_title(); ?></h3>
                        <p><small class="smoth"><span><?php the_time('d'); ?> </span> <span><?php the_time('M'); ?> </span><span><?php the_time('Y'); ?></span></small></p>
                        <p class="lead"><?php the_excerpt(); ?></p>
                        <a  class="btn btn-outline-primary" href="<?php the_permalink(); ?>" data-toggle="modal">Ver más</a>
                    </div>
                </div>
            </div>
    <?php endwhile; // end of the loop. ?>               
</div>  

<?php } ?>



          

<?php query_posts( array(
	       
	    'offset' => '2',
	    'posts_per_page' => 1,
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
                            <p><small class="smoth"><span><?php the_time('d'); ?> </span> <span><?php the_time('M'); ?> </span><span><?php the_time('Y'); ?></span></small></p>
                            <p class="lead"><?php the_excerpt(); ?></p>
                            <a class="btn btn-outline-primary" href="<?php the_permalink(); ?>" data-toggle="modal">Ver más</a>
                        </div>
                    </div>
                </div>
            </div><!-- col -->                 
        </div>
	<?php endwhile; // end of the loop. ?>
   </div>
</div>	

<?php } ?>



<?php query_posts( array(
           
        'offset' => '3',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'post_type' => 'post',                       
        
    ) ); ?>

<?php   if ( have_posts() ) { ?>

<div class="container pt-4">
    <div class="row align-items-start">
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="col-12 col-md-4 d-flex">
                    <div class="caption bg-light   align-self-center">
                        <h4 class="h5 font-weight-bolder text-muted">Prevención</h4>
                        <h3 class="h3 font-weight-bolder"><?php the_title(); ?></h3>
                        <p><small class="smoth"><span><?php the_time('d'); ?> </span> <span><?php the_time('M'); ?> </span><span><?php the_time('Y'); ?></span></small></p>
                        <p class="lead"><?php the_excerpt(); ?></p>
                        <a  class="btn btn-outline-primary" href="<?php the_permalink(); ?>" data-toggle="modal">Ver más</a>
                    </div>
    </div>     
    <?php endwhile; // end of the loop. ?>    
</div>
</div>
<?php } ?>


<div class="footer-news text-center mt-5">
            <a href="<?php echo home_url('/'); ?>noticias" class="btn btn-primary">Ver más publicaciones</a>
</div>