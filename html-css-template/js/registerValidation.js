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
    alert("Your username is too long, it needs to be less than 255 characters in length")
    return false;
  }

  //Password validation
  //These are in different if statements rather than 1 big one so that a
  //More informative error messages can be displayed to the user
  x = document.forms["reg"]["Password"].value;
  if (x==null || x==""){
    alert("Password cannot be left blank");
    return false;
  }
  //Checks the password contains a number
  var xContainsNumber = x.match(/\d+/g);
  if (xContainsNumber == null) {
    alert("Your password is not secure enough, it needs to be 8 characters long, and have at least 1 upper case letter and 1 number");
    return false;
  }
  //Checks the password contains an upper case letter
  if (!(/[A-Z]/.test(x))) {
    alert("Your password is not secure enough, it needs to be 8 characters long, and have at least 1 upper case letter and 1 number");
    return false;
  }
  //Checks the password is 8 characters in length
  if(x.length<8){
    alert("Your password is not secure enough, it needs to be 8 characters long, and have at least 1 upper case letter and 1 number");
    return false;
  }
  //Checks the password can be stored in the database
  if (x.length>127) {
    alert("Your password is too long, it needs to be less than 128 characters in length")
    return false;
  }

  var originalPass = x;
  x = document.forms["reg"]["PasswordC"].value;
  //User needs to enter password twice
  if (x==null || x==""){
    alert("You need to enter your password twice");
    return false;
  }
  //Makes sure no typo was made
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
  //Checks it can be stored in the database
  if (x.length>59) {
    alert("Your first name is too long, it needs to be less than 60 characters in length")
    return false;
  }
  //Checks field is not null
  x = document.forms["reg"]["sname"].value;
  if (x==null || x==""){
    alert("Surname cannot be left blank");
    return false;
  }
  //Checks name can be stored in the database
  if (x.length>59) {
    alert("Your surname is too long, it needs to be less than 60 characters in length")
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
