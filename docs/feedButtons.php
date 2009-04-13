<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Feed Boxes Component</title>
<style type="text/css">
<!--
.style1 {
	color: #FF3300;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<h1>Creating A Simple Footer Component</h1>
<p>Here's a simple example. </p>
<p><img src="images/footer.png" name="footscreen" width="500" height="76" id="footscreen" border="2" style="border-color:#FF3300;"></p>
<p>Ebay store RSS (<a href="showRss.php">setup instructions</a>)</p>
<p>Edit the <a href="configFile.php#ebRss">config file.</a></p>
<p>Get some buttons from google &amp; yahoo.</p>
<p>&amp; paste them into our component file.</p>
<p>&nbsp;</p>
<h3>Add to Google</h3>
<p>Get the link to your ebay store rss feed handy</p>
<p>head over to <a href="http://www.google.com/webmasters/add.html">http://www.google.com/webmasters/add.html</a></p>
<p>copy the HTML ouput and paste it into <span class="style1">partsOut/foot0.php </span></p>
<h3>Add To Yahoo</h3>
<p>use this page to generate your Yahoo button: <a href="http://publisher.yahoo.com/rss_guide/">http://publisher.yahoo.com/rss_guide/</a></p>
<p>copy the HTML ouput and paste it into <span class="style1">partsOut/foot0.php </span></p>
<h3>RSS button </h3>
<p>RSS <img src="../images/rss.png" width="32" height="32"> button wil automatically be loaded and linked from the config file </p>
<h3>Other Buttons</h3>
<p>ebay store button wil automatically be linked from the config file </p>
<?php
include('footer.php');
?>

</body>
</html>
