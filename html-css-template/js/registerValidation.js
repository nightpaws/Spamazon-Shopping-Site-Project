function validateRegistration() {
  //email validation
  var x = document.forms["reg"]["email"].value;
  if (x==null || x==""){
    alert("Email cannot be left blank");
    return false;
  }
  var emailStructure = /\S+@\S+\.\S+/; //this is the basic structure an email address should follow
  if (!(emailStructure.test(x))) {
    alert("That doesn't look like a valid email address, it should look like:\nYouremail@example.com");
    return false;
  }

  if (x.length>254) {
    alert("Your username is too long")
    return false;
  }

  //Password validation
  //These are in different if statements rather than 1 big one so that
  //More informative error messages can be displayed to the user
  x = document.forms["reg"]["Password"].value;
  if (x==null || x==""){
    alert("Password cannot be left blank");
    return false;
  }

  var xContainsNumber = x.match(/\d+/g);
  if (xContainsNumber == null) {
    alert("Your password is not secure enough, it needs to be 8 characters long, and have at least 1 upper case letter and 1 number");
    return false;
  }

  if (!(/[A-Z]/.test(x))) {
    alert("Your password is not secure enough, it needs to be 8 characters long, and have at least 1 upper case letter and 1 number");
    return false;
  }

  if(x.length<8){
    alert("Your password is not secure enough, it needs to be 8 characters long, and have at least 1 upper case letter and 1 number");
    return false;
  }

  if (x.length>127) {
    alert("Your password is too long")
    return false;
  }

  var originalPass = x;
  x = document.forms["reg"]["PasswordC"].value;

  if (x==null || x==""){
    alert("You need to enter your password twice");
    return false;
  }
  if (originalPass!=x) {
    alert("Your passwords do not match!");
    return false;
  }

  //Name validation
  x = document.forms["reg"]["fname"].value;
  if (x==null || x==""){
    alert("First name cannot be left blank");
    return false;
  }

  if (x.length>59) {
    alert("Your first name is too long")
    return false;
  }

  x = document.forms["reg"]["sname"].value;
  if (x==null || x==""){
    alert("Surname cannot be left blank");
    return false;
  }

  if (x.length>59) {
    alert("Your surname is too long")
    return false;
  }
  
  //Date of Birth Validation
  // regular expression to match required date format
  var dob = document.forms["reg"]["dob"].value;
  var dateReg = /(^(((0[1-9]|[12][0-8])[-](0[1-9]|1[012]))|((29|30|31)[-](0[13578]|1[02]))|((29|30)[-](0[4,6,9]|11)))[-](19|[2-9][0-9])\d\d$)|(^29[-]02[-](19|[2-9][0-9])(00|04|08|12|16|20|24|28|32|36|40|44|48|52|56|60|64|68|72|76|80|84|88|92|96)$)/;
  if (dob == null || dob == "" ){
  	alert("Date of birth cannot be blank");
  	return false;
  }
  
  if(!dateReg.test(dob)){
  	alert("Date of birth must be of the format DD-MM-YYYY");
  	return false;
  }
}
