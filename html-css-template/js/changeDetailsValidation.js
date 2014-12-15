function newEmail(){
  var x = document.forms["email-change"]["emailNew"].value;
  if (x==null || x==""){
    alert("Email field cannot be left blank\nNote: The email address you signed up with is your username");
    return false;
  }
  var emailStructure = /\S+@\S+\.\S+/; //this is the basic structure an email address should follow

  if (!(emailStructure.test(x))) {
    alert("That doesn't look like a valid email address, it should look like:\nYouremail@example.com");
    return false;
  }
  if (x.length>254) {
    alert("Your email is too long, it needs to be less than 255 characters in length")
    return false;
  }
  var originalEmail = x;
  var x = document.forms["email-change"]["emailNewC"].value;
  if (originalEmail != x) {
    alert("Your emails do not match!");
    return false;
  }
}

function newPassword(){
  x = document.forms["pass-change"]["CurrentPassword"].value;

  if (x == null || x == "") {
      alert("Current Password cannot be left blank");
      return false;
  }

  x = document.forms["pass-change"]["PasswordNew"].value;

  if (x == null || x == "") {
    alert("New Password cannot be left blank");
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
  if (x.length < 8) {
      alert("Your password is not secure enough, it needs to be 8 characters long, and have at least 1 upper case letter and 1 number");
      return false;
  }

  //Checks the password can be stored in the database
  if (x.length > 127) {
      alert("Your password is too long, it needs to be less than 128 characters in length")
      return false;
  }

  var originalPass = x;
  x = document.forms["pass-change"]["PasswordNewC"].value;
  //User needs to enter password twice
  if (x == null || x == "") {
      alert("You need to enter your new password twice");
      return false;
  }
  //Makes sure no typo was made
  if (originalPass != x) {
      alert("Your passwords do not match!");
      return false;
  }
}
