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
