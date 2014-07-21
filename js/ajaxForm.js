$(document).ready(function() {
  $('.error').hide();
  
  $(".button").click(function() {
    
     $('.error').hide();
   	  var name = $("input#name").val();
      if (name == "") {
      $("label#name_error").show();
      $("input#name").focus();
      return false;
    }
      var email = $("input#email").val();
      if (email == "") {
      $("label#email_error").show();
      $("input#email").focus();
      return false;
    }

    var rege = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if(!rege.test($("input#email").val())){
      $("label#email_error").show();
      $("input#email").focus();
      return false;
    }

      var phone = $("input#phone").val();
      var message = $("textarea#message").val();

      var varData =  'name='+ name + '&email=' + email + '&phone=' + phone + '&message=' + message;

      $("#button").html("Sending Message....");

  	    $.ajax({
    	type: "POST",
    	url: "contact.php",
    	data: varData,
    	success: function (){
    		$("#button").html("Submit");
        $("input#name").val("");
        $("input#email").val("");
        $("input#phone").val("");
        $("textarea#message").val("");
        $("#myModal").modal("show");
    	}

    });
  	return false;
  });
});