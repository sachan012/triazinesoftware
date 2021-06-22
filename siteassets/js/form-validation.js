$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"

  $("form[name='contactUs']").validate({
    // Specify validation rules
    rules: {

      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      fname: "required",
      contact: "required",
	message: "required",
      email: {
        required: true,
        
      },
   
	
     
    },
    // Specify validation error messages recaptcha
    messages: {
      fname: "Please enter your full name",
      contact: "Please enter your Contact Number",
      
      email: "Please enter a valid email address",
      message: "Please enter your message"
	
      
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});