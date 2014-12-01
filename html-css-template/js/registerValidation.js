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

  x = document.forms["reg"]["sname"].value;
  if (x==null || x==""){
    alert("Surname cannot be left blank");
    return false;
  }
}
