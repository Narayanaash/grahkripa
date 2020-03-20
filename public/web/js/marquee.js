$(function() {
     $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();
     });
      $("#gallery img").click(function(){
	  var t = $(this).attr("src");
	  $(".modal-body").html("<img src='"+t+"' class='modal-img'>");
	  $("#myModal").modal();
	});
});