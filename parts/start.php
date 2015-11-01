<?php include('config.php');
?>
<html>
<head>
<style media="all">
   @import url("jquery/theme/jqGalViewII.css");
</style>
<link type="text/css" rel="stylesheet" href="jquery/theme/ui.all.css" />
<link type="text/css" rel="stylesheet" href="style.css" />
<script type="text/javascript" src="jquery/jquery-1.3.2.js"></script>
<script type="text/javascript" src="jquery/jquery-ui-personalized-1.6rc6.js"></script>
<script type="text/javascript" src="jquery/jqAlbumParser.js"></script>
<script type="text/javascript" src="jquery/jqGalViewII.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$(".jqAlbumParser").jqAlbumParser({
		pluginExec : function(){
			$(this).jqGalViewII();
		}
	});
});
	$(function(){
		//all hover and click logic for buttons
		$(".fg-button:not(.ui-state-disabled)")
		.hover(
			function(){ 
				$(this).addClass("ui-state-hover"); 
			},
			function(){ 
				$(this).removeClass("ui-state-hover"); 
			}
		)
		.mousedown(function(){
				$(this).parents('.fg-buttonset-single:first').find(".fg-button.ui-state-active").removeClass("ui-state-active");
				if( $(this).is('.ui-state-active.fg-button-toggleable, .fg-buttonset-multi .ui-state-active') ){ $(this).removeClass("ui-state-active"); }
				else { $(this).addClass("ui-state-active"); }	
		})
		.mouseup(function(){
			if(! $(this).is('.fg-button-toggleable, .fg-buttonset-single .fg-button,  .fg-buttonset-multi .fg-button') ){
				$(this).removeClass("ui-state-active");
			}
		});
	});
</script>
<style type="text/css">
		.toggler { width: 700px; height: 300px; }
		#button { padding: .5em 1em; text-decoration: none; }
		#effect { width: 440px; height: 335px; padding: 0.4em; position: relative; }
		#effect h3 { margin: 0; padding: 0.4em; text-align: center; }
		.ui-effects-transfer { border: 2px dotted gray; } 
	</style>
	<script type="text/javascript">
	$(function() {

		//run the currently selected effect
		function runEffect(){
			//get effect type from 
			var selectedEffect = $('#effectTypes').val();
			
			//most effect types need no options passed by default
			var options = {};
			//check if it's scale, transfer, or size - they need options explicitly set
			if(selectedEffect == 'scale'){  options = {percent: 100}; }
			else if(selectedEffect == 'transfer'){ options = { to: "#button", className: 'ui-effects-transfer' }; }
			else if(selectedEffect == 'size'){ options = { to: {width: 480,height: 685} }; }
			
			//run the effect
			$("#effect").show(selectedEffect,options,500,callback);
		};
		
		//callback function to bring a hidden box back
		function callback(){
			setTimeout(function(){
				$("#effect:visible").removeAttr('style').hide().fadeOut();
			}, 10000);
		};
		
		//set effect from select menu value
		$("#button").click(function() {
			runEffect();
			return false;
		});
		
		$("#effect").hide();
	});
	</script>

</head>
<body>
<div class="demo">

<div class="toggler">
	<div id="effect" class="ui-widget-content ui-corner-all">
		<h3 class="ui-widget-header ui-corner-all">Show</h3>
	<?php include('../docs/new.php'); ?>
	</div>
</div>
<select name="effects" id="effectTypes">
	<option value="blind">Blind</option>
	<option value="bounce">Bounce</option>
	<option value="clip">Clip</option>
	<option value="drop">Drop</option>
	<option value="explode">Explode</option>
	<option value="fold">Fold</option>
	<option value="highlight">Highlight</option>
	<option value="puff">Puff</option>
	<option value="pulsate">Pulsate</option>
	<option value="scale">Scale</option>
	<option value="shake">Shake</option>
	<option value="size">Size</option>
	<option value="slide">Slide</option>
	<option value="transfer">Transfer</option>
</select>
<a href="#" id="button" class="ui-state-default ui-corner-all">Run Effect</a>
</div>
<div id="infobox" align="center" class="ui-widget-content ui-corner-all" style="width: 200px; float: left; clear: right;">
	<div class="ui-state-default ui-widget-header">
		<p>Welcome to TLhC version 
		<?php
			echo $version;
		?>!
		</p>
	</div>
	<img src="../images/TLhClogo70x100.png" width="70" height="100">
	<?php include('menuBar.php'); ?>
    <a href="#" id="button" class="ui-state-default ui-corner-all">Run Effect</a>

</div>
<div id="searchLayer">
	<?php include('research.php'); ?>
</div>
<div id="docs">
	<p>hide <a href="#" onClick="MM_showHideLayers('docs','','show');MM_showHideLayers('docs','','hide')">me</a></p>
	<?php include('../docs/index.php'); ?>
</div>
</body>
</html>