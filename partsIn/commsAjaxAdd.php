<?php
include('../parts/config.php');
$tabAdd = $_GET['tabAdd'];
echo "<div style='margin:5px 0 0 0; padding:0px;'>";
echo "<form method='POST' action='../../../partsOut/formOuts/commsAjaxOut.php?tabAdd=$tabAdd' name='comAdd' id='comAdd'>$highBeg";
echo "<label>Add A $tabAdd Comment</label><br><br><a href='docs/tooltips/terms.php?width=350' class='jTip' id='four5' name=\"Stored Comment Tabs\"><span class=\"ui-icon ui-icon-flag\" style=\"float:right; margin-top:2px;\"></span></a>";
echo "<input type='hidden' id='$tabAdd' name='$tabAdd' value='$tabAdd'><input type='text' name='comValue' onfocus=\"if(this.value=='Enter A New Comment')this.value='';\" value=\"Enter A New Comment\" size='32' class='float:left; clear:both;'><br>";
echo "<input type='submit' value='Add to $tabAdd' style='margin:5px 0 5px 0;'>&nbsp;<input name='clearme' type='reset' id='clearme' tabindex='15' value='Clear'  style='margin:5px 0 5px 0;'/>";
echo "$highEnd</form>";
echo "<h4><a href=\"../partsIn/demo/showDBcomms.php?tabAdd=$tabAdd\" style='text-decoration:none;' title='Back to $tabAdd Form'><span class='ui-icon ui-icon-arrowreturnthick-1-e' style='float:left; clear:none; display:inline;' title='Back to $tabAdd Form'></span>Return to the $tabAdd Comments</a></h4>";
echo "</div>";
echo "<div class='float:right;'>$flagButton;</div>";
?>
<a href='../docs/tooltips/terms.php?width=350' class='jTip' id='four5' name=\"Stored Comment Tabs\"><span class=\"ui-icon ui-icon-flag\" style=\"float:right; margin-top:2px;\"></span></a>
