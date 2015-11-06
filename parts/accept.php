<head>
<meta charset="utf-8">
<title>Why Don't You Accept the Offer?</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link type="text/css" rel="stylesheet" href="jq/jquery-ui.css">
<link type="text/css" rel="stylesheet" href="style.css">
<link type="text/css" rel="stylesheet" href="jq/tooltipster-master/css/tooltipster.css">
<link href='jq/silk/jquery-silk-icons.css' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="jq/jquery.js"></script>
<script type="text/javascript" src="jq/animatedcollapse.js"></script>
<script type="text/javascript" src="jq/tooltipster-master/js/jquery.tooltipster.js"></script>
<script type="text/javascript" src="jq/jquery-ui.js"></script>
</head>

<body>

<div id="dialog-confirm" title="Terms and Conditions">

				  <?php 
							include('license.html'); 
					?>				
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" class="tooltip">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="6P54D8ZRC8TP2">
<input type="image" class="tooltip" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" title="Donate to the Developer">
<img alt="Help your friendly TLhC Developer!" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1" class="tooltip">
</form>

</div>



<script type="text/javascript">
$(document).ready(function() {
$( "#dialog-confirm" ).dialog({
buttons: {
"Are you a software hippy?": function() {
$( this ).dialog( "close" );
},
"Naff off!": function() {
window.location.replace("http://mohawk.hol.es");
}
},
closeOnEscape: false,
draggable: false,
height: ($(window).height()) * 0.52,
modal: true,
open: function(event, ui) {
// Set opacity of parent window
$( ".ui-widget-overlay" ).css( "opacity", 0.90 );
// Hide close button on modal dialog
$( ".ui-dialog-titlebar-close" ).css( "display", 'none' );
},
resizable: false,
width: ($(window).width()) * 0.56
});
});
</script>

</body>
</html>
