function item(name, size, colour){
  item.name = name;
  item.size = size;
  item.colour = colour;
}

function read(){
  document.cookie = "herp@derp.com&*&$%^Top&*&$%^L&*&$%^Blue";
  var x = document.cookie;
  //var x = "herp@derp.com&*&$%^Top&*&$%^L&*&$%^Blue";
  var userEmail = "temp";
  var emailStructure = /\S+@\S+\.\S+/; //this is the basic structure an email address should follow
  var basket;

  //Read the cookie into an array
  var array = x.split("&*&$%^");
  //Loop through the array to get user details and create the baskets
  for(i = 0; i < array.length; i++){
    if ((emailStructure.test(array[i]))){
      userEmail = array[i];
    }
    else if(array[i] != null){
      var itemName = array[i];
      var itemSize = array[(i+1)];
      var itemColour = array[(i+2)];
      i = i+2;
      //var currentItem = new item(itemName, itemSize, itemColour);
      //basket[basket.length] = currentItem;
    }
  }
}
