<html>
<head>
<?php
	include('parts/config.php');
?>
<link rel="shortcut icon" href="images/favicon.ico">
<link href="parts/style.css" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="parts/jq/tooltipster-master/css/tooltipster.css">
<link type="text/css" href="parts/jq/jquery-ui.css" rel="Stylesheet" />
<link href='parts/jq/silk/jquery-silk-icons.css' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="parts/jq/jquery.js"></script>
<script type="text/javascript" src="parts/jq/jquery.maxlength-1.0.2.js"></script>
<script type="text/javascript" src="parts/jq/jquery-ui.js"></script>
<script type="text/javascript" src="parts/jq/tooltipster-master/js/jquery.tooltipster.js"></script>

  <script>
  $(document).ready(function(){
    $("#tabs").tabs();
			deselectable: true
  });
  </script>
  <script type="text/javascript">
  $(document).ready(function(){
    $('#titler').maxlength();
  });
  
</script>
<script type="text/javascript">
	$(function() {
		$("#tabs2").tabs({
			deselectable: true,
			selected: -1			
		});
	});
		
</script>

<script type="text/javascript">
	$(function() {
		$("#tabs3").tabs({
			deselectable: true,
			selected: -1			
		});
	});
</script>

<script language="javascript">
<!--
$(document).ready(function()
{
    $(".defaultText").focus(function(srcc)
    {
        if ($(this).val() == $(this)[0].title)
        {
            $(this).removeClass("defaultTextActive");
            $(this).val("");
        }
    });
    
    $(".defaultText").blur(function()
    {
        if ($(this).val() == "")
        {
            $(this).addClass("defaultTextActive");
            $(this).val($(this)[0].title);
        }
    });
    
    $(".defaultText").blur(); 
	//hover states on the static widgets
	$('#dialog_link, ul#icons li').hover(
	function() { $(this).addClass('ui-state-hover'); }, 
	function() { $(this).removeClass('ui-state-hover'); }
	);       
});
//-->
</script>
<script type="text/javascript">
	$(function(){
		//all hover and click logic for buttons
		$(".fg-button:not(.ui-state-disabled)")
		.hover(
			function(){ 
				$(this).addClass("ui-state-hover"); 
			},
			function(){ 
				$(this).removeClass("ui-state-hover"); 
			}
		)
		.mousedown(function(){
				$(this).parents('.fg-buttonset-single:first').find(".fg-button.ui-state-active").removeClass("ui-state-active");
				if( $(this).is('.ui-state-active.fg-button-toggleable, .fg-buttonset-multi .ui-state-active') ){ $(this).removeClass("ui-state-active"); }
				else { $(this).addClass("ui-state-active"); }	
		})
		.mouseup(function(){
			if(! $(this).is('.fg-button-toggleable, .fg-buttonset-single .fg-button,  .fg-buttonset-multi .fg-button') ){
				$(this).removeClass("ui-state-active");
			}
		});
	});
</script>
<script type="text/javascript">
$(document).ready(function(){
						   
	$(".pane .delete").click(function(){
		$(this).parents(".pane").animate({ opacity: 'hide' }, "slow");
	});

});
</script>
    <script>
        $(document).ready(function() {
            $('.tooltip').tooltipster();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#tTipBG').tooltipster({
                content: $('<span><img src="images/green125.png" /></span>')
            });
            $('#tTipDefaultOld').tooltipster({
                content: $('<span><img src="images/themePreviewDefaultOldThumb.png" /></span>')
            });
            $('#tTipYO').tooltipster({
                content: $('<span><img src="images/yell125.png" /></span>')
            });
        });
    </script>
</head>
<body>
<div id="tabs">
    <ul>        
        <li><a href="#toolsTab" class="fg-button fg-button-icon-right tooltip" title="Main Title Page for TLhC">TLhC&nbsp;&nbsp;<span class="ui-icon silk-icon-computer-key"></span>&nbsp;</a></li>    
        <li><a href="#cardInput" class="fg-button fg-button-icon-right tooltip" title="Input Form for Computer Cards">Cards&nbsp;&nbsp;<span class="ui-icon silk-icon-door-in"></span>&nbsp;</a></li>    
        <li><a href="#soldierInput" class="fg-button fg-button-icon-right tooltip">Toys&nbsp;&nbsp;<span class="ui-icon silk-icon-html-go"></span>&nbsp;</a></li>    
        <li><a href="#trainInput" class="fg-button fg-button-icon-right tooltip">Trains&nbsp;&nbsp;<span class="ui-icon silk-icon-layout-header"></span>&nbsp;</a></li>    
        <li><a href="#45input" class="fg-button fg-button-icon-right">45's&nbsp;&nbsp;<span class="ui-icon silk-icon-lightbulb"></span>&nbsp;</a></li>
        <li><a href="#lastTab" class="fg-button fg-button-icon-right tooltip" title="About this Software?">About&nbsp;&nbsp;<span class="ui-icon silk-icon-world-go"></span>&nbsp;</a></li>
  </ul>
    <div id="soldierInput">
		<?php
//			include('parts/leaveComments.php');
//			include('formSoldier.php');
        ?>
    </div>  
	    <div id="trainInput">
		<?php
           include('formTrain.php'); 
        ?>
    </div>  
	    <div id="cardInput">
		<?php
           include('formCard2.php'); 
        ?>
    </div> 
    <div id="45input">
		<?php
			include('form45.php'); 
        ?>
    </div>
    <div id="toolsTab">
		<?php
			include('parts/toolsTab.php');
		?>
    </div>
    <div id="lastTab">
		<?php 
			include('parts/aboutTLhC.php'); 
		?>
	</div>

</div>
<?php
 echo $copyRight;
 echo "<div align='center'>$gplButton</div>";
?>
</body>
</html>

