
$(document).ready(function(){
  $("#arrow-down").css("display","none");
  $("#contenido").slideUp();
  $("#arrow-up,#arrow-down").click(function () {
    $("#contenido").slideToggle("slow");


    if($("#arrow-up").css("display") == "block")
    {
      $("#arrow-up").css("display","none");
      $("#arrow-down").css("display","block");
    }
    else
    {
      $("#arrow-up").css("display","block");
      $("#arrow-down").css("display","none");
    }
  });
});