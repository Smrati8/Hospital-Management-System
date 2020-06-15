
/***************** Universal Functions *****************/

function isNull(aStr)
{
	var index;		
	for (index=0; index < aStr.length; index++)
		if(aStr.charAt(index) != ' ')
			return false;
	return true;
}

function isEmail(aStr)
{
	var reEmail=/^[0-9a-zA-Z_\.-]+\@[0-9a-zA-Z_\.-]+\.[0-9a-zA-Z_\.-]+$/;
	if(!reEmail.test(aStr))
	{
		return false;
	}
	return true;
}

function alphanumeric(alphane)
{
	var numaric = alphane;
	for(var j=0; j<numaric.length; j++)
		{
		  var alphaa = numaric.charAt(j);
		  var hh = alphaa.charCodeAt(0);
		  if((hh > 47 && hh<59) || (hh > 64 && hh<91) || (hh > 96 && hh<123))
		  {
		  }
		else	{
			 return false;
		  }
		}
 return true;
}

function IsNumeric(strString)
{
   var strValidChars = "0123456789";
   var strChar;
   var blnResult = true;

   if (strString.length == 0) return false;

   //  test strString consists of valid characters listed above
   for (i = 0; i < strString.length && blnResult == true; i++)
      {
      strChar = strString.charAt(i);
      if (strValidChars.indexOf(strChar) == -1)
         {
         blnResult = false;
         }
      }
   return blnResult;
}

function IsAmount(strString)
{
   var strValidChars = "0123456789.";
   var strChar;
   var blnResult = true;

   if (strString.length == 0) return false;

   //  test strString consists of valid characters listed above
   for (i = 0; i < strString.length && blnResult == true; i++)
      {
      strChar = strString.charAt(i);
      if (strValidChars.indexOf(strChar) == -1)
         {
         blnResult = false;
         }
      }
   return blnResult;
}


/* Main Registration Form */

function chkform() 
{	
	if(isNull(document.getElementById('firstname').value) || document.getElementById('firstname').value == 'Your first name'){
		 alert('Please enter your First Name.');
		 document.getElementById('firstname').focus();
		 return false;
	}
	if(isNull(document.getElementById('surname').value) || document.getElementById('surname').value == 'Your surname'){
		 alert('Please enter your Sur Name.');
		 document.getElementById('surname').focus();
		 return false;
	}
    if(isNull(document.getElementById('email').value) || document.getElementById('email').value == 'Your email address') 
	{
      	 alert('Please enter your email address.');
		 document.getElementById('email').focus();
		 return false;
    }
	if(!isEmail(document.getElementById('email').value)){
		 alert('Please enter valid email address.');
		 document.getElementById('email').focus();
		 return false;
    }
    if(isNull(document.getElementById('departure').value)) 
	{
      	 alert('Please select the departure airport.');
		 document.getElementById('departure').focus();
		 return false;
    }
    if(isNull(document.getElementById('receiptnumber').value) || document.getElementById('receiptnumber').value == 'Your receipt number') 
	{
      	 alert('Please enter receipt number.');
		 document.getElementById('receiptnumber').focus();
		 return false;
    }
    if(IsNumeric(document.getElementById('receiptnumber').value) == false) 
	{
      	 alert('Please enter only numbers in receipt number.');
		 document.getElementById('receiptnumber').focus();
		 return false;
    }
    if(document.getElementById('receiptnumber').value.length < 26) 
	{
      	 alert('Receipt number needs to be 26 digits long.');
		 document.getElementById('receiptnumber').focus();
		 return false;
    }
    if(isNull(document.getElementById('receiptvalue').value) || document.getElementById('receiptvalue').value == 'Your receipt value £') 
	{
      	 alert('Please enter receipt value.');
		 document.getElementById('receiptvalue').focus();
		 return false;
    }
    if(IsAmount(document.getElementById('receiptvalue').value) == false) 
	{
      	 alert('Please enter amount in receipt value.');
		 document.getElementById('receiptvalue').focus();
		 return false;
    }
    if(document.getElementById('receiptvalue').value < 50) 
	{
      	 alert('Receipt value needs to be £50 or more (excluding tobacco products)');
		 document.getElementById('receiptvalue').focus();
		 return false;
    }
    if(document.wdfform.ageproof.checked == false) 
	{
      	 alert('You must be 18 to sign up.');
		 document.getElementById('ageproof').focus();
		 return false;
    }
    return true;
}

/* Admin Login Form */

function validlogin(){
    if(isNull(document.getElementById('username').value)) 
	{
		alert("Please enter username.");
		document.getElementById('username').focus();
		return false;
	}	
    if(isNull(document.getElementById('password').value)) 
	{
		alert("Please enter password.");
		document.getElementById('password').focus();
		return false;
	}
	return true;	
}

/* Report 1 Date Check */

function report1Check(){
    if(isNull(document.getElementById('datepicker').value)) 
	{
		alert("Please select the From date.");
		document.getElementById('datepicker').focus();
		return false;
	}	
    if(isNull(document.getElementById('datepicker1').value)) 
	{
		alert("Please select the To date.");
		document.getElementById('datepicker1').focus();
		return false;
	}
    if(document.getElementById('datepicker').value > document.getElementById('datepicker1').value) 
	{
		alert("From date should be greater then to date.");
		document.getElementById('datepicker').focus();
		return false;
	}
	return true;	
}

/* Report 2 Date Check */

function report2Check(){
    if(isNull(document.getElementById('datepicker2').value)) 
	{
		alert("Please select the From date.");
		document.getElementById('datepicker2').focus();
		return false;
	}	
    if(isNull(document.getElementById('datepicker3').value)) 
	{
		alert("Please select the To date.");
		document.getElementById('datepicker3').focus();
		return false;
	}
    if(document.getElementById('datepicker2').value > document.getElementById('datepicker3').value) 
	{
		alert("From date should be greater then to date.");
		document.getElementById('datepicker2').focus();
		return false;
	}
	return true;	
}

/* Report 3 Date Check */

function report3Check(){
    if(isNull(document.getElementById('datepicker4').value)) 
	{
		alert("Please select the From date.");
		document.getElementById('datepicker4').focus();
		return false;
	}	
    if(isNull(document.getElementById('datepicker5').value)) 
	{
		alert("Please select the To date.");
		document.getElementById('datepicker5').focus();
		return false;
	}
    if(document.getElementById('datepicker4').value > document.getElementById('datepicker5').value) 
	{
		alert("From date should be greater then to date.");
		document.getElementById('datepicker4').focus();
		return false;
	}
	return true;	
}

function getFormValues() {
    if (isNull(document.getElementById('firstname').value)) {
		document.getElementById('firstname').value='Your first name'
		return false;
    }
    if (isNull(document.getElementById('surname').value)) {
		document.getElementById('surname').value='Your surname'
		return false;
    }
    if (isNull(document.getElementById('email').value)) {
		document.getElementById('email').value='Your email address'
		return false;
    }
    if (isNull(document.getElementById('receiptnumber').value)) {
		document.getElementById('receiptnumber').value='Your receipt number'
		return false;
    }
    if (isNull(document.getElementById('receiptvalue').value)) {
		document.getElementById('receiptvalue').value='Your receipt value £'
		return false;
    }
	return true;
}