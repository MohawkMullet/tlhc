<style type="text/css">
<!--
.style3 {color: #CC0000}
.style5 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 18px;
	color: #FF3300;
}
.style6 {font-size: 12px}
-->
</style>

<link href="manual.css" rel="stylesheet" type="text/css">
<h1>INSTALLATION
</h1>
<h2>Requirements: </h2>
<p>Apache2, MySQL, PHP5+. (and of course you should run these on linux)</p>
<blockquote>
  <h3>Optional Requirements:</h3>
  <blockquote>
    <p>Basic knowledge of HTML </p>
    <p>A good WYSIWYG html editor like Dreamweaver (for use in wine)</p>
    <p>A listing manager tool (ie: TL2, jAOLT, etc) an eBay store, rss feed enabled for eBay store.</p>
    <p>NOTE: <a href="http://code.google.com/p/jaolt/">JAOLT</a> is getting more and more functional all the time and supports the use of cut and paste html listings as a feature. It is becoming a great open source and linux friendly alternative to TL. See the <a href="http://code.google.com/p/jaolt/">jAOLT</a> site at google code for details.</p>
  </blockquote>
  <h3>Recommended Tools:</h3>
  <blockquote>
    <p class="style6">If you are new to configuring Apache or MySQL servers these programs can be of great value:</p>
    <p><a href="http://www.webmin.com">Webmin</a></p>
    <p><a href="http://www.phpmyadmin.net">phpMyAdmin</a> </p>
  </blockquote>
</blockquote>
<h3 class="style3">DO NOT INSTALL THESE FILES ON A PRODUCTION WEBSERVER.</h3>
<p>These scripts are meant to be run on a private locally hosted and unexposed webserver. While these files are not malicious in any way they were poorly written and should be considered dangerous. </p>
<p class="style5">This software is untested and not safe. It is  a security risk to expose these scripts on a production webserver. </p>
<h2>Install</h2>
<ol>
  <li>Download the latest version from <a href="http://tlhc.googlecode.com">thlc.googlecode.com</a></li>
  <li>copy all the files in the main directory to a new directory in your public_html folder.</li>
  <li>IMPORTANT: edit the TLhC <a href="configFile.php">config file</a> </li>
  <li>OPTIONAL: Create the <a href="database.php">MySQL database</a> and database user </li>
  <li>fire up your web browser and point it to your new folder. </li>
</ol>
<?php
include('footer.php');
?>
