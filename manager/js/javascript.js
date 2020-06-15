


function ajaxRequest(Cname, userID) {
	var target = '#target';
	var poststr= "name="+Cname+"&id="+userID;
		$.ajax({
		    type: 'POST',
		    url: 'Ajax.php',
		    data: (poststr),
			success: function(msg) {
					//$(target).hide('fast');
					$(target).html(msg);
					//$(target).show('fast');
				}
     	});
}

/*
//var xhr = null;
function ajaxRequest(param) {
		
        if(window.XMLHttpRequest) // Firefox.
			xhr = new XMLHttpRequest();
        else
		{
			if(window.ActiveXObject) // Internet Explorer.
				xhr = new ActiveXObject("Microsoft.XMLHTTP");
			else
			{
				alert("Your browser doesn't accept the XMLHTTPRequest object...");
				return;
			}
		}	
	
	xhr.onreadystatechange = function() 
	{
		if (xhr.readyState == 4) 
		{
			document.getElementById("target").innerHTML=xhr.responseText;
		}
	};
	
	xhr.open("POST", "Ajax.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhr.send("name="+param);
}*/
