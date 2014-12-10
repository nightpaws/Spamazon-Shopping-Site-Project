function item(name, size, colour){
  item.name = name;
  item.size = size;
  item.colour = colour;
}

function read(){
  // readCookie();
//  document.cookie = "herp@derp.com&*&$%^Top&*&$%^L&*&$%^Blue";
  // var x = document.cookie;
  //var data = '<?= $_SESSION['$user'] ?>';
  //  var cookie = readcookie("user");
  // var user = @Session'["user"]';
  document.write(document.cookie);
  //var x = "herp@derp.com&*&$%^Top&*&$%^L&*&$%^Blue";
  // var userEmail = "temp";
  // var emailStructure = /\S+@\S+\.\S+/; //this is the basic structure an email address should follow
  // var basket;
  //
  // //Read the cookie into an array
  // var array = x.split("&*&$%^");
  // //Loop through the array to get user details and create the baskets
  // for(i = 0; i < array.length; i++){
  //   if ((emailStructure.test(array[i]))){
  //     userEmail = array[i];
  //   }
  //   else if(array[i] != null){
  //     var itemName = array[i];
  //     var itemSize = array[(i+1)];
  //     var itemColour = array[(i+2)];
  //     i = i+2;
  //     //var currentItem = new item(itemName, itemSize, itemColour);
  //     //basket[basket.length] = currentItem;
  //   }
  // }
  // alert(document.cookie);
}
function readCookie(){
    var cookies;

    function readCookie(name,c,C,i){
        if(cookies){ return cookies[name]; }

        c = document.cookie.split('; ');
        cookies = {};

        for(i=c.length-1; i>=0; i--){
           C = c[i].split('=');
           cookies[C[0]] = C[1];
        }

        return cookies[name];
    }

    window.readCookie = readCookie; // or expose it however you want
}
//
// function readCookie(name) {
// 	var cookiename = name + "=";
// 	var ca = document.cookie.split(';');
// 	for(var i=0;i < ca.length;i++)
// 	{
// 		var c = ca[i];
// 		while (c.charAt(0)==' ') c = c.substring(1,c.length);
// 		if (c.indexOf(cookiename) == 0) return c.substring(cookiename.length,c.length);
// 	}
// 	return null;
// }
// document.write("n" + readCookie('site'));
//
// function readCookie(name) {
//     var nameEQ = name + "=";
//     var ca = document.cookie.split(';');
//     for(var i=0;i < ca.length;i++) {
//         var c = ca[i];
//         while (c.charAt(0)==' ') c = c.substring(1,c.length);
//         if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
//     }
//     return null;
// }
