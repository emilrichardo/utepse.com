
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




<!-- JS DE LOS STEPS-->

<script>
  var form = $("#example-advanced-form").show();
 
form.steps({
    headerTag: "h3",
    bodyTag: "fieldset",
    transitionEffect: "slideLeft",
    onStepChanging: function (event, currentIndex, newIndex)
    {
        // Allways allow previous action even if the current form is not valid!
        if (currentIndex > newIndex)
        {
            return true;
        }
        // Forbid next action on "Warning" step if the user is to young
        if (newIndex === 3 && Number($("#age-2").val()) < 18)
        {
            return false;
        }
        // Needed in some cases if the user went back (clean up)
        if (currentIndex < newIndex)
        {
            // To remove error styles
            form.find(".body:eq(" + newIndex + ") label.error").remove();
            form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
        }
        form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
    },
    onStepChanged: function (event, currentIndex, priorIndex)
    {
        // Used to skip the "Warning" step if the user is old enough.
        if (currentIndex === 2 && Number($("#age-2").val()) >= 18)
        {
            form.steps("next");
        }
        // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
        if (currentIndex === 2 && priorIndex === 3)
        {
            form.steps("previous");
        }
    },
    onFinishing: function (event, currentIndex)
    {
        form.validate().settings.ignore = ":disabled";
        return form.valid();
    },
    onFinished: function (event, currentIndex)
    {
        alert("Submitted!");
    }
}).validate({
    errorPlacement: function errorPlacement(error, element) { element.before(error); },
    rules: {
        confirm: {
            equalTo: "#password-2"
        }
    }
});
Dynam

</script>


</body>
</html>