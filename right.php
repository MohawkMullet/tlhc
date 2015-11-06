<?php 
include('parts/config.php');
?>
<?php 
		$_GET['showComms'] = $showComms; 
?>
<head>
<title>Yeah I'm Right You Bitch</title>
<link type="text/css" rel="stylesheet" href="parts/jq/jquery-ui.css">
<link type="text/css" rel="stylesheet" href="parts/style.css">
<link type="text/css" rel="stylesheet" href="parts/jq/tooltipster-master/css/tooltipster.css">
<link href='parts/jq/silk/jquery-silk-icons.css' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="parts/jq/jquery.js"></script>
<script type="text/javascript" src="parts/jq/animatedcollapse.js"></script>
<script type="text/javascript" src="parts/jq/tooltipster-master/js/jquery.tooltipster.js"></script>
<script type="text/javascript" src="parts/jq/jquery-ui.js"></script>
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
        duration: 1000
      },
      hide: {
        effect: "fold",
        duration: 1000
      }
    });
    $( "#canOpener2" ).click(function() {
      $( "#comAdder" ).dialog( "open" );
    });
  });
  </script>

</head>
<body class="ui-widget-content ui-corner-all">
<?php require('parts/accept.php'); ?>
<div class="ui-widget ui-widget-content ui-corner-all" id="mainShit">
<?php include('toolBar.php'); ?>
<!-- DIVS FOR POPUP DIALOGS -->
		<div id="dialog_bitcher" title="Oh no! This is free software! Have fun!" style="display:none;">
						  <?php
//								include('parts/research.php');
							?>
				  <?php 
							include('license.html'); 
					?>							
		</div>
		<div id="comAdder" title="Show the Comment Adder Form" style="display:none;">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" class="tooltip">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="6P54D8ZRC8TP2">
<input type="image" class="tooltip" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" title="Donate to the Developer">
<img alt="Help your friendly TLhC Developer!" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1" class="tooltip">
</form>
<!-- 				<iframe id="comAdderIframe" src="partsIn/addCommentsEX.php" width="460" height="290" allowtransparency="1" sandbox="allow-forms allow-scripts" frameborder="0" class="ui-state-active ui-corner-all"></iframe>
 -->		</div>
<!-- END DIALOG POPUP DIVS -->

<div id="modules" class="ui-state-active ui-corner-all" style="margin:5px; padding:0 3px 3px 0;">

				<div id="licensegpl" class="ui-widget-header ui-corner-all" style="width: 95%; display:none; margin:5px; padding:0 3px 3px 0; position: relative; background:#ffffff;">
				  <?php 
					include('license.html'); 
					?>
				</div>
				
				<div id="helpDocs" class="ui-state-highlight ui-corner-all" style="padding:0 3px 3px 0; margin-top:25px; margin-left:25px; margin-right:25px; margin-bottom:25px; display: none;">
							<iframe src='docs/index.php' width="100%" height="720px" scrolling="Auto" title='Add comment sInside' name='helpDocus' class="ui-widget ui-widget-content ui-corner-all" frameborder="0"></iframe>
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
//					if ( $showOut == "True" ){ 	
						include('outputs.php');
//						include('copyPaste2.php');
//						} 
	//					echo $showOut; 
				?>
			</div>
</div><!-- END OF MODULES DIV -->

</div><!-- END OF MAIN SHIT DIV -->
      <script>
        $(document).ready(function() {
            $('.tooltip').tooltipster();
        });
    </script>
</body>
</html>


