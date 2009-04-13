<?php
include('config.php');
?>


<div class="ui-widget-content">
<form id="gaia_loginform" action="https://www.google.com/accounts/ServiceLoginAuth?service=lh2" method="post" onsubmit="return(gaia_onLoginSubmit());">
<div id="gaia_loginbox">
<table class="form-noindent" border="0" cellpadding="5" cellspacing="3" width="100%">
  <tbody><tr>
  <td style="text-align: center;" bgcolor="#e8eefa" valign="top" nowrap="nowrap">
  <input name="ltmpl" value="gp" type="hidden">
  <div class="loginBox">

  <table id="gaia_table" align="center" border="0" cellpadding="1" cellspacing="0">
  <tbody><tr>
<td colspan="2" align="center"><div id="info8" align="center" class="ui-widget-content ui-corner-all">
<div class="ui-state-default ui-widget-header" style="padding: 10px;">
  Sign in to
  Picasa Web Albums
  with your</div></div>
  <table>
  <tbody><tr>
  <td valign="top">
  <img src="https://www.google.com/accounts/google_transparent.gif" alt="Google">

  
  </td>
  <td valign="middle">
  <font size="+0"><b>Account</b></font>
  </td>
  </tr>
</tbody></table>
</td>
</tr>
  <script type="text/javascript"><!--
    function onPreCreateAccount() {
    
      return true;
    
    }

    function onPreLogin() {
    
      
      if (window["onlogin"] != null) {
        return onlogin();
      } else {
        return true;
      }
    
    }
  --></script>

<tr>
  <td colspan="2" align="center">
  </td>
</tr>
<tr>
  <td nowrap="nowrap">
  <div align="right">
  <span class="gaia le lbl">
  Email:
  </span>
  </div>

  </td>
  <td>
  <input name="continue" id="continue" value="http://picasaweb.google.com/lh/login?continue=http%3A%2F%2Fpicasaweb.google.com%2Fhome" type="hidden">
  <input name="service" id="service" value="lh2" type="hidden">
  <input name="ltmpl" id="ltmpl" value="gp" type="hidden">
  <input name="hl" id="hl" value="en_US" type="hidden">
  <input name="ltmpl" id="ltmpl" value="gp" type="hidden">
  <input name="Email" id="Email" size="18" value="
  <?php
  echo $picasaUser;
  ?>" class="ui-widget input" type="text">
  </td>

</tr>
<tr>
  <td></td>
  <td align="left">
  </td>
</tr>
<tr>
  <td align="right">
  <span class="gaia le lbl">
  Password:
  </span>

  </td>
  <td>
  <input name="Passwd" type="password" class="ui-widget input" id="Passwd" value="<?php echo $picasaPass; ?>" size="18">
  </td>
</tr>
<tr>
  <td>
  </td>
  <td align="left">
  </td>

</tr>
  <tr>
  <td align="right" valign="top">
  <input name="PersistentCookie" id="PersistentCookie" value="yes" checked="checked" type="checkbox" class="ui-widget input">
  <input name="rmShown" value="1" type="hidden">
  </td>
  <td>
  <label for="PersistentCookie" class="gaia le rem">
  Remember me </label></td>
</tr>
<tr>
  <td>
  </td>
  <td align="left">
  <input class="ui-widget input" name="signIn" value="Sign in" type="submit">
  </td>
</tr>
<tr id="ga-fprow">
  <td colspan="2" class="gaia le fpwd" align="center" valign="bottom" height="33"></td>
</tr>
  </tbody></table>
  </div>
  </td>
  </tr>
</tbody></table>

</div>
<input name="asts" id="asts" value="" type="hidden">
</form>
<form id="gaia_universallogin" action="https://www.google.com/accounts/ServiceLoginAuth?service=lh2" method="post" onsubmit="return(gaia_onLoginSubmit());">
  <input name="continue" id="continue" value="http://picasaweb.google.com/lh/login?continue=http%3A%2F%2Fpicasaweb.google.com%2Fhome" type="hidden">
  <input name="service" id="service" value="lh2" type="hidden">
  <input name="ltmpl" id="ltmpl" value="gp" type="hidden">
  <input name="hl" id="hl" value="en_US" type="hidden">
  <input name="ltmpl" id="ltmpl" value="gp" type="hidden">
  <input name="ltmpl" id="ltmpl" value="gp" type="hidden">
</form>

</div>
