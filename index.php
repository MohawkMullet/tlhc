<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include('parts/config.php');
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TLhC v 

<?php
echo $version;
?>


</title>
<script type="text/javascript" src="parts/jquery/jquery-1.3.2.js"></script>


</head>

<frameset rows="*" cols="425,*" frameborder="yes" border="0" framespacing="0">
<frame src="tabs.php" name="leftFrame" scrolling="auto" noresize="noresize" bordercolor="#cccccc" id="leftFrame" title="leftFrame" border="0" framespacing="0" />
    <frame src="right.php" name="mainFrame" id="mainFrame" title="mainFrame" border="0" framespacing="0" />
  </frameset>
</frameset>
<noframes>
<body>
</body>
</noframes>
</html>
