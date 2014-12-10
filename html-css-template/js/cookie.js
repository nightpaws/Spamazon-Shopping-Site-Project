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
  var name = "spamaznbsk";

  var productName = "itemName";
  var productSize = "itemSize";
  var productColour = "itemColour";
  var item = {name:productName, size:productSize, colour:productColour};
  var item2 = {name:"t-shirt", size:"L", colour:"Blue"};
  var currentBasket = [];

  //If user already has items in their cart
  //save them
  if(readCookie(name)!=null){
    currentBasket= readCookie(name);
  }
  //add these items to the basket
  currentBasket.push(item);
  currentBasket.push(item2);
  var cookie = [name, '=', JSON.stringify(currentBasket), '; domain=.', window.location.host.toString(), '; path=/;'].join('');
  document.cookie = cookie;

}
function readBasket(){
  var name = "spamaznbsk";
  var result = document.cookie.match(new RegExp(name + '=([^;]+)'));
  result && (result = JSON.parse(result[1]));

  alert(result[1].colour);
}

function addItemNotification(){
  //Popup with a 1 or 2 or however many items are currently in the basket to confirm that the
  //Item has been added to the basket successfully.
}
