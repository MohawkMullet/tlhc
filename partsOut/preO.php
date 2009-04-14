<?php
$boxes2 = $_POST["boxes2"];
if ($boxes2 != "") {
include('styleO.php');
}
?>
<table width="840px" align="center" border="0" cellpadding="0" cellspacing="0" id="header">
        <tr>
          <td width="35%"><img src="http://lh3.ggpht.com/_W_e1PG0tXUk/SYBSHgvoG0I/AAAAAAAAAsc/Usqa091OFfg/s800/wfFont1.jpg" width="287" height="120" title="HepVinyl.com Rare 45's, LP's & Plenty of Common Onese Too!"></td>
          <td width="65%" align="right" valign="bottom" bgcolor="#FFFFFF"> <div></div>          
            <table border="0" align="right" cellpadding="0" cellspacing="0">
          <tr><td><table cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: #FFFFFF 1px solid;" width="100%"><tr><td width="100%"><table cellspacing="0" cellpadding="0" border="0" align="right" width="100%">
            <tr><td height="14" valign="top" colspan="7"></td></tr><tr><td width="14" nowrap valign="top"></td><td valign="top" nowrap width="80"><table cellspacing="0" cellpadding="0" style="top: 5px;  left: 5px;background: #FFFFFF;position: relative; " border="0" width="100%"><tr><td width="100%"><table cellspacing="0" cellpadding="0" style="top: -4px;  left: -4px; position: relative; border: #FFFFFF 1px solid;" width="100%" align="center"><tr><td width="100%"><table cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#ffffff" width="100%"><tr><td nowrap valign="middle" align="center"><a href="http://stores.ebay.com/HepVinyl_R-B-45s_W0QQfsubZ205019010"><img src="http://lh5.ggpht.com/_W_e1PG0tXUk/SYB93m9uetI/AAAAAAAAAt0/J9X_KWFVePY/s144/s1b.jpg" border="0" title="R&B 45's"></a></td></tr></table><table cellspacing="0" cellpadding="4" border="0" align="center" bgcolor="#FFFFFF" width="100%"><tr><td width="100%" valign="top"><table cellspacing="0" cellpadding="0" border="0" width="100%" align="center"><tr><td align="center"><div align="left"><a href="http://stores.ebay.com/HepVinyl_R-B-45s_W0QQfsubZ205019010"><font face="Verdana">R&B 45's</font></a></div></td>
          </tr></table></td></tr></table></td></tr></table></td></tr></table></td><td width="19" nowrap valign="top"></td><td valign="top" nowrap width="80"><table cellspacing="0" cellpadding="0" style="top: 5px;  left: 5px;background: #FFFFFF;position: relative; " border="0" width="100%"><tr><td width="100%"><table cellspacing="0" cellpadding="0" style="top: -4px;  left: -4px; position: relative; border: #FFFFFF 1px solid;" width="100%" align="center"><tr><td width="100%"><table cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#ffffff" width="100%"><tr><td nowrap valign="middle" align="center"><a href="http://stores.ebay.com/HepVinyl_Promo-DJ-Copies_W0QQfsubZ202900010"><img src="http://lh6.ggpht.com/_W_e1PG0tXUk/SYB93VWASWI/AAAAAAAAAts/Mf8fF95yFLM/s144/s1a.jpg" border="0" title="Promo & DJ copies"></a></td></tr></table><table cellspacing="0" cellpadding="4" border="0" align="center" bgcolor="#FFFFFF" width="100%"><tr><td width="100%" valign="top"><table cellspacing="0" cellpadding="0" border="0" width="100%" align="center"><tr>
            <td align="center"><div align="left"><a href="http://stores.ebay.com/HepVinyl_Promo-DJ-Copies_W0QQfsubZ202900010"><font face="Verdana">Promo &amp; DJ</font></a></div></td>
          </tr></table></td></tr></table></td></tr></table></td></tr></table></td><td width="19" nowrap valign="top"></td><td valign="top" nowrap width="80"><table cellspacing="0" cellpadding="0" style="top: 5px;  left: 5px;background: #FFFFFF;position: relative; " border="0" width="100%"><tr><td width="100%"><table cellspacing="0" cellpadding="0" style="top: -4px;  left: -4px; position: relative; border: #FFFFFF 1px solid;" width="100%" align="center"><tr><td width="100%"><table cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#ffffff" width="100%"><tr><td nowrap valign="middle" align="center"><a href="http://stores.ebay.com/HepVinyl_45s-with-Artwork_W0QQfsubZ372458010"><img src="../images/t3/ta64c.png" border="0" title="45's with artwork"></a></td></tr></table><table cellspacing="0" cellpadding="4" border="0" align="center" bgcolor="#FFFFFF" width="100%"><tr><td width="100%" valign="top"><table cellspacing="0" cellpadding="0" border="0" width="100%" align="center"><tr>
            <td align="center"><div align="left"><a href="http://stores.ebay.com/HepVinyl_45s-with-Artwork_W0QQfsubZ372458010"><font face="Verdana">45's w/ Art</font></a></div></td>
          </tr></table></td></tr></table></td></tr></table></td></tr></table></td><td width="19" nowrap valign="top"></td></tr><tr><td height="19" valign="top" colspan="7"></td></tr></table></td></tr></table></td></tr></table></td>
        </tr>
      </table>
<table align="center" cellspacing="6" class="whole" id="whole">
  <tr>
	<td>
	<?php
include("descriptO.php");
?>
<table width="840" border="0" align="center" cellpadding="0" cellspacing="0" id="components">
  <tr>
    <td align="center" valign="top"><?php
	$boxes4 = $_POST["boxes4"];
	if ($boxes4 != "") {
	include('staticPages/gradesOrange.php');
	echo "<br>";
	include('staticPages/commentkeyOrange.php');
	}
?></td>
    <td width="500" valign="top"><?php
	$boxes200 = $_POST["boxes200"];
	if ($boxes200 != "") {
	include('newListingsOrange.php');
	}
?>
      <?php
	$boxes3 = $_POST["boxes3"];
	if ($boxes3 != "") {
	include('staticPages/aboutOrange.php');
	}
?></td>
  </tr>
</table>
<br>
<?php
	$boxes6 = $_POST["boxes6"];
	if ($boxes6 != "") {
//	echo "suck some tits";
	include('staticPages/storelinks.php');
	}
?><br>
<?php
include("formOuts/componentsOut.php");
?>
<div align="center" style="width: 500px; position:relative; float:none;">            
<?php
	$boxes5 = $_POST["boxes5"];
	if ($boxes5 != "") {
	include('footO.php');
	}
?>  
</div></td>
  </tr>
</table>
<div align="center">
<?php
//echo $cheaterTag;
?>
</div>
