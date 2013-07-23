<?php 
include('parts/config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>This is the Right Hand Page</title>
<link type="text/css" rel="stylesheet" href="parts/jquery/jquery-ui/css/right/jquery-ui-1.7.1.custom.css">
<link type="text/css" rel="stylesheet" href="parts/style.css">
<script type="text/javascript" src="parts/jquery/jquery-1.3.2.js"></script>
<script type="text/javascript" src="parts/jquery/animatedcollapse.js"></script>
<script type="text/javascript" src="parts/jquery/jquery-ui-1.7.1.js"></script>
<script type="text/javascript">

animatedcollapse.addDiv('picasaImages', 'fade=1,height=280px,persist=0')
animatedcollapse.addDiv('licensegpl', 'fade=1,height=330px,persist=0')
animatedcollapse.addDiv('search2', 'fade=1,height=220px,persist=0')
animatedcollapse.addDiv('midComms2', 'fade=1,height=295px,persist=0')
animatedcollapse.addDiv('helpDocs', 'fade=0,speed=400,persist=0')
animatedcollapse.addDiv('outPutter', 'fade=1,speed=400,persist=0,hide=0')
animatedcollapse.addDiv('inComs', 'fade=1,speed=400,persist=0')
animatedcollapse.addDiv('inComs2', 'fade=1,speed=400,persist=0')
animatedcollapse.addDiv('showComms', 'fade=1,height=595px,persist=0')
animatedcollapse.addDiv('showComms2', 'fade=1,height=595px,persist=0')
animatedcollapse.addDiv('picasaViewer', 'fade=1,height=595px,persist=0')



animatedcollapse.ontoggle=function($, divobj, state){ //fires each time a DIV is expanded/contracted
	//$: Access to jQuery
	//divobj: DOM reference to DIV being expanded/ collapsed. Use "divobj.id" to get its ID
	//state: "block" or "none", depending on state
}

animatedcollapse.init()

</script>
<script type="text/javascript">
			$(function(){
				// Accordion
				$("#accordion").accordion({ 
				header: "h3",
				autoHeight: true,
				collapsible: true
				 });
			});
		</script>
<script type="text/javascript">
			$(function(){
				// Accordion
				$("#accordion2").accordion({ 
				header: "h3",
				autoHeight: false,
				collapsible: true
				 });
			});
		</script>        
<script type="text/javascript">
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
<!--
#rightBody {
	position:static;
	left:8px;
	top:8px;
	width:100%;
	height:740px;
	z-index:2;
	overflow-x:hidden;
	overflow-y:auto;
}
h3 {
	font-size: 12px;
}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
</head>

<body>

<div class="ui-widget ui-widget-content ui-corner-all">
<span class="ui-widget-header ui-helper-reset ui-corner-all" style="padding:6px 6px 6px 25px; display:block; font-size:16px; margin-right:15pz;">Welcome to TLhC
<?php
echo $version;
?>
<span class="fg-toolbar ui-corner-all" style="font-size:14px; background: url(parts/jquery/jquery-ui/css/theme/images/ui-bg_highlight-hard_30_383838_1x100.png); display: inline; padding:.6em; position: relative; right: -150px; border: medium double #cccccc;">
<?php
echo $loadRight;
echo $previewButton;
echo "<span class='fg-toolbar fg-buttonset-multi' style='display: inline;'>";
echo "$searchButton $picButton $search2 $abbrevsButton";
echo "</span>";

echo "<span class='fg-toolbar fg-buttonset-multi' style='display: inline;'>";
echo "$addCommsButton $showCommsButton $addCommsButton2 $showCommsButton2";
echo "</span>";
echo "$gplButton $helpButton $picasaViewerButton $photoButton";
?>
</span></span>
<?php
//include('Output.php');
?>
<div id="outPutter" style="display: inherit;">
  <?php
$showOut = $_GET['showOut'];
//echo $showOut;
if ( $showOut == "True" ){ 	
	include('Output.php');
	} 
	?>
</div>

<div id="modules">
<div id="licensegpl" class="ui-corner-all ui-widget" style="width: 500px; background: #FFFFFF; padding: 10px; margin:25px; display: none;" align="center">
  <?php 
	include('license.php'); 
	?>
</div>
<div id="helpDocs" class="ui-corner-all ui-widget" style="width: 500px; background: #FFFFFF; padding: 10px; margin:25px; display: none;" align="center">
  <?php 
	include('docs/easyinstall.php'); 
	?>
</div>
<div id="midComms2" class="ui-corner-all" style="width: 425px; display:none; margin:10px; position: relative; background:#ffffff;">
  <?php 	
	include('partsOut/staticPages/commentkeyDefault.php'); 
	?>
</div>    
      
<div id="picasaImages" style="width: 425px; display: none; float:left; margin:10px;" class="ui-corner-all">
	<?php 
	include('parts/picasaLogin.php');
//	include('parts/picasaViewer.php');
	?>
</div>
<div id="picasaViewer" style="width: 435px; display: none; float:left; margin:10px;" class="ui-corner-all">
	<?php 
//	include('parts/picasaLogin.php');
	include('picasaViewerMain.php');
	?>
</div>
<div id="search2" style="width: 425px; display: none; float:left; margin:10px; background:#ffffff;" class="ui-corner-all">
	<?php 
	include('parts/research.php'); 
	?>
</div>
<div id="inComs" style="display: none; float:left; margin:10px;" class="ui-corner-all">
<iframe src='partsIn/addCommentsEX.php' height='230' width='425' scrolling="Auto" title='AddcommentsInside' name='addEm1' class="ui-widget ui-widget-content ui-corner-all" frameborder="0"></iframe>
</div>
<div id="inComs2" style="display: none; float:left; margin:10px;" class="ui-corner-all">
<iframe src='partsIn/addCommentsEX.php?soldierDB=soldierAdd' height='230' width='425' scrolling="Auto" title='AddcommentsInside' name='addEm12' class="ui-widget ui-widget-content ui-corner-all" frameborder="0"></iframe>
</div>
<div id="showComms2" style="display: none; float:left; margin:10px;" class="ui-corner-all">
<iframe src='parts/midComms.php?soldierDB=soldierShow' height='425' width='425' scrolling="Auto" title='AddcommentsInside' name='addEm13' class="ui-widget ui-widget-content ui-corner-all" frameborder="0"></iframe>
</div>
<div id="showComms" style="display: none; float: left; margin:10px;" class="ui-corner-all">
<iframe src='parts/midComms.php' height='580' width='425' scrolling="Auto" title='AddcommentsInside' name='addEm14' class="ui-widget ui-widget-content ui-corner-all" frameborder="0"></iframe>
</div>
<div id="picasaViewer" style="display: none; float: left; margin:10px;" class="ui-corner-all">
<iframe src='parts/picasaViewer.php' height='580' width='425' scrolling="Auto" title='Choose your Photo' name='addEm15' class="ui-widget ui-widget-content ui-corner-all" frameborder="0"></iframe>
</div>
</div>
</div>
</div>
