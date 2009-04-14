<?php 
include('parts/config.php');
?>
<html>
<head>
<title>This is the Right Hand Page</title>
<link type="text/css" rel="stylesheet" href="parts/jquery/jquery-ui/css/theme/jquery-ui-1.7.1.custom.css" />
<link type="text/css" rel="stylesheet" href="parts/style.css" />
<script type="text/javascript" src="parts/jquery/jquery-1.3.2.js"></script>
<script type="text/javascript" src="parts/jquery/animatedcollapse.js"></script>
<script type="text/javascript" src="parts/jquery/jquery-ui-1.7.1.js"></script>
<script type="text/javascript">

animatedcollapse.addDiv('searchWeb', 'fade=1,speed=400,height=140px,persist=0,hide=0')
animatedcollapse.addDiv('picasaImages', 'fade=1,height=280px')
animatedcollapse.addDiv('licensegpl', 'fade=1,height=330px')
animatedcollapse.addDiv('licensegpl2', 'fade=1,height=180px')
animatedcollapse.addDiv('abbrevs', 'fade=1,height=180px')
animatedcollapse.addDiv('search2', 'fade=1,height=180px')
animatedcollapse.addDiv('midComms', 'fade=1,height=180px,persist=1')
animatedcollapse.addDiv('midComms2', 'fade=1,height=265px,')
animatedcollapse.addDiv('showNotes', 'fade=1,height=180px')
animatedcollapse.addDiv('search', 'fade=1,height=180px')
animatedcollapse.addDiv('helpDocs', 'fade=0,speed=400,group=pets')
animatedcollapse.addDiv('outPutter', 'fade=1,speed=400,group=pets,persist=1,hide=1')
animatedcollapse.addDiv('lastOne', 'fade=1,speed=400,group=pets')

animatedcollapse.ontoggle=function($, divobj, state){ //fires each time a DIV is expanded/contracted
	//$: Access to jQuery
	//divobj: DOM reference to DIV being expanded/ collapsed. Use "divobj.id" to get its ID
	//state: "block" or "none", depending on state
}

animatedcollapse.init()

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


</head>
<body>
<span id="rightBody" class="ui-widget-content ui-corner-all" style="height:600; display: block; padding:25;">


<div id="helpDocs" style="width: 800px; height:600; overflow:scroll;">
	<?php 
	include('docs/index.php');
	echo "<br>"; 
	?>
    <br>
</div>
<br />
<div id="licensegpl" style="width: 500px; background: #FFFFFF; display:none; float:none; clear:both; position: relative;">
  <?php 
	include('license.php'); 
	?>
</div>

<div id="midComms2" style="width: 600; float:left; clear:left; display:none;">
  <?php 	
	include('partsOut/staticPages/commentkeyDefault.php'); 
	?>
</div>    

<div id="search2" style="width: 600; display:none; float:left; clear:both;">
	<?php 
	include('parts/research.php'); 
	?>
</div>       
<div id="picasaImages" style="width: 300px; display:none;">
<div id="tabs3333" class="ui-widget-header ui-corner-all" style="padding:5px; margin:5px; float:left; clear:right;">Login 2 Picasa<a href="javascript:animatedcollapse.toggle('picasaImages')" class="fg-button" title="Close this section"><span class="ui-icon ui-icon-close"></span>&nbsp;</a></div>
	<?php 
	include('parts/picasaLogin.php'); 
	?>
</div>
<span style="display: block;">
<div id="midComms" style="width: 300px; display: none;">
	<?php 
	include('partsIn/addComments2.php'); 
	?>
</div></span>
</span>

</body>
</html>