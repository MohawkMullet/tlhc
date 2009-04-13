<fieldset class="insideFields">
<legend>SideBar, URL, & Link Descript:&nbsp;
<?php
echo $loadRight;
?>
</legend>    
<?php
if ( $tabName == "soldierTab") {
echo "<textarea name=\"sideBar3\" class=\"ui-widget textarea defaultText\" cols=\"41\" rows=\"4\" wrap=\"physical\" id=\"sideBar3\" tabindex=\"15\" title=\"Paste extra info here and provide link below\"></textarea>";
} else {
echo "<textarea name=\"sideBar2\" class=\"ui-widget textarea defaultText\" cols=\"41\" rows=\"2\" wrap=\"physical\" id=\"sideBar2\" tabindex=\"15\" title=\"Paste extra info here and provide link below\"></textarea>";
}
?>
<input name="link" type="text" id="link" accesskey="i" tabindex="16" value="" size="18" class="ui-widget input defaultText" title="http:// address here" />
<input name="linkText" type="text" id="linkText" accesskey="l" tabindex="17" value="" size="32" class="ui-widget input defaultText" title="Description of Link Here" /></fieldset>
