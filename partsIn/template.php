
<script src="../parts/SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="../parts/SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />


<ul id="mainMenu" class="MenuBarHorizontal">
  <li><a class="MenuBarItemSubmenu" href="#">Template</a>
      <ul>
        <li>
          <fieldset>
            <legend>Template</legend>
            <label>
              <input name="templateName" type="radio" value="default" checked/>
              Default</label>
            <br />
          <label>
            <input name="templateName" type="radio" value="blue" />
            Blue</label>
            <br />
          <label>
            <input name="templateName" type="radio" value="orange" />
            Orange</label>
          </fieldset>
        </li>
      </ul>
  </li>
  <li><a href="http://code.google.com/p/tlhc/" target="_blank">TLhC <?php echo "$version"; ?></a></li>
</ul>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("mainMenu", {imgDown:"../parts/SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../parts/SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
