function read(){
  alert(readCookie('spamaznauth'));
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
  // //These should be created using however the items are displayed, eg sql query or from domain name etc.
  var productName = "itemName";
  var productSize = "itemSize";
  var productColour = "itemColour";
  var item = {name:productName, size:productSize, colour:productColour};
  var item2 = {name:"t-shirt", size:"L", colour:"Blue"};
  var currentBasket = [];

  //If user has nothing in their basket
  if(readCookie('basket')==null){
    currentBasket= readCookie('basket');
    document.cookie="basket=currentBasket";
  }
  currentBasket.push(item);
  currentBasket.push(item2);
  var name = "basket";
  var cookie = [name, '=', JSON.stringify(currentBasket), '; domain=.', window.location.host.toString(), '; path=/;'].join('');
  document.cookie = cookie;
  var result = document.cookie.match(new RegExp(name + '=([^;]+)'));
  result && (result = JSON.parse(result[1]));

  alert(result[1].colour);
}

function addItemNotification(){
  //Popup with a 1 or 2 or however many items are currently in the basket to confirm that the
  //Item has been added to the basket successfully.
}
