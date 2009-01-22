<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Menu</title>
<script src="../parts/SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="../parts/SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>

<body>
<ul id="mainMenu" class="MenuBarHorizontal">
  <li><a class="MenuBarItemSubmenu" href="#">File</a>
      <ul>
        <li><a href="#">Item 1.1</a></li>
        <li><a href="#">Item 1.2</a></li>
        <li><a href="#">Item 1.3</a></li>
      </ul>
  </li>
  <li><a href="#">Edit</a></li>
  <li><a class="MenuBarItemSubmenu" href="#">Template</a>
      <ul>
        <li><a href="#" title="Original">Original</a>          </li>
        <li><a href="#">Blue Frame</a></li>
        <li><a href="#">Item 3.3</a></li>
      </ul>
  </li>
  <li><a href="#" class="MenuBarItemSubmenu">About</a>
    <ul>
      <li><a href="docs/index.php" target="mainFrame">Documentation</a></li>
      <li><a href="http://tlhc.googlecode.com" target="_blank">Check for Updates</a></li>
      <li><a href="../parts/aboutTLhC.php" target="mainFrame">About TLhC</a></li>
    </ul>
  </li>
</ul>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("mainMenu", {imgDown:"../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
</body>
</html>
