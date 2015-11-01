<style type="text/css">
<!--
.style2 {	color: #0000FF;
	font-family: "Times New Roman", Times, serif;
	font-size: 12px;
	font-weight: bold;
}
.style4 {	color: #FF0000;
	font-weight: bold;
	font-size: 12px;
}
.style7 {	font-size: 14px;
	font-weight: bold;
}
-->
</style>
<link href="manual.css" rel="stylesheet" type="text/css">
<H1>Include store categories in listing</h1>
<h2>How?</h2>
<h4>Use your ebay store management tools to build links to your store categories.</h4>
<ul>
  <li> Logon to ebay. Choose manage my store. Click HTML builder. Choose create links to store categories.</li>
  <li>create your links and copy the html ouptut code to your clipboard. </li>
  <li>open up the folder <span class="style2">partsOut/info/</span></li>
  <li>create a file called <span class="style2">5cats.php</span>, <span class="style2">10cats.php</span>, &amp; <span class="style2">20cats.php</span></li>
  <li>Paste your code from the ebay html link builder into a blank <span class="style7">(don't use &lt;html&gt;&lt;head&gt; or &lt;body&gt; tags in these files)</span> <span class="style2">5cats.php</span> </li>
  <li>open up the file <span class="style2">inMain.php</span> from the root directory </li>
  <li>uncomment the line: <span class="style4">include(&quot;partsIn/checkBoxes.php&quot;);</span> This will now include a series of radio boxes in your main input form. </li>
</ul>
<p>Selecting 5 will include the file <span class="style2">5cats.php</span> in your listing. selecting 20 will include the file <span class="style2">20cats.php</span> in your listing. </p>
<p><s>Edit the file <span class="style2">partsOut/OutPutPreview.php</span> and place the code:</s></p>
<p class="style4"><s>&lt;?php<br>
  include(&quot;formOuts/catBoxes.php&quot;);<br>
  ?&gt;</s></p>
<p><s>whereever in your listing you want your store categories to appear. </s></p>
<p>deprecated as of 2009-03-20ish</p>
<?php
include('footer.php');
?>

