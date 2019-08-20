
  
$(document).ready(function(){

    $("#routeID").change(function(){        
        // var baseURL = "<?php echo base_url(); ?>";
        var routeID = $(this).children("option:selected").val();
        console.log("yes");
        
        $.ajax({
        	url: "http://127.0.0.1/projects/inyek/admin/index.php/admin/route_scheule_value_only",
        	method: "POST",
        	data: {route_id: routeID},
        	dataType: "text",
        	success: function(data){
        	
        		$("#show_route_with_time").html(data);
        	}
        });
    });
});