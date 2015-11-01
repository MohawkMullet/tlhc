<style type="text/css">
<!--
.style2 {
	font-size: 24px;
	font-weight: bold;
}
.style3 {color: #990066}
-->
</style>
<link href="manual.css" rel="stylesheet" type="text/css">
<div class="helps">
<h1>IMAGE FIELD:</h1>
<h2>What is it for? </h2>
  <p>Adding offsite hosted images to your ebay listings.</p>
  <p>This can be useful if you'd like to add a picture of your ebay item in the main description instead of only showing the images in the default ebay locations at the top and bottom of your listings.   this will not take the place of an ebay gallery image. </p>
  <p>TLhC has been written to use a free Picasa online photo account from Google.  
  Start by signing up for a new Gmail account (its free and available in most countries).  Link your new gmail account to picasa and </p>
  <h2>Setup:</h2> 
  <ol>
    <li>Go to <a href="http://picasaweb.google.com" class="style2">picasaweb.google.com</a> &amp; <a href="../parts/picasaLogin.php">sign in</a> or register</li>
    <li>Upload some images to a public folder. </li>
  </ol>
  <blockquote>
    <p><img src="images/picUp1b.png" width="568" height="117" hspace="6" vspace="6" border="2"></p>
  </blockquote>
  <h2>Configure TLhC:</h2>
  <ol>
    <li>Edit <a href="configFile.php" class="style3">parts/config.php</a> to include your picasa sign in info</li>
  </ol>
  <h2>Using<a name="using"></a>:</h2>
  <ol>
    <li>Open a picasa web album (shortcut links pictured below) <br>
    <a name="tlhcPicasa"></a>   <img src="images/picUp2.png" width="385" height="80" hspace="6" vspace="6" border="2"></li>

    <li>Use the "Link to this photo" and the options pictured below<br>
    <img src="images/pic2.png" width="297" height="380" hspace="4" vspace="4" border="2"></li>
    <li>  Copy &amp;<a href="#using"> Paste</a> the &quot;Embed Image&quot; code into TLhC. (The link back to the picasa website will be stripped automatically.)</li>
  </ol>
  <p>
  <!-- #BeginDate format:Am1 -->March 24, 2009<!-- #EndDate -->
</p>
<p>EDIT picasaImageOut.php in partsOut/formOuts/ to get rid of the link stripping. </p>
</p></div>
<?php
include('footer.php');
?>
