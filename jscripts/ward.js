$(document).ready(function(){
  $("#war").click(function(){
    var ward = $("#wards").val();

    // begining of ajax function to interact wi php script
    $.ajax({
        url: 'numberofwards.php',
        data: {num: ward},
        success:function(data){
          $("#displayinfo").html(data);
        }
    });

    // End of ajax function

  });
});
