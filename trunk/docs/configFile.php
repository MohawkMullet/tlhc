<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>TLhC Config File Help</title>
<style type="text/css">
<!--
.style2 {color: #003399}
.style3 {color: #660000}
a {
	text-decoration: none;
}
.style4 {
	color: #330000;
	font-weight: bold;
}
-->
</style>
<link href="manual.css" rel="stylesheet" type="text/css">
</head>

<body>
 <h1>Editing the TLhC Config File</h1>
 <p> The config file is located at <span class="style4">parts/config.php</span></p>
<blockquote>
   <p>Required:</p>
   <p>Ebay store name, store RSS feed link, ebay store URL, &amp; possibly a store logo.</p>
   <p>Optional:</p>
   <p>MySQL database info, </p>
   <p><a href="#anchor1">Picasa Images </a>info, </p>
   <p>customizations to the look &amp; feel of TLhC.</p>
</blockquote>
 <h3>.Ebay RSS Feed</h3>
 <blockquote>
   <p><a href="storeRss.php">Setup (at ebay)</a></p>
   <p>Config File Options</p>
 </blockquote>
 <p>&nbsp;</p>
<p>&nbsp;</p>
 <h3><a name="anchor1" id="anchor1"></a>Picasa Info (<a href="picasa.php">setup</a>):</h3>
 <p>Edit the following lines:</p>
 <p class="style2">// PICASA IMAGES LOGIN INFO<br>
   $picasaUser = &quot;<span class="style3">YourUserName</span>&quot;;<br>
 $picasaPass	= &quot;<span class="style3">Password</span>&quot;;</p>
 <p>Here's how it works:</p>
 <p>Store Name: This is where you are going to put in the name of your ebay store. Example: If your store was named: &quot;My Used Shoes&quot; you would change the line to look like this</p>
 <p>$storeName = &quot;My Used Shoes&quot;;</p>
 <p>Basically just type your store name between the quotes &quot; &quot; and leave the quotes and the semicolon and the end</p>
 <p class="style2">&nbsp;</p>
<p>
   <?php
include('footer.php');
?>
 </p>
 <p>&nbsp; </p>
</body>
</html>
