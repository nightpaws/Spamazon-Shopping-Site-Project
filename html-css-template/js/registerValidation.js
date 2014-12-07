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
}
