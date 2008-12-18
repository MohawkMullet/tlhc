<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
<div class="helps">
<h1>IMAGE FIELD:</h1>
<h2>What is it for? </h2>
  This can be useful if you'd like to add a picture of your ebay item in the main description instead of only showing the images in the default ebay locations at the top and bottom of your listings.   this will not take the place of an ebay gallery image.
<h2>How Do I Get It Setup?</h2> 
  <p>TLhC has been written to use a free Picasa online photo account from Google.  I like to use a completely seperate gmail address just for the ebay images.
    Start by signing up for a new Gmail account.  Link your new gmail account to picasa and </p>
  <ol>
    <li>download the picasa application. and select some images for upload </li>
    <li>create a public folder. </li>
    <li>upload images.  Navigate to your public gallery through firefox and click the photo you want to display in your listing. </li>
    <li>use the "Link to this photo" option on the right of the page and choose a thumbnail size.  Check the box that says "Hide album link".  This will give you just an a href tag and and img html tag. </li>
    <li>  paste that code into the IMAGE (Picasa) field in TLhC input form. The link back to the picasa website will be stripped automatically. </li>
    <li> Hit the Outpt button to see your preview. </li>
  </ol>
  <h2>How do I show the Image in my listing?</h2>
  
<p>Simply include the following code the descript.php file:
</p>
<p class="style1"> &lt;?php<br>
include('formOuts/picasaImageOut2.php');<br>
?&gt;</p>
<p>You may need to adjust your path.					
  </p>
<p>Other notes on the image field:    </p>
<p>EDIT picasaImageOut.php in partsOut/formOuts/ to get rid of the link stripping. </p>
</p></div>
<?php
include('footer.php');
?>
