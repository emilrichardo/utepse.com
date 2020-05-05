 
<!--------------------COMUNICADO INSTITUCIONAL-----------------------------   -->  

<?php query_posts( array(
        
     
        'posts_per_page' => 1,
        'orderby' => 'date',
        'post_type' => 'post',  
        'category_name'  => 'comunicado',   
        'meta_key'  => 'mostrar',
        'meta_value'  => 1,                  
        
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

<!--  ------------------BANNER ----------------------------------   -->  

<?php query_posts( array(
        
        'category_name'  => 'banner',      
        'posts_per_page' => 1,
        'orderby' => 'date',
        'post_type' => 'post', 
        'meta_key'  => 'mostrar',
        'meta_value'  => 1,   
                     
        
    ) ); ?>

<?php   if ( have_posts() ) { ?>
<?php while ( have_posts() ) : the_post(); ?>  

<section class="banner">
      <div class="container">
            <?php the_post_thumbnail('large', ['class'=>'w-100 shadow mb-5', 'style'=> 'height: auto;']); ?>
      </div>    
</section>
<?php endwhile; // end of the loop. ?>    
<?php } ?>

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

<?php
// Variables for Current Block.
$style_img            = get_field( 'style_img' );
$img_center           = get_field( 'img_center' );
$columns              = get_field( 'columns' );
$vermas               = get_field( 'btn_vermas' );
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

    // Variable $colums
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

<div class="new-primary">
            <!-- div class="title-sup">
                <h2 class="display-1 text-center text-warning font-weight-bolder">COVID-19</h2>
            </div -->
            <div class="row no-gutters">            
                <div class="<?php echo esc_attr($columns_1 . ' ' . 'order-md-2') ?>">                
                    <div class="img-container bg-primary">
                        <div class="<?php echo esc_attr($text_style_img . ' ' . $text_img_center) ?>">
                           <?php the_post_thumbnail('large'); ?>
                        </div>
                    </div> 
                </div>
                <div class="<?php echo esc_attr($columns_2 . ' ' . 'd-flex order-md-1') ?>">
                    <div class="caption caption-overlay bg-light align-self-end">
                        <h4 class="h5 font-weight-bolder text-muted"></h4>
                        <h3 class="h2 font-weight-bolder"><?php the_title(); ?></h3>
                        <p><small class="smoth"><span><?php the_time('d'); ?> </span> <span><?php the_time('M'); ?> </span><span><?php the_time('Y'); ?></span></small></p>
                         <?php  if ( $vermas ) {  ?>
                             <p class="lead"><?php the_excerpt(); ?></p>
                             <a class="btn btn-outline-primary" href="<?php the_permalink(); ?>" data-toggle="modal" >Ver más</a>

                             <style>
                                 @media (min-width: 768px){
                                    .caption-overlay{ 
                                        margin-top: 200px;      
                                    } 
                                }
                             </style>

                         <?php } else {?>
                             <p><?php the_content(); ?></p>
                         <?php } ?>
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
$vermas               = get_field( 'btn_vermas' );
?>

<?php
    // Variable $style_img
        if ( $style_img == "op_50" ) {
            $text_style_img = 'op-50' ; 
           
        } else  {
             $text_style_img = '' ; }
    // Variable $img_center  
        $text_img_center = $img_center ? 'inner' : '';  
    // Variable $colums
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

<div class="new-secondary bg-white">
        <div class="row no-gutters">
             <div class="<?php echo esc_attr($columns_1) ?>">
                <div class="img-container bg-primary">
                    <div class="<?php echo esc_attr($text_style_img . ' ' . $text_img_center) ?>">
                        <?php the_post_thumbnail('large', ['class' => 'card-img']); ?>
                    </div>
                </div> 
            </div>
            <div class="<?php echo esc_attr($columns_2 . ' ' . 'd-flex') ?>">
                <div class="caption    align-self-center">
                    <h4 class="h5 font-weight-bolder text-muted"></h4>
                    <h3 class="h3 font-weight-bolder"><?php the_title(); ?></h3>
                    <p><small class="smoth"><span><?php the_time('d'); ?> </span> <span><?php the_time('M'); ?> </span><span><?php the_time('Y'); ?></span></small></p>
                     <?php   if ( $vermas ) {  ?>
                        <p class="lead"><?php the_excerpt(); ?></p>
                        <a  class="btn btn-outline-primary" href="<?php the_permalink(); ?>" data-toggle="modal">Ver más</a>
                     <?php } else { ?>
                        <p><?php the_content(); ?></p>
                     <?php } ?>
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

<?php
// Variables for Current Block.
$style_img            = get_field( 'style_img' );
$img_center           = get_field( 'img_center' );
$columns              = get_field( 'columns' );
$vermas               = get_field( 'btn_vermas' );
?>

<?php
    // Variable $style_img

        if ( $style_img == "op_50" ) {
            $text_style_img = 'op-50' ; 
           
        } else  {
             $text_style_img = '' ;}
    // Variable $img_center  
        $text_img_center = $img_center ? 'inner' : '';    

    // Variable $colums
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

 <div class="new-secondary bg-white">
        <div class="row no-gutters">
            <div class="<?php echo esc_attr($columns_1 . ' ' . 'd-flex') ?>">
                <div class="caption align-self-center">
                    <h4 class="h5 font-weight-bolder text-muted"></h4>
                    <h3 class="h3 font-weight-bolder"><?php the_title(); ?></h3>
                    <p><small class="smoth"><span><?php the_time('d'); ?> </span> <span><?php the_time('M'); ?> </span><span><?php the_time('Y'); ?></span></small></p>
                    <?php if ( $vermas ) {  ?>
                      <p class="lead"><?php the_excerpt(); ?></p>
                      <a class="btn btn-outline-primary" href="<?php the_permalink(); ?>" data-toggle="modal">Ver más</a>
                     <?php } else { ?>
                      <p><?php the_content(); ?></p>
                     <?php } ?>
                </div>
            </div>
            <div class="<?php echo esc_attr($columns_2) ?>">
                <div class="img-container bg-primary">
                    <div class="<?php echo esc_attr($text_style_img . ' ' . $text_img_center) ?>">
                        <?php the_post_thumbnail('large', ['class' => 'card-img']); ?>
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

<?php
// Variables for Current Block.
$style_img            = get_field( 'style_img' );
$img_center           = get_field( 'img_center' );
$columns              = get_field( 'columns' );
$vermas               = get_field( 'btn_vermas' );
?>

<?php
    // Variable $style_img
        if ( $style_img == "op_50" ) {
            $text_style_img = 'op-50' ; 
           
        } else  {
             $text_style_img = '' ; }
    // Variable $img_center  
        $text_img_center = $img_center ? 'inner' : '';  
    // Variable $colums
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

<div class="new-secondary bg-white">
        <div class="row no-gutters">
             <div class="<?php echo esc_attr($columns_1) ?>">
                <div class="img-container bg-primary">
                    <div class="<?php echo esc_attr($text_style_img . ' ' . $text_img_center) ?>">
                        <?php the_post_thumbnail('large', ['class' => 'card-img']); ?>
                    </div>
                </div> 
            </div>
            <div class="<?php echo esc_attr($columns_2 . ' ' . 'd-flex') ?>">
                <div class="caption    align-self-center">
                    <h4 class="h5 font-weight-bolder text-muted"></h4>
                    <h3 class="h3 font-weight-bolder"><?php the_title(); ?></h3>
                    <p><small class="smoth"><span><?php the_time('d'); ?> </span> <span><?php the_time('M'); ?> </span><span><?php the_time('Y'); ?></span></small></p>
                     <?php  if ( $vermas ) {  ?>
                         <p class="lead"><?php the_excerpt(); ?></p>
                         <a class="btn btn-outline-primary" href="<?php the_permalink(); ?>" data-toggle="modal">Ver más</a>
                     <?php } else { ?>
                        <p><?php the_content(); ?></p>
                     <?php } ?>
                </div>
            </div>      
        </div>        
</div> 
<?php endwhile; // end of the loop. ?>    
<?php } ?>



<div class="footer-news text-center mt-5 mb-5">
            <a href="<?php echo home_url('/'); ?>category/noticias" class="btn btn-primary">Ver más NOTICIAS</a>
</div>


<!--  ------------------ARTICULOS-----------------------------   -->          


 
                        
<?php query_posts( array(
           
        'posts_per_page' => 1,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'post',  
        'category_name'  => 'articulos', 
        'meta_key'  => 'mostrar',
        'meta_value'  => 1,  
    ) ); ?>
<?php   if ( have_posts() ) { ?>
        <div class="new-minor">
            <div class="container">
            <?php while ( have_posts() ) : the_post(); ?>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="img-container">
                                        <div class="inner">
                                            <?php the_post_thumbnail('medium', ['class' => 'card-img']); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 d-flex">
                                    <div class=" bg-light caption  align-self-center ">
                                        <h4 class="h5 font-weight-bolder text-muted"></h4>
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
        'category_name'  => 'articulos', 
        'meta_key'  => 'mostrar',
        'meta_value'  => 1,                      
        
    ) ); ?>

<?php   if ( have_posts() ) { ?>

    <div class="container pt-4">
        <div class="row align-items-start">
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="col-12 col-md-4 d-flex">
                <div class="caption bg-light   align-self-center">
                    <div>
                       <?php the_post_thumbnail('medium', ['class' => 'card-img']); ?>                       
                    </div>
                    <h4 class="h5 font-weight-bolder text-muted"></h4>
                    <h3 class="h3 font-weight-bolder"><?php the_title(); ?></h3>
                    <p><small class="smoth"><span><?php the_time('d'); ?> </span> <span><?php the_time('M'); ?> </span><span><?php the_time('Y'); ?></span></small></p>
                    <a  class="btn btn-outline-primary" href="<?php the_permalink(); ?>" data-toggle="modal">Ver más</a>
                </div>
        </div>     
        <?php endwhile; // end of the loop. ?>    
    </div>
    </div>
<?php } ?>


<div class="footer-news text-center mt-5">
            <a href="<?php echo home_url('/'); ?>category/articulos" class="btn btn-primary">Ver más ARTICULOS</a>
</div>