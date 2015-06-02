<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" context="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<meta name="description" content="">

    <title>CodeIgniter Bootstrap</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">

	  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	  <!--<script src="//code.jquery.com/jquery-1.10.2.js"></script>-->
	  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	  <!--<link rel="stylesheet" href="/resources/demos/style.css">-->
	 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

		<script src="<?php //echo base_url('assets/jquery_ui/external/jquery/jquery.js') ?>"></script>
	  <script src="<?php //echo base_url('assets/jquery_ui/jquery-ui.js') ?>"></script>

	
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		
	  <style>
		  ul { list-style-type: none; margin: 0; padding: 0; margin-bottom: 10px; }
		  li { margin: 5px; padding: 5px; width: 150px; }
		.test {
			font-weight: bold;
			color: red;
		}
	  </style>
	  <script>
	
	//toont welcome tijdens het laden: normaal javascript:
	/*window.onload = function() {
    alert( "welcome" );
	};*/

	//toont yolo na het laden van de pagina, werkt met jquery, zie $
	$( document ).ready(function() {
		//alert( "yolo" );
		
		//add event listener for element p "click", met een alert, .addClass en .removeClass en .hide
		$( "a" ).click(function( event ) {
			//alert( "Thanks for visiting!" );
			
			//now the button click WILL show the message, but WONT follow the link
			event.preventDefault();
			
			//aantal dingen veranderen:
			//h2 en h2 veranderen:
			//$( "h2" ).addClass( "test" );
			//$( "h1" ).addClass( "test" );
	//OF:	//h1 en h2 hebben allebei class = giefhead
			$( ".giefhead" ).addClass( "test" );
			//element a iets weghalen
			$( "a" ).removeClass( "test" );
			
			//na het rood te hebben gemaakt: verwijderen
			$( ".giefhead").hide( "slow" );

			//veranderd de class changeme in "hello"
			$(".changeMe").text("hello");
			
			//veranderd de class changeMe2 in AAAALLLEEE <p> waarden
			$(".changeMe2").text($("p").text());
			
			//veranderd de class changeMe3 in AAAALLLEEE li waarden
			$(".changeMe3").text($("li").text());
			
			//veranderd de class changeMe4 in ALLLLLLEEEEN de waarde van de attribuut class van li
			$(".changeMe4").text($("li").attr("class"));
			
			//veranderd de class changeMe5 in ALLLLLLEEEEN de waarde van de attribuut class van li
			$(".changeMe5").text($("h3").attr("class"));
			$(".changeMe6").text($("h3:last").attr("class"));
			
			//veranderd de class changeMe4 in ALLLLLLEEEEN de waarde van de attribuut class van li
			//nodes[1] = "wouter";
			//nodes[2] = "koppers";
			var el = document.getElementById("draggable");
			for (var i = 0, atts = el.attributes, n = atts.length, arr = []; i < n; i++){
				arr.push(atts[i].nodeName);
				
			}
			$(".changeMe7").text(arr);
			
			
		});
		
		//what it says:
		$( "a" ).addClass( "test" );

	});	  
		  
	  </script>		

</head>
<body>
