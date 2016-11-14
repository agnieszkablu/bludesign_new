
var error = false;

$("#contactForm").submit(function(event){
	
    // cancels the form submission
    event.preventDefault();
    //JS validate form
    validateForm();
    console.log(error);
    if (error === false) {
    	resetErrors();
    	submitForm();
		console.log('validate');
	}else{
		
		console.log('dont validate');
	}
	return;
});
function validateForm(){
	// Initiate Variables With Form Content 
	var inputName = $("#your-name");
	var inputEmail = $("#your-email");
	var inputMessage = $("#your-message");

	if(validateInput(inputName)){	
		error = false;
		if(validateInput(inputEmail)){
			error = false;
			if(validateInput(inputMessage)){
				error = false;
			}
		}
	}
	return error;
}
//validate all inputs
function validateInput(userInput){
	var value = userInput.val();
	var filter = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if (value === "" || value === null) {
		inputError(userInput);
	}else if(userInput.attr('type') == 'email' && !filter.test(value)){
		inputError(userInput);
	}else{
        return true;
	}
}
function inputError(err){
	err.attr('aria-invalid', 'true').addClass('inputTxtError');
	err.siblings('.error').removeClass('hidden');
	error = true;
	return false;
}
//ajax submit form
function submitForm(){
    var name = $("#your-name").val();
	var email = $("#your-email").val();
	var message = $("#your-message").val();
    $.ajax({
        type: "POST",
        url: "inc/form/form2.php",
        data: "name=" + name + "&email=" + email + "&message=" + message,
        success : function(text){
            if (text == "success"){
                formOutputMsg('Formularz został wysłany', 'form-success');
            }else {
            	 formOutputMsg('Wystąpił błąd. Formularz nie został wysłany', 'form-error');
            }
        }
    });
}
function formOutputMsg(msg, cl){
    $( "#response-output" ).removeClass( "hidden" ).addClass(cl).text(msg);
}
function resetErrors() {
	var inputs = $('input, textarea').not(':input[type=submit]');
    inputs.attr('aria-invalid', 'false').removeClass('inputTxtError');
	$(".error").addClass('hidden');
	console.log('reset');
}