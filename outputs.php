<div id="accordion">
<div>
  <h3><a href="#">Auction Listing Preview</a></h3>
  <div style="overflow-x: hidden; overflow-y:auto;">
    <div style="width:830px; height: 540px; background:#FFFFFF;" align="center" class="ui-corner-all">

	 <?php 
	 		$itemType = $_POST['itemType']; 
	 		echo $itemType;
	 ?>

	  <?php
									$templateName = $_POST['templateName'];
										if ($templateName == "cards") {
											include('partsOut/preCards.php');
										}
										if ($templateName == "default") {
											include('partsOut/preDefault.php');
										}
										if ($templateName == "blue") {
											include('partsOut/preB.php');
										}
										if ($templateName == "blueGreen") {
											include('partsOut/preBlueGreen.php');
										}
										if ($templateName == "yellow") {
											include('partsOut/preY.php');
										}	
										if ($templateName == "soldier") {
											include('partsOut/preS.php');
										}		
										if ($templateName == "trains") {
											include('partsOut/preTrains.php');
										}		
									?>
    </div>
  </div>
</div>
<div>
<h3><a href="#">Empty Container</a></h3>
<div style="overflow-x: hidden; overflow-y:auto;">
<div style="width:830px; height: 540px; background:#FFFFFF;" align="center" class="ui-corner-all">
<!-- 									<iframe name="tipster" class="ui-content-default ui-corner-all" width="800px" height="500px" style="float:left; clear:both; display:inline;" frameborder="1" id="tipsFrame" scrolling="auto" sandbox="allow-forms allow-scripts" src="parts/jq/tooltipster-master/index.html">
									</iframe> -->
</div>
</div>
</div>
<div>
  <h3><a href="#">Copy And Paste The HTML</a></h3>
  <div style="padding-left:4px; overflow-x: hidden; overflow-y:auto;">
    <div style="float:left;">
									<iframe name="tipster" class="ui-content-default ui-corner-all" width="800px" height="500px" style="float:left; clear:both; display:inline;" frameborder="1" id="copyPasteFrame" scrolling="auto" sandbox="allow-forms allow-scripts" src="copyPaste2.php">
									</iframe> 
    </div>
  </div>
</div>
</div>
