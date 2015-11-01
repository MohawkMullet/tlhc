<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="images/favicon.ico">
<?php
include('parts/config.php');
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TLhC v 

<?php
echo $version;
?>


</title>

</head>

<frameset rows="*" cols="430,*" frameborder="no" border="0" framespacing="0">
<frame src="tabs.php" name="leftFrame" scrolling="auto" noresize="noresize" bordercolor="#cccccc" id="leftFrame" title="leftFrame" border="0" framespacing="0" style="overflow-x:hidden; overflow-y:auto;" />
    <frame src="right.php" name="mainFrame" id="mainFrame" title="mainFrame" border="0" framespacing="0" />
</frameset>
<noframes>
<body>
</body>
</noframes>
</html>
