$(document).ready(function(){
	$('#iniciar').click(function(){
    	    $.ajax({
        	    url: 'principal.php',
            	type: 'POST',
  	          	data: $('#form').serialize(),   
            	success: function(res){
   					console.log(res);             
            	}   
    		});
   		});
});