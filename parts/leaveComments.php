 <?php include('parts/config.php'); ?>
 <script>
  $(document).ready(function(){
		$( "input" ).addClass( "ui-content-active ui-corner-all" );
  });
</script>
<script>
  $(document).ready(function(){
		$( "legend" ).addClass( "ui-content-actuve ui-corner-all" );
		$( "button" ).addClass( "ui-content-highlight ui-corner-all buttonBack" );
  });
</script>

<style type="text/css">
		.style1 {color: #999999}

</style>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form name="form1" method="post" action="">
  <table width="623" border="0" cellpadding="4" cellspacing="2" class="ui-widget ui-corner-all">
    <tr valign="top"> 
      <td colspan="2" bgcolor="#CCCCCC" class="ui-state-active ui-corner-all"> <button><span class="ui-icon silk-icon-briefcase" style="display:block; float:left; clear:left; padding-left:4px; margin:3px; "></span>Title</button></td>
    </tr>
    <tr valign="top"> 
      <td colspan="2"><?php echo $fieldsetIcon; ?><?php echo $fieldsetIcon; ?><?php echo $fieldsetIcon; ?>  </td>
    </tr>
    <tr valign="top"> 
      <td width="297">
	  	<fieldset><legend><?php echo $fieldsetIcon; ?>Name:</legend>
          <input type="text" name="textfield1" size="32" class="ui-widget-input ui-corner-all">
        </fieldset>
        <fieldset><legend><?php echo $fieldsetIcon; ?>Email:</legend>
          <input type="text" name="textfield2" size="32" class="ui-widget-input ui-corner-all">
        </fieldset>
        <fieldset><legend><?php echo $fieldsetIcon; ?>User Name:</legend>
          <input type="text" name="textfield3" size="32" class="ui-widget-input ui-corner-all">
        </fieldset>
        <fieldset><legend><?php echo $fieldsetIcon; ?>Question or Comment:</legend>
          <textarea name="textfield4" rows="10" cols="28" class="ui-widget-input ui-corner-all"></textarea>
          </legend>
        </fieldset></td>
      <td width="304">        <fieldset><legend><?php echo $fieldsetIcon; ?>Browser:</legend>
          <select name="select" class="ui-widget-input ui-corner-all">
            <option selected>- Choose One -</option>
          </select>
        </fieldset>        <fieldset><legend><?php echo $fieldsetIcon; ?>Operating System:</legend>
          <select name="select2" class="ui-widget-input ui-corner-all">
            <option selected>- Choose One -</option>
          </select>
        </fieldset>        <fieldset><legend><?php echo $fieldsetIcon; ?>Cookies:</legend>
          <select name="select3" class="ui-widget-input ui-corner-all">
            <option selected>- Choose One -</option>
          </select>
        </fieldset>        <fieldset><legend><?php echo $fieldsetIcon; ?>Connection:</legend>
          <select name="select4" class="ui-widget-input ui-corner-all">
            <option selected>- Choose One -</option>
          </select>
        </fieldset> </td>
    </tr>
    <tr valign="top"> 
      <td colspan="2">     <?php 
	  echo $dialogAddButton;
	  include('partsIn/submit.php'); ?>   

 </td>
    </tr>
  </table>
</form>

