<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #FF0000;
	font-size: 12px;
}
.style2 {
	color: #0000FF;
	font-family: "Times New Roman", Times, serif;
	font-size: 12px;
	font-weight: bold;
}
.style3 {color: #CC0000}
.style4 {
	color: #FF0000;
	font-weight: bold;
	font-size: 12px;
}
.style7 {
	font-size: 14px;
	font-weight: bold;
}
-->
</style>
<link href="manual.css" rel="stylesheet" type="text/css">
<H1><a name="ebayRSS"></a>Show some new items in your listing via your ebay RSS feed</h1>
<h3>Simple:</h3>
<h4>Add your <a href="storeRss.php">ebay store rss feed</a> in <span class="style3">parts/config.php</span> </h4>
<h4>Select the Checkbox Items in the main form</h4>
<p>Submit the form </p>
<h3>Advanced:</h3>
<ol>
  <li> grab your rss link to your clipboard.  open up the file <span class="style3">partsOut/.newListingsDefault.php</span></li>
  <li>scroll down and decide how many items you want to display by changing the number </li>
  <li>open up the file<span class="style3"> partsOut/preD.php</span>    include the following code: </li>
</ol>
<p class="style1">&lt;?php<br>
 	 	$boxes200 = $_POST[&quot;boxes200&quot;];<br>
	  		if ($boxes200 != &quot;&quot;) {<br>
		include('rssShowNew.php');<br>
		}<br>
?&gt;</p>
<p> somewhere in a div element or td tags where ever you want your feed items to display. </p>
<?php
include('footer.php');
?>
