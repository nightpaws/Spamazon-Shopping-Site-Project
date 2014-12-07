function userLogin(){
  //check the user details are correct in the database
  //now store these details in the cookie.
  document.cookie = userDetails+","+document.cookie;
  //or something to this effect, so long as user details are at start of the string...
}
