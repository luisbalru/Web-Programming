<link href='jquery-ui.css' rel='stylesheet' type='text/css'>
<script src='jquery-3.2.1.min.js' type='text/javascript'></script>
<script src='jquery-ui.js' type='text/javascript'></script>

<script>
  $(document).ready(function(){

   // initialize tooltip
   $( ".respuesta span" ).tooltip({
     track:true,
     open: function( event, ui ) {
     var id = this.id;

     $.ajax({
      url:'getqueries.php',
      type:'post',
      data:{id:id},
      success: function(response){

      // Setting content option
        $("#"+id).tooltip('option','respuesta',response);
     }
    });
    }
   });

   $(".respuesta span").mouseout(function(){
     // re-initializing tooltip
     $(this).attr('title',' ');
     $(this).tooltip();
     $('.ui-tooltip').hide();
   });

  });

</script>
