function validateLogin() {
  var x = document.forms["login"]["username"].value;
  if (x==null || x==""){
    alert("Username field cannot be left blank\nNote: The email address you signed up with is your username");
    return false;
  }
  var emailStructure = /\S+@\S+\.\S+/; //this is the basic structure an email address should follow

  if (!(emailStructure.test(x))) {
    alert("That doesn't look like a valid email address, it should look like:\nYouremail@example.com");
    return false;
  }
  x = document.forms["login"]["password"].value;
  if  (x==null || x==""){
    alert("Password field cannot be left blank");
    return false;
  }
}
