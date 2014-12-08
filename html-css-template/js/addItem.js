function addItem(){
  var x = document.cookie;
  //These should be created using however the items are displayed, eg sql query or from domain name etc.
  var productName = "itemName";
  var productSize = "itemSize";
  var productColour = "itemColour";
  document.cookie=document.cookie+"&*&$%^"+productName+","+productSize+","+productColour;
}

function addItemNotification(){
  //Popup with a 1 or 2 or however many items are currently in the basket to confirm that the
  //Item has been added to the basket successfully.
}
