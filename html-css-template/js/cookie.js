function read(){
  alert(readCookie('user'));
}
function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

function addItem(){
  // var x = document.cookie;
  // //These should be created using however the items are displayed, eg sql query or from domain name etc.
  // var productName = "itemName";
  // var productSize = "itemSize";
  // var productColour = "itemColour";
  // var item = {name:"itemName", size:productSize, colour:productColour};
  // // var name = item.name();
  // var currentBasket = readCookie('basket');
  // currentBasket[currentBasket.length] = item;
  var expires = getTime()+(5*24*60*60*1000).toUTCString();
  document.write(expires);
  // document.cookie = "basket=currentBasket;"+expires;
}

function addItemNotification(){
  //Popup with a 1 or 2 or however many items are currently in the basket to confirm that the
  //Item has been added to the basket successfully.
}
