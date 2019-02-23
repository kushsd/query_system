$(document).ready(function(){
	var active_query = 0;
	var edit_query = false;
 	ld_query();	
	
	
	

  $("#new_query_btn").click(function(){ 
    $.ajax({
        url: "new-query.php",
        success: function(data){
        	$("#msg").html("New query Displayed for input");
            $("#query_form").html(data);
            new_query_submit();
        },
        error: function(){
            $("#signupmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
        }
    
    });
  });

  function new_query_submit() {
  	$("#new_query_form").submit(function(event){ 
	    event.preventDefault();
	    var datatopost = $(this).serializeArray();
	    $.ajax({
	        url: "add-query.php",
	        type: "POST",
	        data: datatopost,
	        success: function(data){
	            $("#msg").html("New query submitted");
	            ld_query();
	        },
	        error: function(){
	            $("#signupmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
	            
	        }
	    
	    });
	  });
  }


  function edit_query_submit() {
  	$("#edit_query_form").submit(function(event){ 
	    event.preventDefault();
	    var datatopost = $(this).serializeArray();
	    $.ajax({
	        url: "edit-query-submit.php",
	        type: "POST",
	        data: datatopost,
	        success: function(data){
	            $("#msg").html("Edit query submitted "+data);
	            ld_query();
	        },
	        error: function(){
	            $("#signupmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
	            
	        }
	    
	    });
	  });
  }

	function ld_query() {
		//alert("loading");
		$.ajax({
	    url: "load-query.php",
	    success: function (data){
	        $('#my_query').html(data); 
	        ed_query(); dl_query();
	        //$("#msg").html("Queries are to be loaded");
	    },
	    error: function(){
	        $('#my_query').text("There was an error with the Ajax Call. Please try again later.");
	    }
		});
	}
	function ed_query() {
		$(".note").click(function() {
			//alert($(this).attr("id"));
			$.ajax({
				url: "edit-query.php",
				type: "POST",
				data: {edit_id: $(this).attr("id")},
				success: function(data) {
					$("#msg").html("Query to be editing is presented");
					 $("#query_form").html(data);
					 edit_query_submit();
				}
			}); 
		});
	}
	function dl_query() {
		$(".del_query").click(function() {
			var dl_id = $(this).attr("id");
			//alert(dl_id);
			$.ajax({
		 		url: "del-query.php",
		 		type: "POST",
		 		data: {id: dl_id},
		 		success: function(data) {
		 			$("#msg").html("query deleted");
		 			ld_query();
		 		}
		 	}); 
		});
	}
});