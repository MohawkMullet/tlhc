<head>
<link rel="shortcut icon" href="images/favicon.ico">
<link href="lowerCss.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#researchLinks {
	position:absolute;
	left:5px;
	top:40px;
	width:300px;
	height:183px;
	z-index:1;
	overflow: hidden;
	visibility: hidden;
}
#searchers {
	position:absolute;
	left:5px;
	top:60px;
	visibility: visible;
	overflow: visible;
	height: 80px;
}
body {
	background-color: #9e9e9e;
}
</style>
<script language="JavaScript" type="text/JavaScript">
<!--


function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_showHideLayers() { //v6.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) if ((obj=MM_findObj(args[i]))!=null) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}
//-->
</script>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252"></head>
<title>This is just a blank page to fill with whatever.</title>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
		<div id="Layer1" style="position:absolute; left:76px; top:3px; width:482px; height:51px; z-index:2; visibility: visible;" onClick="MM_showHideLayers('researchLinks','','show')">
		  <form name="forSearch">
				<a href="javascript:selectAll('forSearch.select2')">Phrase To Research:</a><br>
						<input name="select2" type="text" onBlur="MM_showHideLayers('researchLinks','','show')" value="" size="45">
</form></div>
		<script language="Javascript">
						function selectAll(theField) {
						var tempval=eval("document."+theField)
						tempval.focus()
						tempval.select()
						}
		</script>
				
<div id="researchLinks">
<table cellpadding="2" cellspacing="2" bgcolor="#d9d9d9" style="padding-left:5px; padding-top:1px; font-variant:small-caps;">
<tr><td><div align="center"><img src="../images/EBAYfavicon.ico" width="16" height="16" alt="" /></div></td>
	<td width="242" class="OffLinks"><a href="http://ebay.com" target="_new">Go On And Search Ebay</a></td>
</tr>
<tr><td><div align="center"><img src="../images/MusicStackfavicon.ico" width="16" height="16" alt="" /></div></td>
	<td class="OffLinks"><a href="http://www.musicstack.com" target="_new">Music Stack</a></td>
</tr>
<tr>
<td><div align="center"></div></td>
	<td class="OffLinks"><a href="http://www.recordsbymail.com" target="_new">Records By Mail</a></td>
</tr>
<tr>
<td><div align="center"><img src="../images/16x16.png" width="16" height="16" alt="" /></div></td>
<td class="OffLinks"><a href="http://www.hepvinyl.com" target="_new">HepVinyl.com</a></td>
</tr>

<tr>
<td><div align="center"><img src="../images/WikIfavicon.ico" width="16" height="16" alt="" /></div></td>
<td class="OffLinks"><a href="http://wikipedia.com" target="_blank">Check Wikipedia</a></td></tr>
<tr><td><div align="center"><img src="../images/picasaIcon.ico" width="16" height="16" alt="" /></div></td><td class="OffLinks"><a href="http://picasaweb.google.com" target="_blank">Load Picasa</a></td></tr>
</table>

</div>
<div id="searchers" style="top:50px; ">
<?php
include('searchForms.php');
?>
</div>
</body>
