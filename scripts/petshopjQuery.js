// Animal button functions
$(document).ready(function(){
	    $("#dogbutton").click(function(){
	        $(".main").load("./populateanimal.php?animal=Dog");
	    });
	});

$(document).ready(function(){
	    $("#catbutton").click(function(){
	        $(".main").load("./populateanimal.php?animal=Cat");
	    });
	});

$(document).ready(function(){
	    $("#birdbutton").click(function(){
	        $(".main").load("./populateanimal.php?animal=Bird");
	    });
	});

$(document).ready(function(){
	    $("#ferretbutton").click(function(){
	        $(".main").load("./populateanimal.php?animal=Ferret");
	    });
	});

$(document).ready(function(){
	    $("#axolotlbutton").click(function(){
	        $(".main").load("./populateanimal.php?animal=Axolotl");
	    });
	});

$(document).ready(function(){
	    $("#snakebutton").click(function(){
	        $(".main").load("./populateanimal.php?animal=Snake");
	    });
	});

$(document).ready(function(){
	    $("#hamsterbutton").click(function(){
	        $(".main").load("./populateanimal.php?animal=Hamster");
	    });
	});

$(document).ready(function(){
	    $("#rabbitbutton").click(function(){
	        $(".main").load("./populateanimal.php?animal=Rabbit");
	    });
	});

//Navigation Bar

//Home page
$(document).ready(function(){
	    $("#home").click(function(){
	        $(".main").load("./featured.php");
	    });
	});

//Contact page
$(document).ready(function(){
	    $("#contact").click(function(){
	        $(".main").load("./contact.html");
	    });
	});

//Shipping page
$(document).ready(function(){
	    $("#shipping").click(function(){
	        $(".main").load("./shipping.html");
	    });
	});

//About page
$(document).ready(function(){
	    $("#about").click(function(){
	        $(".main").load("./about.html");
	    });
	});

//All products
$(document).ready(function(){
	    $("#products").click(function(){
	        $(".main").load("./allproducts.php");
	    });
	});

//Search box
$(document).ready(function(){
		$("#searchbutton").click(function(){
			// alert("Start of jQuery");
			var searchterm = $("#searchtext").val();
			//alert("The search term is " + searchterm);


		    $(".main").load("./search.php?searchtext=" + searchterm);
		});   
	});

//Help
$(document).ready(function(){
	    $("#help").click(function(){
	        $(".main").load("./help.html");
	    });
	});