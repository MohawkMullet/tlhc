<?php 
include('head.php'); 
include("db/tlhcConnect.php");
?>
<html>
<head>
<style type="text/css">
<!--
body,td,th {
	color: #FFFF00;
}
#ckey {
	position:absolute;
	left:362px;
	top:48px;
	width:654px;
	height:160px;
	z-index:1;
}
#divnotes {
	position:absolute;
	left:22px;
	top:37px;
	width:300px;
	height:611px;
	z-index:1;
}
-->
</style>
</head>
<body>
<div id="ckey">                  
<table width="100%" border="0" cellpadding="1" cellspacing="1" bgcolor="#CCCCCC" id="commentkey" style="font:small;">
                    <tbody>
                      <tr valign="top" align="left">
                        <td><a name="comments" id="comments"></a> <span class="greyFontSmaller"><strong>7&quot;</strong> - standard 45</span></td>
                        <td><span class="greyFontSmaller"><strong>ops</strong> - orig Record Co sleeve</span></td>
                        <td><span class="greyFontSmaller"><strong>ss</strong> - still sealed</span></td>
                      </tr>
                      <tr>
                        <td><span class="greyFontSmaller"><strong>7&quot; 33</strong> - 7-inch 33rpm </span></td>
                        <td align="left" valign="top"><span class="greyFontSmaller"><strong>ost</strong> - orig soundtrack</span></td>
                        <td><span class="greyFontSmaller"><strong>toc</strong> - tape on cover</span></td>
                      </tr>
                      <tr>
                        <td><span class="greyFontSmaller"><strong>bb</strong> - bb hole in cover</span></td>
                        <td><span class="greyFontSmaller"><strong>pc</strong> - pic cover usually hard</span></td>
                        <td><span class="greyFontSmaller"><strong>tol </strong>- tape on label</span></td>
                      </tr>
                      <tr>
                        <td><span class="greyFontSmaller"><strong>boot</strong> - bootleg</span></td>
                        <td><span class="greyFontSmaller"><strong>promo</strong> - promotional copy</span></td>
                        <td><span class="greyFontSmaller"><strong>wlp</strong> - white label promo</span></td>
                      </tr>
                      <tr>
                        <td><span class="greyFontSmaller"><strong>coh</strong> - cut-out-hole</span></td>
                        <td align="left" valign="top"><span class="greyFontSmaller"><strong>ps</strong> - picture sleeve (45)</span></td>
                        <td><span class="greyFontSmaller"><strong>wo(b)c</strong> - writing on (back) cover</span></td>
                      </tr>
                      <tr>
                        <td><span class="greyFontSmaller"><strong>co</strong> - cut-out</span></td>
                        <td><span class="greyFontSmaller"><strong>re</strong> - reissue</span></td>
                        <td><span class="greyFontSmaller"><strong>wol </strong>- writing on label</span></td>
                      </tr>
                      <tr>
                        <td><span class="greyFontSmaller"><strong>cv - </strong>colored vinyl</span></td>
                        <td><span class="greyFontSmaller"><strong>rw </strong>- ring wear</span></td>
                        <td><span class="greyFontSmaller"><strong>xol</strong> - &quot;x&quot; on label</span></td>
                      </tr>
                      <tr>
                        <td><span class="greyFontSmaller"><strong>dj </strong>- Radio Station (promo)</span></td>
                        <td><span class="greyFontSmaller"><strong>s</strong> - stereo Lp </span></td>
                        <td><span class="greyFontSmaller">&nbsp;</span></td>
                      </tr>
                      <tr>
                        <td align="left" valign="top"><span class="greyFontSmaller"><strong>EP</strong> - Extended Play 7&quot;</span></td>
                        <td><span class="greyFontSmaller"><strong>sh</strong> - small hole 7&quot; </span></td>
                        <td><span class="greyFontSmaller">&nbsp;</span></td>
                      </tr>
                      <tr>
                        <td><span class="greyFontSmaller"><strong>imp</strong> - import</span></td>
                        <td><span class="greyFontSmaller"><strong>sl</strong> - slight </span></td>
                        <td><span class="greyFontSmaller">&nbsp;</span></td>
                      </tr>
                      <tr>
                        <td><span class="greyFontSmaller"><strong>mj - </strong>stored in mylar jacket</span></td>
                        <td><span class="greyFontSmaller"><strong>sm spl</strong> - Seam Split</span></td>
                        <td><span class="greyFontSmaller">&nbsp;</span></td>
                      </tr>
                      <tr>
                        <td><span class="greyFontSmaller"><strong>m/s </strong>- mono/stereo same song</span> </td>
                        <td><span class="greyFontSmaller"><strong>so(b)c</strong> - sticker on (back) cover</span> </td>
                        <td><span class="greyFontSmaller">&nbsp;</span></td>
                      </tr>
                      <tr>
                        <td align="left" valign="top"><span class="greyFontSmaller"><strong>nap</strong> - not affecting play</span></td>
                        <td><span class="greyFontSmaller"><strong>sol</strong> - slicker on label</span> </td>
                        <td><span class="greyFontSmaller">&nbsp;</span> </td>
                      </tr>
                      <tr>
                        <td><span class="greyFontSmaller"><strong>oins - </strong>orig inserts (lyrics, flyers..)</span> </td>
                        <td><span class="greyFontSmaller">&nbsp;</span> </td>
                        <td><span class="greyFontSmaller">&nbsp;</span> </td>
                      </tr>
                    </tbody>
</table></div>
<div id="divnotes">
<br>
<br>
<br>
<?php
$query = mysql_query(
    "SELECT `id`, 
            `value`,
            `name`
       FROM `commsVinyl`
   ORDER BY `id` ASC"
);

echo "<select name='vinylSelector[]' size='8' multiple id='vinylSelector'>\n";

while ($data = mysql_fetch_array($query, MYSQL_ASSOC))
{
    echo "    <option value='{$data['value']}'>{$data['value']}</option>\n";
}

echo "</select>\n";
?>
<hr>
<?php
$query = mysql_query(
    "SELECT `id`, 
            `value`,
            `name`
       FROM `commsLabel`
   ORDER BY `id` ASC"
);

echo "<select name='labelSelector[]' size='7' multiple id='labelSelector'>\n";

while ($data = mysql_fetch_array($query, MYSQL_ASSOC))
{
    echo "    <option value='{$data['value']}'>{$data['value']}</option>\n";
}

echo "</select>\n";
?>  <hr>

<?php
	$query = mysql_query(
	    "SELECT `id`, 
	            `value`,
	            `name`
	       FROM `commsPromo`
	   ORDER BY `id` ASC"
	);
	
	echo "<select name='promoSelector[]' size='10' multiple scrolling='no' id='promoSelector'>\n";
	
	while ($data = mysql_fetch_array($query, MYSQL_ASSOC))
	{
	    echo "    <option value='{$data['name']}'>{$data['value']}</option>\n";
	}
	
	echo "</select>\n";
?>
    <hr>

<?php
	$query = mysql_query(
	    "SELECT `id`, 
	            `value`,
	            `name`
	       FROM `commsSleeve`
	   ORDER BY `id` ASC"
	);
	
	echo "<select name='sleeveSelector[]' size='4' multiple scrolling='no' id='sleeveSelector'>\n";
	
	while ($data = mysql_fetch_array($query, MYSQL_ASSOC))
	{
	    echo "    <option value='{$data['name']}'>{$data['value']}</option>\n";
	}
	
	echo "</select>\n";
?>
<hr>

<?php
	$query = mysql_query(
	    "SELECT `id`, 
	            `value`,
	            `name`
	       FROM `commsMisc`
	   ORDER BY `id` ASC"
	);
	
	echo "<select name='miscSelector[]' size='6' multiple scrolling='no' id='miscSelector'>\n";
	
	while ($data = mysql_fetch_array($query, MYSQL_ASSOC))
	{
	    echo "    <option value='{$data['name']}'>{$data['value']}</option>\n";
	}
	
	echo "</select>\n";
?>
</div>
</body></html>