// JavaScript Document

function validate()
{
	//get the values
	var name = document.getElementById("mname").value;
	var year = document.getElementById("year").value;
	var genre = document.getElementById("genre").value;
	var description = document.getElementById("description").value;
	var email = document.getElementById("email").value;
	var poster = document.getElementById("poster").value;
	var agree = document.getElementById("agree").checked;
	var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
	
	//name validation
	if (name==""){
		alert("Name is Missing!");
		return false;
	}
	else if(name.length<2)
		{
			alert("Name must contain more than 2 characters!");
			return false;
		}
	
	//year validation
	else if (year==""){
		alert("Year is Missing!");
		return false;
	}
	else if((year.length<4) || (year.length>4))
		{
			alert("Year must contain 4 Numbers!");
			return false;
		}
	else if (isNaN(year))
		{
			alert("Year must be in numeric form!");
			return false;
		}
	
	//genre validation
	else if (genre==""){
		alert("Genre isn't selected!");
		return false;
	}
	
	//description validation
	else if (description==""){
		alert("Description is Missing!");
		return false;
	}
	else if(description.length<30)
		{
			alert("Description is too short!");
			return false;
		}
	else if(description.length>250)
		{
			alert("Maximum description limit (250) exceeded!");
			return false;
		}

	//email validation
	else if (email==""){
		alert("Email is Missing!");
		return false;
	}
	else if (!email.match(mailformat))
		{
			alert("Email is not valid!");
			return false;
		}
	
	//poster validation
	else if(poster==""){
		alert("poster is missing or invalid!");
		return false;
	}

	//agree validation
	else if (agree!=true){
		alert("You haven't agreed to the terms!");
		return false;
	}
	else
		{
			return true;
		}
}