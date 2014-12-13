

function checkoutValidation(){

	var x = document.forms["order"]["street"].value;
    if (x == null || x == "") {
        alert("Street cannot be left blank");
        return false;
    }
    
    x = document.forms["order"]["town"].value;
    if (x == null || x == "") {
        alert("Town/City cannot be left blank");
        return false;
    }

    x = document.forms["order"]["county"].value;
    if (x == null || x == "") {
        alert("County cannot be left blank");
        return false;
    }
    
    x = document.forms["order"]["postcode"].value;
    if (x == null || x == "") {
        alert("Postcode cannot be left blank");
        return false;
    }

	x = document.forms["order"]["cardNumber"].value;
	if(x == null || !isNumeric(x) || x == ""){
		alert("Please enter card number");
		return false;
	}
	if(x.length < 16){
		alert("The card number must be 16 digits long");
		return false;
	}

	x = document.forms["order"]["nameOnCard"].value;
    if (x == null || x == "") {
        alert("Cardholder name cannot be left blank");
        return false;
    }

	x = document.forms["order"]["securityCode"].value;
	if(x == null || !isNumeric(x) || x == ""){
		alert("Please enter security number");
		return false;
	}
	if(x.length < 3){
		alert("The security code must be 3 digits long");
		return false;
	}

	x = document.forms["order"]["sortCode"].value;
	if(x == null || !isNumeric(x) || x == ""){
		alert("Please enter sort code");
		return false;
	}
	if(x.length < 6){
		alert("The sort code must be 6 digits long");
		return false;
	}


	x = document.forms["order"]["month"].value;
	if(x == ""){
		alert("Please enter a valid month");
		return false;
	}

	x = document.forms["order"]["year"].value;
	if(x == ""){
		alert("Please enter a valid year");
		return false;
	}

}

function isNumeric(x){
	return !isNaN(parseInt(x));
}