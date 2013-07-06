<title>Stored Comments (mysql)</title>
<link href="manual.css" rel="stylesheet" type="text/css">
<h1>Using Stored Comments</h1>
<h2>Using mySQL</h2>
<blockquote>
  <p><a href="database.php">See setting up my database </a></p>
  <p>Using a flat file</p>
  <p>Using TLhC without a database</p>
  <p> You can manually configure your pre-stored comments and add them to a file.</p>
  <p>I'll provide this later. </p>
</blockquote>
<h2>Setup</h2>
<blockquote>
  <p>See <a href="database.php">database setup</a></p>
</blockquote>
<h2>Customizing</h2>
<h2>Using</h2>
<h2><a name="adding"></a>Adding Stored Comments</h2>
<blockquote>
  <p>Click the Plus Icon near the top of the Store Comments form</p>
  <p><img src="images/addComm1.png" width="351" height="96" border="2" style="border-color:#FF3300;"></p>
  <p>Choose a category and enter your comment</p>
  <p><img src="images/addComm.png" width="415" height="177" border="2" style="border-color:#FF3300;"></p>
  <p>You're result will be displayed</p>
  <p>&nbsp;</p>
  <p>Refresh the main form</p>
  <p><img src="images/refresh.png" width="192" height="96" border="2" style="border-color:#FF3300;"></p>
</blockquote>
<p>Example Code:</p>
<textarea>&lt;?php
		if ( ! empty( $_POST["LabelSelector"])) {
		$LabelSelector = $_POST["LabelSelector"];
//		print "\n\n";
		foreach ( $LabelSelector as $valueLabels ) {
		print "<span class=\"multicomms\">Label $valueLabels</span><br>\n";                                             
		}
		}
?&gt;</textarea>
<p>Deleting &amp; Reordering</p>
<blockquote>
  <p>See <a href="http://phpmyadmin.net">phpMyAdmin.net</a></p>
</blockquote>
<p><a href="index.php">Back To Index</a>
      
  <?php
//include_once('../license.php');
?>
</p>
