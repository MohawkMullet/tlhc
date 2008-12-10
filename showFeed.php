<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<?php
include('parts/tlhcVersion.php');
?>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>

<?php
echo $version;
?>

</title>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
<link href="parts/rssDisplay/rss.css" rel="stylesheet" type="text/css">
</head>

<body>

<div id="Layer1" style="position:absolute; left:5px; top:51px; width:351px; height:902px; z-index:1; overflow: auto;">
  <?php
 include('parts/rssDisplay/rss.php'); 
?> 

</div>
</body>
</html>
