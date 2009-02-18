
<script src="../parts/SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="../parts/SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />


<ul id="mainMenu" class="MenuBarHorizontal">
  <li><a href="#" title="Choose your template" class="MenuBarItemSubmenu">Template</a>
      <ul>
        <li>
          <fieldset>
          <legend>Template</legend>
            <label>
          <input name="templateName" type="radio" value="default"/>
              Default</label>
          <br />
          <label>
          <input name="templateName" type="radio" value="blue" />
            Blue</label>
          <br />
          <label>
          <input name="templateName" type="radio" value="orange" checked/>
            Orange</label>
          </fieldset>
        </li>
      </ul>
  </li>
  <li><a href="../parts/searchForms.php" title="Search the Web" target="mainFrame">Search Web</a></li>
  <li><a href="http://code.google.com/p/tlhc/" title="TurboLister HTML Cheater" target="_blank" class="MenuBarItemSubmenu">TLhC <?php echo "$version"; ?></a>
    <ul>
      <li><a href="../docs/index.php" title="Documentation" target="mainFrame">Documentation</a></li>
      <li><a href="http://code.google.com/p/tlhc/" title="Check for updates" target="_blank">Updates</a></li>
      <li><a href="#" title="About TLhC" target="mainFrame">About</a></li>
    </ul>
  </li>
</ul>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("mainMenu", {imgDown:"../parts/SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../parts/SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
