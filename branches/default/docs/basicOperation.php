<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Basic Operation of TLhC</title>
<link href="images/emx_nav_left.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>How It Works</h1>
<h2>The Basics</h2>
<ul>
  <li>You add some basic information about your ebay store to the file parts/config.php</li>
  <li>You input some information about your item into the main form </li>
  <li>You select whether to include some component boxes in your listing</li>
  <li>Add an image from an external host </li>
  <li>you submit the form </li>
</ul>
<p>RESULT: The data is processed into a preview and copyable html code.</p>
<h2>Template Structure</h2>
<p>TLhC can output a sample listing file consisting of 1 or more parts (see figure 1.1)</p>
<p><img src="images/exampleTemplate2.jpeg" width="235" height="232" style="float:right; "> </p>
<p>The default template consists of 2 main parts: <a name="components"></a></p>
<ul>
  <li>The Main Description</li>
  <li>A CSS Style Sheet: partsOut/styles.php</li>
</ul>
<p>And 5 removable components </p>
<ul>
  <li>About</li>
  <li>Shipping</li>
  <li>Feeds</li>
  <li>Promotion Boxes </li>
  <li>Store Category Boxes </li>
</ul>
<p>Any of these components may be included or excluded at the time of your acutal listing generation</p>
<p>Some of the components  will rely on your<a href="storeRss.php"> ebay store RSS feed</a>. You should <a href="storeRss.php">setup</a> one now. </p>
<h1>&nbsp;</h1>
<blockquote>&nbsp;</blockquote>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
