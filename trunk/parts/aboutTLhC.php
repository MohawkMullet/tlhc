<!-- This is the about TLhC project page -->
<table width="397" border="0" align="left" class="ui-widget ui-widget-content" style="padding:4px;">
<tr>
<td width="391" valign="middle"><table width="100%"  border="0" align="center" cellpadding="15" cellspacing="15" id="inner" bgcolor="#ffffff">
  <tr>
    <td align="center" valign="top">    <span style="display:inline;" align="center">
      <p>TLhC v 
          <?php
echo $version;
?>    </span>
          <br>   
          <!-- we are having some trouble with the path -->   
          <img src="images/TLhClogoSmaller.png" width="53" height="75"></p>
      <p><a href="docs/index.php" target="mainFrame">DOCUMENTATION</a></p>
      <p>Check for <a href="http://code.google.com/p/tlhc/" target="_blank">Updates</a></p>
<span class="fg-toolbar ui-corner-all" style="font-size:14px; background:#cccccc; display: inline; padding:.6em; border: medium double #FFFFFF;">
<?php
echo $loadRight;
echo "<span class='fg-toolbar fg-buttonset-multi' style='display: inline;'>";

echo $searchButton;
echo $picButton;
echo $search2;

echo $abbrevsButton;
echo "</span>";
echo $previewButton;
echo "<span class='fg-toolbar fg-buttonset-multi' style='display: inline;'>";
echo $addCommsButton;
echo $showCommsButton;
echo $addCommsButton2;
echo $showCommsButton2;

echo "</span>";
echo $gplButton;
echo $helpButton;
echo $contactButton;
echo $flagButton;
echo "</span>";
?>
</span>

  <div align="center">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="LTSGSFCL8HVJG">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
  
  <img src="images/preview_32x32.png" width="32" height="32">  </div>
  <div align="center" class="copyright"><br>
  	      <?php
echo "TL html Cheater v";
echo $version;
echo "<br>";
echo	"Copyright &copy; 2008 <a href=\"mailto:mohawkdigital@gmail.com\" style=\"text-decoration:none;\">$contactButton Damian C. Kelly.</a>&nbsp;";
echo	"TLhC is free software released under GNU GPLv3.<br>";
?>
  </div>
  <div align="center"><img src="images/gplv3-127x51.png">  </div></td>
  </tr>
</table></td>
</tr>
</table>
