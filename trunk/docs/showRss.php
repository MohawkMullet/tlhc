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
.style5 {font-size: 12px}
-->
</style>
<H1>Include store categories in listing</h1>
<h2>How?</h2>
<h4>Use your ebay store management tools to build links to your store categories.</h4>
<ul>
  <li> Logon to ebay. Choose manage my store. Click HTML builder. Choose create links to store categories.</li>
  <li>create your links and copy the html ouptut code to your clipboard. </li>
  <li>open up the folder <span class="style2">partsOut/cats/</span></li>
  <li>create a file called <span class="style2">5cats.php</span>, <span class="style2">10cats.php</span>, &amp; <span class="style2">20cats.php</span></li>
  <li>Paste your code from the ebay html link builder into a blank <span class="style2">5cats.php</span> </li>
  <li>open up the file <span class="style2">inMain.php</span> from the root directory </li>
  <li>uncomment the line: <span class="style4">include(&quot;partsIn/checkBoxes.php&quot;);</span> This will now include a series of radio boxes in your main input form. </li>
</ul>
<p>Selecting 5 will include the file <span class="style2">5cats.php</span> in your listing.  selecting 20 will include the file <span class="style2">20cats.php</span> in your listing. </p>
<p>Edit the file <span class="style2">partsOut/OutPutPreview.php</span> and place the code:</p>
<p class="style4">&lt;?php<br>
  include(&quot;formOuts/catBoxes.php&quot;);<br>
?&gt;</p>
<p>whereever in your listing you want your store categories to appear.  </p>
<H1>Show some new items in your listing via your ebay RSS feed</h1>
<h2>how?</h2>
<h4>start by using your ebay store management tools to enable your rss feed for your store.</h4>
<ol><li> grab your rss link to your clipboard.  open up the file <span class="style2">partsOut/rssShowNew.php</span>. </li>
  <li>Paste your feed URL into the <span class="style3">$url</span> variable. </li>
  <li>scroll down and decide how many items you want to display by changing the number </li>
  <li>open up the file<span class="style2"> partsOut/OutPutPreview.ph</span>p
          include the following code: </li>
</ol>
<p class="style1">&lt;?php<br>
 	 	$boxes200 = $_POST[&quot;boxes200&quot;];<br>
	  		if ($boxes200 != &quot;&quot;) {<br>
		include('rssShowNew.php');<br>
		}<br>
?&gt;</p>
<p> somewhere in a div element or td tags where ever you want your feed items to display. </p>
