//Javascript Document//

function checkform(){
	var name = document.getElementById("name").value;
	var email = document.getElementById("email").value;
	var message = document.getElementById("message").value;
	var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
	
	if (name.length<3){
		alert("Name should be more than two letters!");
		return false;
	}
	else if (!email.match(mailformat)){
		alert("Entered email address is invalid!");
		return false;
	}
	else if(message.length<20){
		alert("Message should be more than 20 characters!");
		return false;
	}
	else{
		return true;
	}
}