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
	  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
	  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	  <!--<link rel="stylesheet" href="/resources/demos/style.css">-->
	 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

		<script src="<?php echo base_url('assets/jquery_ui/external/jquery/jquery.js') ?>"></script>
	  <script src="<?php echo base_url('assets/jquery_ui/jquery-ui.js') ?>"></script>

	
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		
	  <style>
		  ul { list-style-type: none; margin: 0; padding: 0; margin-bottom: 10px; }
		  li { margin: 5px; padding: 5px; width: 150px; }
	  </style>
	  <script>
		  /*$(function() {
			  $( "#sortable" ).sortable({
				  revert: true
			  });
			  $( "#draggable" ).draggable({
				  connectToSortable: "#sortable",
				  helper: "clone",
				  revert: "invalid"
			  });
			  $( "ul, li" ).disableSelection();
		  });
		  $(function() {
			  $( "#sortable2" ).sortable({
				  revert: true
			  });
			  $( "#draggable2" ).draggable({
				  connectToSortable: "#sortable2",
				  helper: "clone",
				  revert: "invalid"
			  });
			  $( "ul, li" ).disableSelection();
		  });*/
		  $(function() {
			  $( "#sortable3" ).sortable({
				  revert: true,
				  //stop: function () {
				//	  alert("Hello! Normal ELEMENT!");
				//  }
				  stop: function () {
					  $("#dragtext").html("<p>Drag me around</p>Drag stopped!");
				 
					  // var IDs = $("#mydiv span[id]")         // find spans with ID attribute
					  var IDs = $(".ui-state-default, .ui-draggable")         // find spans with ID attribute
					  .map(function() { return this.id; }) // convert to set of IDs
					  .get(); // convert to instance of Array (optional)
					  //var IDs = [{"id":"197","category":"Damskie"},{"id":"198","category":"M\u0119skie"}];
					  //nieuwe regel: <li class="ui-state-highlight ui-draggable ui-draggable-handle" style="width: 150px; height: 32px;">Drag me down</li>
					  
					  
					  $("#dragtext").html("<p>Values: "+IDs+"</p>");
					  //console.log("hallo"+IDs);
					  $.each(IDs, function(index, val) {
						  console.log(val.category);
						  $("#dragtext").append(val+"\n");
						  
					  });
						
				 }
				  
			  });
			  $( "#draggable3" ).draggable({
				  connectToSortable: "#sortable3",
				  helper: "clone",
				  revert: "invalid",
				  //stop: function () {
					//  $("#drag x").html("<p>Drag me around</p>Drag stopped!");
				  //}
				  //stop: function( event, ui ) {}
			  });
			  $( "ul, li" ).disableSelection();
		  });
		  /*$( ".selector" ).draggable({
			  stop: function( event, ui ) {}
		  });*/
		  
	  </script>		
		
</head>
<body>