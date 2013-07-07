<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
	<link href="jquery-ui-1.10.3.custom/css/july12/jquery-ui-1.10.3.custom.css" rel="stylesheet">
	<script src="jquery-ui-1.10.3.custom/js/jquery-1.9.1.js"></script>
	<script src="jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.js"></script>
	<script>
	$(function() {
		
		$( "#accordion" ).accordion();
		

		
		var availableTags = [
			"ActionScript",
			"AppleScript",
			"Asp",
			"BASIC",
			"C",
			"C++",
			"Clojure",
			"COBOL",
			"ColdFusion",
			"Erlang",
			"Fortran",
			"Groovy",
			"Haskell",
			"Java",
			"JavaScript",
			"Lisp",
			"Perl",
			"PHP",
			"Python",
			"Ruby",
			"Scala",
			"Scheme"
		];
		$( "#autocomplete" ).autocomplete({
			source: availableTags
		});
		

		
		$( "#button" ).button();
		$( "#radioset" ).buttonset();
		

		
		$( "#tabs" ).tabs();
		

		
		$( "#dialog" ).dialog({
			autoOpen: false,
			width: 400,
			buttons: [
				{
					text: "Ok",
					click: function() {
						$( this ).dialog( "close" );
					}
				},
				{
					text: "Cancel",
					click: function() {
						$( this ).dialog( "close" );
					}
				}
			]
		});

		// Link to open the dialog
		$( "#dialog-link" ).click(function( event ) {
			$( "#dialog" ).dialog( "open" );
			event.preventDefault();
		});
		

		
		$( "#datepicker" ).datepicker({
			inline: true
		});
		

		
		$( "#slider" ).slider({
			range: true,
			values: [ 17, 67 ]
		});
		

		
		$( "#progressbar" ).progressbar({
			value: 20
		});
		

		// Hover states on the static widgets
		$( "#dialog-link, #icons li" ).hover(
			function() {
				$( this ).addClass( "ui-state-hover" );
			},
			function() {
				$( this ).removeClass( "ui-state-hover" );
			}
		);
	});
	</script>
	<style>
	body{
		font: 62.5% "Trebuchet MS", sans-serif;
		margin: 50px;
	}
	.demoHeaders {
		margin-top: 2em;
	}
	#dialog-link {
		padding: .4em 1em .4em 20px;
		text-decoration: none;
		position: relative;
	}
	#dialog-link span.ui-icon {
		margin: 0 5px 0 0;
		position: absolute;
		left: .2em;
		top: 50%;
		margin-top: -8px;
	}
	#icons {
		margin: 0;
		padding: 0;
	}
	#icons li {
		margin: 2px;
		position: relative;
		padding: 4px 0;
		cursor: pointer;
		float: left;
		list-style: none;
	}
	#icons span.ui-icon {
		float: left;
		margin: 0 4px;
	}
	.fakewindowcontain .ui-widget-overlay {
		position: absolute;
	}
	</style>
<title></title>
</head>
<body class="ui-widget"><table width="80%" class="ui-widget ui-widget-content ui-corner-all"><tr><td> 
<h1>How TLhC Works</h1>
<h2>Program structure</h2>
<h3>Docs</h3>
<p>this is the very limted amount of documentation I have included with this project.</p>
<h2>Images</h2>
<p>These are the images that I've included to make the samples work aned images included in the docs</p>
<h2>MagPieRSS</h2>
<p>These are the GPL'd scripts that parse your Ebay RSS feed to output some of your listings into html for you.</p>
<h2>Parts</h2>
<p>a few pages that hold the whole thing together. Mainly config.php which is important for customizing TLhC.</p>
<blockquote>
  <blockquote>
    <p class="style2">config.php</p>
    <p>the best place to start when customizing TLhC</p>
    <p class="style2">style.css</p>
    <p>controls the look and feel of TLhC. this css stylesheet has nothing to do with the the style of your output.</p>
  </blockquote>
  <h2>JQUERY</h2>
  <p>this is where our javascript libraries live.</p>
</blockquote>
<h2>PARTSIN</h2>
<p>these are the pages the comprise the input form.</p>
<h2>PARTSOUT</h2>
<p>the templates and components that consist of your listing</p>
<blockquote>
  <h2>formOUTS</h2>
  <p>these act as the php code that actually interpret the form input and spit it back out in html form to be cut and pasted into ebay or your ebay listing tool.</p>
  <h2>INFO</h2>
  <p>these can be a collection of pages that you've generated through ebay's tools.</p>
</blockquote>
</td></tr></table>
<a href="index.php">Back To Index</a>
</body>
<?php
//include_once('../license.php');
?>
