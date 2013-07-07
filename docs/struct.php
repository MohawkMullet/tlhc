<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
	<html>
<?php
	include('../parts/config.php');
?>
<head>	
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
<link href="jquery-ui-1.10.3.custom/css/july12/jquery-ui-1.10.3.custom.css" rel="stylesheet">
	<script src="jquery-ui-1.10.3.custom/js/jquery-1.9.1.js"></script>
	<script src="jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.js"></script>
	
	<script>
	$(function() {
		var icons = {
			header: "ui-icon-folder-collapsed",
			activeHeader: "ui-icon-folder-open"
		};
		$( "#accordion" ).accordion({
			icons: icons
		});
		$( "#toggle" ).button().click(function() {
			if ( $( "#accordion" ).accordion( "option", "icons" ) ) {
				$( "#accordion" ).accordion( "option", "icons", null );
			} else {
				$( "#accordion" ).accordion( "option", "icons", icons );
			}
		});
	});
	</script>
		<script>
	$(function() {
		$( "#accordion" ).accordion({
			collapsible: true
		});
	});
	</script>
	
	<script>
	$(function() {
		$( "#dialog-confirm" ).dialog({
			resizable: false,
			height:140,
			modal: true,
			buttons: {
				"Delete all items": function() {
					$( this ).dialog( "close" );
				},
				Cancel: function() {
					$( this ).dialog( "close" );
				}
			}
		});
	});
	</script>
<title>Structure Accordion</title>
	</head>
	<body>




<div id="accordion">
	<h3>File Structure</h3>
	<div>How TLhC is organized</div>
	<h3>Docs</h3>
		<div>this is the very limted amount of documentation I have included with this project.</div>
		
		<?php
	//	include('dbStart.php');
		?>
		
	<h3>Images</h3>
		<div>These are the images that I've included to make the samples work aned images included in the docs</div>
	<h3>MagpieRSS</h3>
		<div>I'm not really sure if we are using this anymore</div>
	<h3>Parts</h3>
		<div>a few pages that hold the whole thing together. Mainly config.php which is important for customizing TLhC.</div>
	<h3>partsIn</h3>
		<div>these are the pages the comprise the input form.</div>

		<!-- Below this is the code for a modal box -->
		<div id="dialog-confirm" title="Choose a Choice?">
						<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>
						<!-- put the basic shit for the box here -->
						These items will be permanently deleted and cannot be recovered. Are you sure?</p>
		</div>
		<!-- This is the shit that goes on the main page in the background -->
		<p>Sed vel diam id libero <a href="http://example.com">rutrum convallis</a>. Donec aliquet leo vel magna. Phasellus rhoncus faucibus ante. Etiam bibendum, enim faucibus aliquet rhoncus, arcu felis ultricies neque, sit amet auctor elit eros a lectus.</p>
		<div class="demo-description">
		<!-- this is what also goes on on the page behind the modal confirm box -->
		<p>Set the <code>modal</code> <code>buttons</code> </p>
		</div>
<!-- END PARTS IN -->
	<h3>partsOut</h3>
		<div>the templates and components that consist of your listing</div>
<p>Test Fucker</p>
	<div>
How TLhC Works
Program structure 
<!-- <ul>
  <li>Docs</li>
	<li>Images</li>
	<li>MagPieRSS</li>
	<li>Parts</li>
	<li>Jquery</li>
	<li>partsIn</li>
	<li>partsOut</li>
	<li>formOuts</li>
</ul>	 -->
	</div>
</div>
<button id="toggle">Toggle icons</button>
</body>
</html>