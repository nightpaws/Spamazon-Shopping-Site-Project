$(".sizebutton").click(function(){

		console.log("clicked");

		$(".selectedsize").removeClass("selectedsize");

		$(this).addClass("selectedsize");

		console.log($(this).attr("value"));
		$(".sizetosend").attr("value", $(this).attr("value"));
});

$(".colourbutton").click(function(){

		console.log("clicked");

		$(".selectedcolour").removeClass("selectedcolour");

		$(this).addClass("selectedcolour");

		console.log($(this).attr("value"));
		$(".colourtosend").attr("value", $(this).attr("value"));
});