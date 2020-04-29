 <!--  ------------------NOTICIAS ----------------------------------   -->  

<?php query_posts( array(
        
        'category_name'  => 'noticias',      
        'posts_per_page' => 1,
        'orderby' => 'date',
        'post_type' => 'post', 
        'meta_key'  => 'mostrar',
        'meta_value'  => 1,   
                     
        
    ) ); ?>

<?php   if ( have_posts() ) { ?>
<?php while ( have_posts() ) : the_post(); ?>  
<div class="new-primary">
            <!-- div class="title-sup">
                <h2 class="display-1 text-center text-warning font-weight-bolder">COVID-19</h2>
            </div -->
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
        'category_name'  => 'noticias',   
        'meta_key'  => 'mostrar',
        'meta_value'  => 1,                  
        
    ) ); ?>

<?php   if ( have_posts() ) { ?>
<?php while ( have_posts() ) : the_post(); ?>  

<?php

// Variables for Current Block.
$style_img            = get_field( 'style_img' );
$img_center           = get_field( 'img_center' );
$columns              = get_field( 'columns' );
?>

<?php
    // Variable $style_img
        if ( $style_img == "op_50" ) {
            $text_style_img = 'op-50' ; 
           
        } else  {
             $text_style_img = '' ;   
        }

    // Variable $img_center  
        $text_img_center = $img_center ? 'inner' : '';         
    ?>
<?php
    // Variable $column_width 

        if ( $columns == "half" ) { // 50-50
            $columns_1 = 'col-12 col-md-6' ; 
            $columns_2 = 'col-12 col-md-6' ; 
        } else if ( $columns == "two-third" ) { // 75-25
            $columns_1 = 'col-12 col-md-9' ; 
            $columns_2 = 'col-12 col-md-3' ; 
        } else if ( $columns == "one-third" ){ // 25-75
            $columns_1 = 'col-12 col-md-3' ; 
            $columns_2 = 'col-12 col-md-9' ; 
        } else if ( $columns == "two-fifth" ){ // 40-60
            $columns_1 = 'col-12 col-md-5' ;
            $columns_2 = 'col-12 col-md-7' ;  
        } else if ( $columns == "three-fifth" ){ // 60-40
            $columns_1 = 'col-12 col-md-7' ; 
            $columns_2 = 'col-12 col-md-5' ; 
        }    
    ?>
    
<div class="new-secondary mb-5">
            <div class="row no-gutters">
                <div class="<?php echo esc_attr($columns_1) ?>">
                    <div class="img-container bg-primary">
                      
                        <div class="<?php echo esc_attr($text_style_img . ' ' . $text_img_center) ?>">
                            <?php the_post_thumbnail('large', ['class' => 'card-img']); ?>
                        </div>
                    </div> 
                </div>
                <div class= "<?php echo esc_attr($columns_2 . ' ' . 'd-flex') ?>">
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
        'category_name'  => 'noticias',
        'meta_key'  => 'mostrar',
        'meta_value'  => 1,                     
        
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
        'category_name'  => 'noticias',
        'meta_key'  => 'mostrar',
        'meta_value'  => 1,                     
        
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
            <a href="<?php echo home_url('/'); ?>category/noticias" class="btn btn-primary">Ver más NOTICIAS</a>
</div>