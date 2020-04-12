 
<!--  ------------------COMUNICADO INSTITUCIONAL-----------------------------   -->  

<?php query_posts( array(
        
     
        'posts_per_page' => 1,
        'orderby' => 'date',
        'post_type' => 'post',  
        'category_name'  => 'comunicado',                     
        
    ) ); ?>



<section class="comunicado">
<?php   if ( have_posts() ) { ?> 
 <?php while ( have_posts() ) : the_post(); ?>  
        <div class="container">
            <div class="jumbotron comunicado-utepse bg-warning text-black pl-lg- shadow-lg">
                <div class="row align-items-stretch">
                    <div class="col-12 col-md-8">
                        <h2 class="display-4 text-black">Comunicado</h2>
                        <div class="card bg-warning">
                            <div class="card-body">
                                <p class="h4"><?php the_excerpt(); ?></p>
                            </div>                            
                        </div>
                        <h5 class="h6 mt-3">
                            <span class="font-weight-bolder">Junta Electoral de UTEPSE</span><br>
                            Firma: Dra Natalia Ibieta Presidenta, Lorena Suarez Vocal, Gregorio Gerez Vocal
                        </h5>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="alert alert-primary h-100 p-lg-4">
                            <p class="h4 text-warning">Por cualquier consulta comunicarse:</p>
                            <h5 class="h3 text-white">Dra Natalia Ibieta </h5>
                            <ul>
                                <li>Celular: 3855134827 </li>
                                <li>Correo Electrónico: juntaelectoralutepse@gmail.com</li>
                            </ul>      
                        </div>
                    </div>
                </div>                
            </div>   
        </div>
    <?php endwhile; // end of the loop. ?>    
 <?php } ?>  
</section>          






<!--  ------------------NOTICIAS COVID-----------------------------   -->  

<?php query_posts( array(
        
        'category_name'  => 'coronavirus',      
        'posts_per_page' => 1,
        'orderby' => 'date',
        'post_type' => 'post',  
                     
        
    ) ); ?>

<?php   if ( have_posts() ) { ?>
<?php while ( have_posts() ) : the_post(); ?>  
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
                        <h4 class="h5 font-weight-bolder text-muted">Prevención</h4>
                        <h3 class="h2 font-weight-bolder"><?php the_title(); ?></h3>
                        <p><small class="smoth"><span><?php the_time('d'); ?> </span> <span><?php the_time('M'); ?> </span><span><?php the_time('Y'); ?></span></small></p>
                        <p class="lead"><?php the_excerpt(); ?></p>
                        <a  class="btn btn-outline-primary" href="<?php the_permalink(); ?>" data-toggle="modal" >Ver más</a>
                    </div>
                </div>
            </div>
        </div>
<?php endwhile; // end of the loop. ?>    
<?php } ?>


       
<?php query_posts( array(
        
        'offset' => '1',
        'posts_per_page' => 1,
        'orderby' => 'date',
        'post_type' => 'post',  
        'category_name'  => 'coronavirus',                   
        
    ) ); ?>

<?php   if ( have_posts() ) { ?>
<?php while ( have_posts() ) : the_post(); ?>  

<div class="new-secondary mb-5">
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
</div>  
<?php endwhile; // end of the loop. ?>    
<?php } ?>



<?php query_posts( array(
        
        'offset' => '2',
        'posts_per_page' => 1,
        'orderby' => 'date',
        'post_type' => 'post',  
        'category_name'  => 'coronavirus',                   
        
    ) ); ?>

<?php   if ( have_posts() ) { ?>
<?php while ( have_posts() ) : the_post(); ?>  

<div class="container">

    <div class="new-secondary mb-5 bg-white">
        <div class="row no-gutters">
            <div class="col-12 col-md-6 d-flex">
                <div class="caption    align-self-center">
                    <h4 class="h5 font-weight-bolder text-muted">Prevención</h4>
                    <h3 class="h3 font-weight-bolder"><?php the_title(); ?></h3>
                    <p><small class="smoth"><span><?php the_time('d'); ?> </span> <span><?php the_time('M'); ?> </span><span><?php the_time('Y'); ?></span></small></p>
                    <p class="lead"><?php the_excerpt(); ?></p>
                    <a  class="btn btn-outline-primary" href="<?php the_permalink(); ?>" data-toggle="modal">Ver más</a>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="img-container bg-primary">
                    <div class="inner">
                        <?php the_post_thumbnail('large', ['class' => 'card-img']); ?>
                    </div>
                </div> 
            </div>
            
        </div>        
    </div> 

</div>
<?php endwhile; // end of the loop. ?>    
<?php } ?>



       
<?php query_posts( array(
        
        'offset' => '3',
        'posts_per_page' => 1,
        'orderby' => 'date',
        'post_type' => 'post',  
        'category_name'  => 'coronavirus',                   
        
    ) ); ?>

<?php   if ( have_posts() ) { ?>
<?php while ( have_posts() ) : the_post(); ?>  

<div class="container">

    <div class="new-secondary mb-5 bg-white">
        <div class="row no-gutters">
             <div class="col-12 col-md-6">
                <div class="img-container bg-primary">
                    <div class="inner">
                        <?php the_post_thumbnail('large', ['class' => 'card-img']); ?>
                    </div>
                </div> 
            </div>
            <div class="col-12 col-md-6 d-flex">
                <div class="caption    align-self-center">
                    <h4 class="h5 font-weight-bolder text-muted">Prevención</h4>
                    <h3 class="h3 font-weight-bolder"><?php the_title(); ?></h3>
                    <p><small class="smoth"><span><?php the_time('d'); ?> </span> <span><?php the_time('M'); ?> </span><span><?php the_time('Y'); ?></span></small></p>
                    <p class="lead"><?php the_excerpt(); ?></p>
                    <a  class="btn btn-outline-primary" href="<?php the_permalink(); ?>" data-toggle="modal">Ver más</a>
                </div>
            </div>
           
            
        </div>        
    </div> 

</div>
<?php endwhile; // end of the loop. ?>    
<?php } ?>

<div class="footer-news text-center mt-5 mb-5">
            <a href="<?php echo home_url('/'); ?>category/coronavirus" class="btn btn-primary">Ver más publicaciones COVID-19</a>
</div>

<!--  ------------------NOTICIAS INSTITUCIONALES-----------------------------   -->          

<?php query_posts( array(
           
        'posts_per_page' => 1,
        'orderby' => 'date',
        'post_type' => 'post',  
        'category_name'  => 'institucional',                     
        
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
                            <h4 class="h5 font-weight-bolder text-muted">Institucional</h4>
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
           
        'offset' => '1',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'post_type' => 'post',  
         'category_name'  => 'institucional',                     
        
    ) ); ?>

<?php   if ( have_posts() ) { ?>

<div class="container pt-4">
    <div class="row align-items-start">
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="col-12 col-md-4 d-flex">
                    <div class="caption bg-light   align-self-center">
                        <h4 class="h5 font-weight-bolder text-muted">Institucional</h4>
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
            <a href="<?php echo home_url('/'); ?>category/institucional" class="btn btn-primary">Ver más NOTICIAS INSTITUCIONALES</a>
</div>