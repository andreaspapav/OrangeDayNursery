<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});


$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

</script>