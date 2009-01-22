<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	color: #3300FF;
}
-->
</style>
</head>

<body>
<h1>Create MySQL database &amp; database user</h1>
<h3>Easiest:</h3>
<ol>
  <li>create a mysql database called tlhc</li>
  <li>create a mysql user named tlhcuser with the password of tlhcpass and full permissions on the new database you created above.</li>
  <li>run the included .sql file found in the INSTALL folder.</li>
</ol>
<h3>Custom:</h3>
<p>Edit the file:<span class="style1"> parts/db/tlhcConnect.php</span> with the appropriate information. </p>
<p>Need help with MySQL?</p>
<p>try using <a href="http://www.phpmyadmin.net">phpMyAdmin</a>  </p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>
  <?php
include('footer.php');
?> 
</p>
<p>&nbsp;</p>
</body>
</html>
