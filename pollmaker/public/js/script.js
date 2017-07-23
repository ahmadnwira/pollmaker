$('dcocument').ready(checkInputs);

$('#addChoice').click(function(){
	$('#choices').append('<input type="text" class="form-control">');
	checkInputs();
});

/* check that all text inputs are filed */
function checkInputs(){
	$('#action').attr('disabled', true); // makes default state of the button 'disabled'

	$('input:text').keyup(function () {
	   var disable = false;

	       $('input:text:not(:first)').each(function(){
	            if($(this).val()==""){ // checks if eacg text input has value in it
	                 disable = true;   // change the state of button to disabled if finds violation   
	            }
	            
	            $(this).attr('name',$(this).val());
	            
	       });
	  $('#action').attr('disabled', disable); // apply the final state to the button
	});	
}