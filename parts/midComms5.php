<?php
		include("config.php");
?>
<html>
<head>
<meta http-equiv="refresh" content="50">
<title>The Stored Comments</title>
<link type="text/css" rel="stylesheet" href="jq/jquery-ui.css" />
<link type="text/css" rel="stylesheet" href="style.css" />
<script type="text/javascript" src="jq/jquery.js"></script>
<script type="text/javascript" src="jq/animatedcollapse.js"></script>
<script type="text/javascript" src="jq/jquery-ui.js"></script>
<link href='jq/silk/jquery-silk-icons.css' rel='stylesheet' type='text/css'>
<script type="text/javascript">
animatedcollapse.addDiv('picasaImages', 'fade=1,height=280px,persist=0')
animatedcollapse.addDiv('licensegpl', 'fade=1,height=330px,persist=0')
animatedcollapse.addDiv('search2', 'fade=1,height=220px,persist=0')
animatedcollapse.addDiv('midComms2', 'fade=1,height=295px,persist=0')
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
<?php 
	$_GET['showComms'] = $showComms; 
	echo $showComms;
?>
		<?php
				function buildBox() {
					global $tabAdd;
					$selectorName = "$tabAdd"."Selector"."[]";
					$query = mysql_query(
						"SELECT `id`, 
								`value`,
								`name`
						FROM `comms$tabAdd`
						ORDER BY `id` ASC"
					);
						echo "<select class='ui-widget input' name='$selectorName' size='8' multiple id='$tabAdd' style='width:320px;'>";
						while ($data = mysql_fetch_array($query, MYSQL_ASSOC))
					{
						echo "    <option value='{$data['value']}'>{$data['value']}</option>";
					}
						echo "</select>";
				}
		?>
		<?php
				$showComms = $_GET['showComms'];
				echo "<div class='ui-state-default ui-dialog-header ui-corner-all' style='padding: 3px; margin: 3px; width: 250px;'>Comments for $showComms<a style='float:right; clear:none;' href=\"#\" class=\"fg-button ui-corner-all fg-button-icon-solo delete\" title=\"Close this section\"><span class=\"ui-icon ui-corner-all silk-icon-bomb\"></span>&nbsp;</a></div>";
				echo "showCommsButton$showComms";
		?>
		<div id="commentshower" class="ui-state-active ui-corner-all">
			<div style="padding: 5px;">
				  <div id="tabs2-vinyl">
						<?php
									/*  START DRAWING THE 45S COMMENTS HERE */
								if ( $showComms == "45s" ) {
								$tabAdd = "Vinyl";
								echo "<div id=\"info304\" align=\"center\" class=\"ui-content-active ui-corner-all\" style=\"width: 195px; padding:6px;\"><div class=\"ui-state-selcted ui-widget-header ui-corner-all\">Vinyl Comments</div></div>";
								buildBox();
								}
						?>
				  </div>
				  <div id="tabs2-label">
						<?php
								if ( $showComms == "45s" ) {
								$tabAdd = "Label";
								echo "<div id=\"info305\" align=\"center\" class=\"ui-widget-content ui-corner-all\" style=\"width: 195px; padding:6px;\"><div class=\"ui-state-selcted ui-widget-header ui-corner-all\">Label Comments</div></div>";
								buildBox();
								}
						?>
				  </div>
				  <div id="tabs2-3">
						<?php
								if ( $showComms == "45s" ) {
								$tabAdd = "Promo";
								echo "<div id=\"info306\" align=\"center\" class=\"ui-widget-content ui-corner-all\" style=\"width: 195px; padding:6px;\"><div class=\"ui-state-selcted ui-widget-header ui-corner-all\">Promo Comments</div></div>";
								buildBox();
								}
						?>
				</div>
				<div id="tabs2-4">
						<?php
								if ( $showComms == "45s" ) {
								$tabAdd = "Sleeve";
								echo "<div id=\"info307\" align=\"center\" class=\"ui-widget-content ui-corner-all\" style=\"width: 195px; padding:6px;\"><div class=\"ui-state-selcted ui-widget-header ui-corner-all\">Sleeve Comments</div></div>";
								buildBox();
								}
						?>
				</div>
				<div id="tabs2-c1">
						<?php
								if ( $showComms == "Cards" ) {
								$tabAdd = "CardsType";
								echo "<div id=\"info307\" align=\"center\" class=\"ui-widget-content ui-corner-all\" style=\"width: 195px; padding:6px;\"><div class=\"ui-state-selcted ui-widget-header ui-corner-all\">Cards Type</div></div>";
								buildBox();
								}
						?>
				</div>				
				<div id="tabs2-c1">
						<?php
								if ( $showComms == "Cards" ) {
								$tabAdd = "CardsChips";
								echo "<div id=\"info307\" align=\"center\" class=\"ui-widget-content ui-corner-all\" style=\"width: 195px; padding:6px;\"><div class=\"ui-state-selcted ui-widget-header ui-corner-all\">Cards Chips</div></div>";
								buildBox();
								}
						?>
				</div>
				<div id="tabs2-c1">
						<?php
								if ( $showComms == "Cards" ) {
								$tabAdd = "CardsMisc";
								echo "<div id=\"info307\" align=\"center\" class=\"ui-widget-content ui-corner-all\" style=\"width: 195px; padding:6px;\"><div class=\"ui-state-selcted ui-widget-header ui-corner-all\">Cards Misc</div></div>";
								buildBox();
								}
						?>
				</div>				
				<div id="tabs2-t2">
				<?php
						if ( $showComms == "Trains" ) {
						$tabAdd = "Trains";
						echo "<div id=\"info309\" align=\"center\" class=\"ui-widget-content ui-corner-all\" style=\"width: 195px; padding:6px;\"><div class=\"ui-state-selcted ui-widget-header ui-corner-all\">You A Bitchs $showCommsButton4 bitch</div></div>";
						echo $showCommsButton4;
						buildBox();
						}
				?>
				</div>
				<div id="tabs2-t1">
				<?php
						if ( $showComms == "Trains" ) {
						$tabAdd = "Paint";
						echo "<div id=\"info308\" align=\"center\" class=\"ui-widget-content ui-corner-all\" style=\"width: 195px; padding:6px;\"><div class=\"ui-state-selcted ui-widget-header ui-corner-all\">Paint Comments</div></div>";
						buildBox();
						}
				?>
				</div>
		
				<div id="tabs2-t3">
				<?php
						if ( $showComms == "Trains" ) {
						$tabAdd = "TrainsPackaging";
						echo "<div id=\"info309a\" align=\"center\" class=\"ui-widget-content ui-corner-all\" style=\"width: 195px; padding:6px;\"><div class=\"ui-state-active ui-widget-header ui-corner-all\">Packaging Comments:</div></div>";
						buildBox();
						}
				?>
				</div>		
				<div id="tabs2-t4">
				<?php
						if ( $showComms == "Trains" ) {
						$tabAdd = "TrainsAccess";
						echo "<div id=\"info309b\" align=\"center\" class=\"ui-widget-content ui-corner-all\" style=\"width: 195px; padding:6px;\"><div class=\"ui-state-hover ui-widget-header ui-corner-all\">Accessories Comments:</div></div>";
						buildBox();
						}
				?>
				</div>
				<div id="tabs2-s1">
				<?php
						if ( $showComms == "Soldiers" ) {
						$tabAdd = "SolMisc";
						echo "<div id=\"info310\" align=\"center\" class=\"ui-widget-content ui-corner-all\" style=\"width: 195px; padding:6px;\"><div class=\"ui-state-selcted ui-widget-header ui-corner-all\">Soldiers Misc Comments</div></div>";
						buildBox();
						}
				?>
				</div>
				<div id="tabs2-s2">
				<?php
						if ( $showComms == "Soldiers" ) {
						$tabAdd = "SolPaint";
						echo "<div id=\"info311\" align=\"center\" class=\"ui-widget-content ui-corner-all\" style=\"width: 195px; padding:6px;\"><div class=\"ui-state-selcted ui-widget-header ui-corner-all\">Soldiers Paint Comments</div></div>";
						buildBox();
						}
				?>
			  </div>
    		</div>
  		</div>
</div>
</div>
</body>
</html>
