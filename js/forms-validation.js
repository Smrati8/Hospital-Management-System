// JavaScript Document


	function removeChecks(){
		var patient_name = document.getElementById("patient_name");
		var patient_email = document.getElementById("patient_email");
		var app_lname = document.getElementById("patient_phone");
		var datepicker = document.getElementById("datepicker");

		if(patient_name.value != ""){
		patient_name.style.borderColor = "#C9C9C9";	
		}
		if(patient_phone.value != ""){
		patient_phone.style.borderColor = "#C9C9C9";	
		}
		if(patient_email.value != ""){
		patient_email.style.borderColor = "#C9C9C9";
		}
		if(checkcontact(patient_email.value) == true){
		patient_email.style.borderColor = "#C9C9C9";
		}
		if(datepicker.value != ""){
		datepicker.style.borderColor = "#C9C9C9";
		}
	
	}


	
	function checkcontact(input)
	{
		var pattern1=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
		if(pattern1.test(input))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
					
					
	function validateAppoint(){
		var e = document.getElementById("doctor");
		var doctor = e.options[e.selectedIndex].value;
		var patient_name = document.getElementById("patient_name");
		var patient_phone = document.getElementById("patient_phone");
		var patient_email = document.getElementById("patient_email");
		var app_date = document.getElementById("datepicker");

		var flag = 0;
		
		if(e.options[e.selectedIndex].value == "Select Doctor")
		{
			doctor.style.borderColor = "#FE847B";
			flag = 1;
		}
		else if(patient_name.value == "" )
		{
			patient_name.style.borderColor = "#FE847B";
			flag = 1;
		}
		else if(patient_email.value=="")
		{
			patient_email.style.borderColor = "#FE847B";
			flag = 1;
		}
		else if(checkcontact(patient_email.value)==false)
		{
			patient_email.style.borderColor = "#FE847B";
			flag = 1;
		}
			else if(patient_phone.value == "" )
		{
			patient_phone.style.borderColor = "#FE847B";
			flag = 1;
		}	
		else if(app_date.value == "" )
		{
			app_date.style.borderColor = "#FE847B";
			flag = 1;
		}
	
		if(flag == 0)
		{	
			
			$.ajax({
							type: "POST",
							url: "appointment-submit.php",
							data: $("#appoint_form").serialize(),
							success: function(msg)
							{
								$('#message-app').fadeIn(2000);
								document.getElementById("message-app").innerHTML = "Thanks for your appointment. We will get back to you within 48 hrs.";
								return true;
							}
						});
			
		}
	}
	
	function validateLogin(){
		var email = document.getElementById("email");
		var password = document.getElementById("password");
	
		var flag = 0;
		
		if(email.value == "" )
		{
			email.style.borderColor = "#FE847B";
			flag = 1;
		}
		else if(checkcontact(email.value)==false)
		{
			email.style.borderColor = "#FE847B";
			flag = 1;
		}	
		else if(password.value=="")
		{
			password.style.borderColor = "#FE847B";
			flag = 1;
		}
		
		if(flag == 0)
		{	
			
			
			
			$.ajax({
							type: "POST",
							url: "login-submit.php",
							data: $("#login_form").serialize(),
							success: function(response)
							{
								var json_obj = $.parseJSON(response);//parse JSON
								if(json_obj.msg == 'success'){
									window.location.href="dashboard.php";
									return true;
								}else{
									$('#error').fadeIn(2000);
									document.getElementById("error").innerHTML = "Invalid login credentials. Please try again later.";
									return true;
								}
							}
						});
						
		}
}
		
		function removeContactChecks(){
		
		var name = document.getElementById("name");
		var email_address = document.getElementById("email_address");
		var subject = document.getElementById("subject");
		var msg = document.getElementById("msg");
	
			if(name.value != ""){
			name.style.borderColor = "#C9C9C9";
			}
			if(email_address.value != ""){
			email_address.style.borderColor = "#C9C9C9";
			}
			if(checkcontact(email_address.value) == true){
			email_address.style.borderColor = "#C9C9C9";
			}
		
		}			
					
	function validateContact(){
		var name = document.getElementById("name");
		var email_address = document.getElementById("email_address");
		var subject = document.getElementById("subject");
		var msg = document.getElementById("msg");
	
		var flag = 0;
		
		if(name.value == "" )
		{
			name.style.borderColor = "#FE847B";
			flag = 1;
		}
		else if(email_address.value=="")
		{
			email_address.style.borderColor = "#FE847B";
			flag = 1;
		}
		else if(checkcontact(email_address.value)==false)
		{
			email_address.style.borderColor = "#FE847B";
			flag = 1;
		}	
		
		if(flag == 0)
		
		{
			$.ajax({
							type: "POST",
							url: "contact-submit.php",
							data: $("#contact_form").serialize(),
							success: function(msg)
							{	
								$('#message-contact').fadeIn(2000);
								document.getElementById("message-contact").innerHTML = "Thank you for contacting us. We'll contact you shortly.";
								return true;
							}
						});
	
		}
	}