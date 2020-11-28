

$(document).ready(function() {
    var max_fields      = 3; //maximum input boxes allowed
    var wrapper         = $(".wrap"); //Fields wrapper
    var add_button      = $(".add_button"); //Add button ID
   
    var x = 1; //initlal text box count
	
	
   $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
	
		     //text box increment
            $(wrapper).append('<div><div class="form-row"> <div class="col-md-8 col-sm-8 col-lg-8"> <input type="text" name="project[]" placeholder="Project Title" required></div> </div> <div class="form-row"> <div class="col-md-8 col-sm-8 col-lg-8">   <textarea name="projectdesc[]" class="form-control mt-3"  placeholder="Project Description" required></textarea> </div></div><a href="#" class="mt-3 remove_field" style="text-decoration:none;"><i class="fas fa-trash"></i></a></div>'); //add input box
            x++; 
	  }
    });
   
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
       
		e.preventDefault(); 
		$(this).parent('div').remove(); 
		x--;
    })
});