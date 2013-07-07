<?php include('parts/config.php'); 
?>
<head>
<link href="docs/jquery-ui-1.10.3.custom/css/july12/jquery-ui-1.10.3.custom.css" rel="stylesheet">
	<script src="docs/jquery-ui-1.10.3.custom/js/jquery-1.9.1.js"></script>
	<script src="docs/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.js"></script>
	<script>
	$(function() {
		$( "#dialog-modal" ).dialog({
			width: 770,
			height: 660,
			autoOpen: true,
			modal: true
		});
//		$( "#submit" ).click(function() {
//    $( "#dialog-modal" ).dialog( "open" );
	});
	</script>
	<script>
//			$( "#dialog-modal" ).dialog({ 
//				autoOpen: true,
//				modal: true,
//				width: 750,
//				height: 640
//			 });
$( "#templateName" ).click(function() {
    $( "#dialog-modal" ).dialog( "open" );
//});
</script>
</head>
<?php
$showOut = $_GET['showOut'];
echo $showOut;
?>

<?php
$templateName = $_POST['templateName'];
	if ($templateName == "default") {
		include('partsOut/preD.php');
	}
	if ($templateName == "blue") {
		include('partsOut/preB.php');
	}
	if ($templateName == "orange") {
		include('partsOut/preO.php');
	}
	if ($templateName == "yellow") {
		include('partsOut/preY.php');
	}	
	if ($templateName == "soldier") {
		include('partsOut/preS.php');
	}		
?>
<div id="dialog-modal" title="<?php include('partsOut/formOuts/titleOut.php'); ?>">
	<p><?php echo $templateName; ?></p>
</div>

<p>Sed vel diam id libero <a href="http://example.com">rutrum convallis</a>. Donec aliquet leo vel magna. Phasellus rhoncus faucibus ante. Etiam bibendum, enim faucibus aliquet rhoncus, arcu felis ultricies neque, sit amet auctor elit eros a lectus.</p>

<div class="demo-description">
<p>A modal dialog prevents the user from interacting with the rest of the page until it is closed.</p>
</div>
