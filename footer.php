
  <!-- script src="./js/scripts/components.min.js"></script>
  <script src="./js/vendors.min.js"></script -->
  


 <footer id="footer" class=" py-5">
        <div class="container">
            <div class="text-center">
                <img src="images/logo.jpg" alt="" style="max-width: 100px;">
            </div>
            <div class="text-center copy">
                © 2020 UTEPSE <br>
Todos los derechos reservados.
            </div>

        </div>
 </footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<!-- Modals   ---------------------------------->


<?php query_posts( array(
        
     
        'posts_per_page' => 20,
        'orderby' => 'date',
        'post_type' => 'beneficios',           
        
    ) ); ?>

 <?php if ( have_posts()) { ?>    
   <?php while ( have_posts() ) : the_post(); ?>
       <div class="modal fade" id="services-<?php echo get_the_ID()  ?>" tabindex="-1" role="dialog" aria-labelledby="services-<?php echo get_the_ID()  ?>Label" aria-hidden="true">
           
              <div class="modal-dialog" role="document">
                <div class="modal-content">

                  <div class="modal-header">
                    <h5 class="modal-title" id="services-<?php echo get_the_ID() ?>Label"> <?php the_title(); ?> </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body">
                    <?php the_content(); ?>
                  </div>

                </div>   
              </div>
       </div>
   <?php endwhile; // end of the loop. ?>  
<?php } ?>



</body>
</html>