<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>TLhC Config File Help</title>
<style type="text/css">
<!--
.style1 {color: #0000FF}
-->
</style>
</head>

<body>
 <h1>Editing the TLhC Config File</h1>
 <p> The config file is located at <span class="style1">parts/config.php</span></p>
<p>You need to edit several values in this file to make the scripts in TLhC ouput the correct information for your listings.</p>
 <p>There are several required values and some optional values.</p>
 <blockquote>
   <p>Required:</p>
   <p>Ebay store name, store RSS feed link, ebay store URL, &amp; possibly a store logo.</p>
   <p>Optional:</p>
   <p>MySQL database info, Google Images (Picasa) info, &amp; customizations to the look &amp; feel of TLhC.</p>
 </blockquote>
 <p>Here's how it works:</p>
 <p>Store Name: This is where you are going to put in the name of your ebay store. Example: If your store was named: &quot;My Used Shoes&quot; you would change the line to look like this</p>
 <p>$storeName = &quot;My Used Shoes&quot;;</p>
 <p>Basically just type your store name between the quotes &quot; &quot; and leave the quotes and the semicolon and the end.</p>
<p>
   <?php
include('footer.php');
?>
 </p>
 <p>&nbsp; </p>
</body>
</html>
