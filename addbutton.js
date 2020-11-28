$(document).ready(function() {
    var max_fields      = 3; //maximum input boxes allowed
    var wrapper         = $(".wrap"); //Fields wrapper
    var add_button      = $(".add_button"); //Add button ID
   
    var x = 1; //initlal text box count
	
	
   $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
	
		     //text box increment
            $(wrapper).append('<div class="form-row"><div class="col-md-4 col-sm-4 col-lg-4"> <input type="text" name="skill[]"placeholder="Your Skill" required></div> <div class="col-md-4 col-sm-4 col-lg-4"> <select name="level[]" class="form-control  mt-3 "> <option value="Basic">Basic</option><option value="Intermediate">Intermediate</option><option value="Professional">Professional</option> </select> </div> <a href="#" class="mt-3 remove_field" style="text-decoration:none;"><i class="fas fa-trash"></i></a></div>'); //add input box
            x++; 
	  }
    });
   
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
       
		e.preventDefault(); 
		$(this).parent('div').remove(); 
		x--;
    })
});