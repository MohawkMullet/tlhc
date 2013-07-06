<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<meta http-equiv="content-type" content="text/html; charset=WINDOWS-1252" >
<link href="manual.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
h2 {
	text-decoration: none;
	margin: 4px;
	padding: 4px;
}
h3 {
	text-decoration: none;
	margin: 4px;
	padding: 4px;
}
h4 {
	text-decoration: none;
	margin: 4px;
	padding: 4px;
}
a {
	text-decoration: none;
	margin: 2px;
	padding: 2px;
}
-->
</style>
<head>
<?php
include('../parts/config.php');
echo "<base href=\"docs/\">";

?>
<title>Start Here</title>
<link href="../parts/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="ui-widget-header ui-corner-all ui-state-active">
<h2>Welcome to TLhC 
<?php
echo "$version";
?> 
</h2></div>
<div class="ui-widget-header ui-state-disabled ui-corner-all"><h1>Getting Started Guide </h1></div>
<blockquote>
  <h4><a href="../license.php">License</a></h4>
  <p>Features</p>
  <h3><a href="why.php">Why</a></h3>
  <h3><a href="new.php">What's New</a></h3>
  <h3><a href="basicOperation.php">How It Works</a></h3>
</blockquote>
<div class="ui-widget-header ui-corner-all ui-state-active">
<h2><a href="easyInstall.php">Install</a></h2></div>
<blockquote>
  <h3><a href="easyInstall.php">System Requirements</a></h3>
  <h4>Configuring</h4>
  <h3><a href="configFile.php">Changing the Config File </a></h3>
</blockquote>
<div class="ui-widget-header ui-corner-all ui-state-active">
<h2><a href="basicOperation.php">Using</a></h2></div>
<h2 class="ui-state-default ui-corner-all">Modifying the default Template</h2>
<h4>Main Description</h4>
<ul>
  <li>Store Logo	&amp; other images</li>
  <li><a href="picasa.php">Extra Pictures of Items </a>  </li>
</ul>
<h4>Style Sheet </h4>
<h3><a href="componentDesign.php" class="ui-state-hover ui-corner-all">Removable Components  </a></h3>
<ul>
  <li>
    <h4><a href="basicOperation.php#about">The About Box</a></h4>
  </li>
  <li>
    <h4>The Shipping Box</h4>
  </li>
  <li>
    <h4><a href="feedButtons.php">The Footer   </a></h4>
  </li>
  <li>
    <h4><a href="storeCategories.php">Including Store Categories </a></h4>
  </li>
  <li>
    <h4><a href="showRss.php#ebayRSS">Including Recent Listings from RSS </a></h4>
  </li>
  <li>Ebay store Promotion Boxes </li>
</ul>
<h2>Advanced Topics </h2>
<blockquote>
  <h3>Using Stored Comments </h3>
  <h3>Important Files</h3>
  <h3>Form Fields and </h3>
</blockquote>
<a href="contact.php" class="ui-icon ui-icon-alert"><h2 class="ui-state-error ui-corner-all">Contact</h2></a> 
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="LTSGSFCL8HVJG">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

<?php
include_once('../license.php');
?>
</body>
</html>
