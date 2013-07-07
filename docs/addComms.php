<?php
	include('../parts/config.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
	<link href="jquery-ui-1.10.3.custom/css/july12/jquery-ui-1.10.3.custom.css" rel="stylesheet">
	<script src="jquery-ui-1.10.3.custom/js/jquery-1.9.1.js"></script>
	<script src="jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.js"></script>

	<script>
	$(function() {
		$( "#dialog-confirm" ).dialog({
			resizable: true,
			height:340,
			width:560,
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

<title></title>
</head>
<body>

		<!-- Below this is the code for a modal box -->

<div id="dialog-confirm" title="Version?">
	<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span><div align="center" class="ui-dialog">
<?php 
//include('../parts/research.php');
//include('../parts/picasaLogin.php');
//include('../docs/contact.php');t
echo $tlhcCode;
echo $tlhcLogo;
echo "</a>";
?>
</div>
You are using TLhC Version <?php echo $version; ?>.
</p>
</div>

<p>Sed vel diam id libero <a href="http://example.com">rutrum convallis</a>. Donec aliquet leo vel magna. Phasellus rhoncus faucibus ante. Etiam bibendum, enim faucibus aliquet rhoncus, arcu felis ultricies neque, sit amet auctor elit eros a lectus.</p>

<div class="demo-description">
<p> <code>modal</code> option to true, <code>buttons</code> option.</p>
</div>
<div>

<?php 
include('../partsIn/addCommentsEX.php');
?>
</div>
<a href="index.php">Back To Index</a>
</body>
<?php
//include_once('../license.php');
?>
</html>