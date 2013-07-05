<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>test form named test2.php</title>
</head>

<body>
<form name="form1" method="post" action="artistsOut.php">
<fieldset class="insideFields"><legend>Artist & Title:</legend><div class="stuff" id="titles">
<input type="text" name="performer" size="12" class="someinputs" id="performer"  tabindex="1" onfocus="if(this.value=='Artist')this.value='';" value="Artist" title="Band, Singer or Artist Name ONLY">
<input name="titler" type="text" class="someinputs" id="titler" accesskey="h" tabindex="2" onfocus="if(this.value=='Title')this.value='';" value="Title" size="26" maxlength="55" title="THE TITLE OF THE EBAY LISTING" /></div></fieldset>
  <fieldset class="insideFields"><legend>Sides A & B:</legend><div class="stuff">
<input name="sideA" class="someinputs" type="text" id="sideA" accesskey="a" tabindex="3" size="49" title="Side A song here" />
</div>
<div class="stuff">
<input name="sideB" class="someinputs" type="text" id="sideB" accesskey="b" tabindex="4" size="49" title="Flip side song here" />
</div></fieldset>
<fieldset class="insideFields"><legend>Label, Number, & Sleeve:</legend>
<input name="Label" type="text" class="someinputs" id="Label" accesskey="l" tabindex="5" size="20" title="Record Label goes here" />
&nbsp;<input name="recNum" type="text" class="someinputs" id="recNum" accesskey="h" tabindex="6" onfocus="if(this.value=='No.')this.value='';" value="No." size="6" title="Record Number here" />
<Label title="Does this 45 still have the Original Record Company Paper Sleeve?  If yes check this box.  this is not for picture sleeves."><input name="origSleeve" type="checkbox" value="origSleeve"  tabindex="7">Orig Sleeve?</label>
</fieldset>
<select name="grade" id="grade">
  <option value="">Choose Grade</option>
  <option value="M-">M-</option>
  <option value="Ex">Ex</option>
  <option value="VG+">VG+</option>
  <option value="VG">VG</option>
</select>
<input name="notes" type="text" class="someinputs" id="notes" accesskey="n" tabindex="14" size="14" maxlength="90" style="padding-right:0px; margin-right:5px; padding-bottom:3px; margin-bottom:3px;" /></label></fieldset>
  <label> 
  <fieldset class="insideFields"><legend>SideBar, URL, & Link Descript:</legend>    
<textarea name="sideBar2" class="someinputs" cols="41" rows="2" wrap="physical" id="sideBar2" accesskey="s" tabindex="15"></textarea>
<input name="link" type="text" id="link" accesskey="i" tabindex="16" value="" size="16" class="someinputs" title="the http:// stuff goes in this one" />
<input name="linkText" type="text" id="linkText" accesskey="l" tabindex="17" value="" size="24" class="someinputs" title="put your link description in here" /></fieldset>
   <br>
  put artists in here
  <input type="text" name="artists" id="artists">
  <br>
  <input type="submit" name="submit" id="submit" value="Submit">
  </label>
</form>
</body>
</html>
