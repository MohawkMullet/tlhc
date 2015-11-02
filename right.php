<?php 
include('parts/config.php');
?>
<?php 
		$_GET['showComms'] = $showComms; 
		echo "you a bitch $showComms";		
?>
<head>
<title>Yeah I'm Right You Bitch</title>
<link type="text/css" rel="stylesheet" href="parts/jq/jquery-ui.css">
<link type="text/css" rel="stylesheet" href="parts/style.css">
<script type="text/javascript" src="parts/jq/jquery.js"></script>
<script type="text/javascript" src="parts/jq/animatedcollapse.js"></script>
<script type="text/javascript" src="parts/jq/jquery-ui.js"></script>
<link href='parts/jq/silk/jquery-silk-icons.css' rel='stylesheet' type='text/css'>

<script type="text/javascript">

animatedcollapse.addDiv('picasaImages', 'fade=1,speed=10000,persist=0')
animatedcollapse.addDiv('licensegpl', 'fade=1,persist=0')
animatedcollapse.addDiv('search2', 'fade=1,persist=0')
animatedcollapse.addDiv('midComms2', 'fade=1,persist=0')
animatedcollapse.addDiv('helpDocs', 'fade=0,speed=400,persist=0')
animatedcollapse.addDiv('outPutter', 'fade=1,speed=400,persist=0,hide=0')
animatedcollapse.addDiv('inComs', 'fade=1,speed=400,persist=0')
animatedcollapse.addDiv('inComs2', 'fade=1,speed=400,persist=0')
animatedcollapse.addDiv('inComs3', 'fade=1,speed=400,persist=0')
animatedcollapse.addDiv('inComs4', 'fade=1,speed=400,persist=0')
animatedcollapse.addDiv('showComms', 'fade=10,persist=0')
animatedcollapse.addDiv('showComms2', 'fade=1,persist=0')
animatedcollapse.addDiv('showComms3', 'fade=1,persist=0')
animatedcollapse.addDiv('showComms4', 'fade=1,persist=0')


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
  <script type="text/javascript">
  $(function() {
    $( "#dialog_bitcher" ).dialog({
      autoOpen: false,
      modal: true,
      maxHeight: 300,
      width:500,
      show: {
        effect: "puff",
        duration: 1000
      },
      hide: {
        effect: "fold",
        duration: 1000
      }
    });
    $( "#canOpener" ).click(function() {
      $( "#dialog_bitcher" ).dialog( "open" );
    });
  });
  </script>
  <script type="text/javascript">
  $(function() {
    $( "#comAdder" ).dialog({
      autoOpen: false,
      modal: true,
      maxHeight: 300,
      width:500,
      show: {
        effect: "puff",
        duration: 10000
      },
      hide: {
        effect: "fold",
        duration: 10000
      }
    });
    $( "#canOpener2" ).click(function() {
      $( "#comAdder" ).dialog( "open" );
    });
  });
  </script>
</head>
<body class="ui-widget-content ui-corner-all">
<div class="ui-widget ui-widget-content ui-corner-all" id="mainShit">
				<span class="ui-widget-header ui-helper-reset ui-corner-all" style="padding:6px 6px 6px 25px; display:block; font-size:16px; margin-right:15pz;">Welcome to TLhC
				<?php
					echo $version;
				?>
				<span class="fg-toolbar ui-corner-all" style="font-size:14px; background: url(parts/jq/images/ui-bg_diamond-ripple_90_6e6f6f_22x22.png); display: inline; padding:.6em; position: relative; right: -150px; border: medium double #cccccc;">
				<?php
					echo $loadRight;
					echo "<span class='fg-toolbar fg-buttonset-multi' style='display: inline;'>";
					echo "$searchButton $picButton $search2 $abbrevsButton";
					echo "</span>";
					echo $previewButton;
					echo "<span class='fg-toolbar fg-buttonset-multi' style='display: inline;'>";
					echo "$addCommsButton $showCommsButton $addCommsButton2 $showCommsButton2 $addCommsButton4 $showCommsButton4 $addCommsButton3 $showCommsButton3";
					echo "</span>";
					echo "$gplButton $helpButton $linkButton";
				?>
<button id="canOpener" class="ui-corner-all ui-state-default"><span class="ui-icon silk-icon-cog-delete"></span></button></span></span>
		<div id="dialog_bitcher" title="Show The GPL" style="display:none;">
						  <?php
						include('parts/research.php');
							?>
		</div>

<button id="canOpener2" class="ui-corner-all ui-state-default"><span class="ui-icon silk-icon-cog-delete"></span></button></span></span>
		
		<div id="comAdder" title="Show the start bitcher" style="display:none;">
						  <?php
//						include('partsIn/addCommentsEX.php');
							?>
		</div>


<div id="modules" class="ui-widget-content ui-corner-all">

				<div id="licensegpl" class="ui-corner-all ui-widget-header" style="margin:5px; padding:0 3px 3px 0; display: none;">
				  <?php 
					include('license.html'); 
					?>
				</div>
				
				<div id="helpDocs" class="ui-widget-highlight" style="background: #FFFFFF; padding:0 3px 3px 0; margin-top:25px; margin-left:25px; margin-right:25px; margin-bottom:25px; display: none;">
				<?php //echo $linkButton; ?>				
				<?php 
	//				include('docs/index.php'); 
					?>
				</div>
				
				<div id="midComms2" class="ui-widget-header ui-corner-all" style="width: 80%; display:none; margin:5px; padding:0 3px 3px 0; position: relative; background:#ffffff;">
				  <?php 	
					include('partsOut/staticPages/commentkeyDefault.php'); 
					?>
				</div>    
					  
				<div id="picasaImages" style="width: 425px; display: none; float:left; margin:5px;padding:0 3px 3px 0;" class="ui-corner-all">
					<?php 
				//	include('parts/picasaLogin.php'); 
					?>
				</div>
				
				<div id="search2" style="width: 425px; display: none; float:left; margin:5px; padding:0 3px 3px 0; background:#ffffff;" class="ui-corner-all">
					<?php 
				//	include('parts/research.php'); 
					?>
				</div>
				
<div id="inComs" style="display: none; float:left; clear:none; margin:5px; padding:0 3px 3px 0;" class="ui-widget-header ui-corner-all">
		<iframe src='partsIn/addCommentsEX.php?showComms=45s' height='230' width='425' scrolling="Auto" title='Add comment sInside' name='addEm1' class="ui-widget ui-widget-content ui-corner-all" frameborder="0"></iframe>
</div>

<div id="inComs2" style="display: none; float:left; clear:none; margin:5px; padding:0 3px 3px 0;" class="ui-widget-header ui-corner-all">
		<iframe src='partsIn/addCommentsEX.php?showComms=Soldiers' height='230' width='425' scrolling="Auto" title='Add Bullshit' name='addEm12' class="ui-widget ui-widget-content ui-corner-all" frameborder="0"></iframe>
</div>

<div id="inComs3" style="display: none; float:left; clear:none; margin:5px; padding:0 3px 3px 0;" class="ui-widget-header ui-corner-all">
		<iframe src='partsIn/addCommentsEX.php?showComms=Trains' height='230' width='425' scrolling="Auto" title='Add comments Inside' name='addEm12b' class="ui-widget ui-widget-content ui-corner-all" frameborder="0"></iframe>
</div>

<div id="inComs4" style="display: none; float:left; clear:none; margin:5px; padding:0 3px 3px 0;" class="ui-widget-header ui-corner-all">
		<iframe src='partsIn/addCommentsEX.php?showComms=Cards' height='230' width='425' scrolling="Auto" title='Add comments Inside' name='addEm16b' class="ui-widget ui-widget-content ui-corner-all" frameborder="0"></iframe>
</div>

<div id="showComms2" style="display: none; float:left; clear:none; margin:5px; padding:0 3px 3px 0;" class="ui-widget-header ui-corner-all">
		<iframe src='parts/midComms.php?showComms=Soldiers' height='425' width='425' scrolling="Auto" title='Add comments Inside' name='addEm13' class="ui-widget ui-widget-content ui-corner-all" frameborder="0"></iframe>
</div>

<div id="showComms3" style="display: none; float:left; clear:none; margin:5px; padding:0 3px 3px 0;" class="ui-widget-header ui-corner-all">
		<iframe src='parts/midComms.php?showComms=Trains' height='425' width='425' scrolling="Auto" title='Show Comments' name='addEm13b' class="ui-widget ui-widget-content ui-corner-all" frameborder="0"></iframe>
</div>

<div id="showComms" style="display: none; float: left;  clear:none; margin:5px; padding:0 3px 3px 0;" class="ui-widget-header ui-corner-all">
		<iframe src='parts/midComms.php?showComms=45s' height='425' width='425' scrolling="Auto" title='Show Some Shit' name='addEm14' class="ui-widget ui-widget-content ui-corner-all" frameborder="0"></iframe>
</div>

<div id="showComms4" style="display: none; float:left; clear:none; margin:5px; padding:0 3px 3px 0;" class="ui-widget-header ui-corner-all">
		<iframe src='parts/midComms.php?showComms=Cards' height='425' width='425' scrolling="Auto" title='Show Comments' name='addEm16b' class="ui-widget ui-widget-content ui-corner-all" frameborder="0"></iframe>
</div>

			<div id="outPutter" style="clear:both; float:left;">
		  <?php  	
					$showOut = $_GET['showOut'];
					if ( $showOut == "True" ){ 	
						include('outputs.php');
						} 
	//					echo $showOut; 
				?>
			</div>
</div><!-- END OF MODULES DIV -->

</div><!-- END OF MAIN SHIT DIV -->



