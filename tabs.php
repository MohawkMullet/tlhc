<html>
<head>
<?php
	include('parts/config.php');
?>
<link rel="shortcut icon" href="images/favicon.ico">
<link href="parts/style.css" rel="stylesheet" type="text/css" />

<link type="text/css" rel="stylesheet" href="parts/jquery/jquery-ui/css/theme/jquery-ui-1.7.1.custom.css" />
<script type="text/javascript" src="parts/jquery/jquery-1.3.2.js"></script>
<script type="text/javascript" src="parts/jquery/jquery.maxlength-1.0.2.js"></script>
<script type="text/javascript" src="parts/jquery/jquery-ui-1.7.1.js"></script>
<script type="text/javascript" src="parts/jquery/jquery.form.js"></script>
<script language="JavaScript" type="text/javascript" src="parts/jquery/jqDnR.js"></script>
<script language="javascript" type="text/javascript" src="parts/jquery/jqDialogForms.js"></script>
<script language="JavaScript" type="text/javascript" src="parts/jquery/jquery.hijack.js"></script>
<script language="JavaScript" type="text/javascript" src="parts/jquery/jqalert.js"></script>
<script type="text/javascript" src="parts/jquery/jtip.js"></script>


  <script>
  $(document).ready(function(){
    $("#tabs").tabs();
  });
  </script>
  <script type="text/javascript">
  $(document).ready(function(){
    $('#titler').maxlength();
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
<script type="text/javascript">
$(function() {

    // with hijack()
    $("#tabsJax").tabs({ // start jQuery UI tabs
		deselectable: true,
//		selected: -1,		
		selected: null,
		unselect: true,
		collapsible: true,
// 		fx: { opacity: 'toggle' } 
        load: function(event, ui) { // load callback, hijacking every loaded panel
            $(ui.panel).hijack();	
		}
    });
    // without hijack()
    $("#tabs2").tabs({
		deselectable: true,
		selected: -1			
		}
	); // standard jQuery UI tabs
	
    $(".opendialog").click(function() {
	var $tabs = $('#tabsJax').tabs(); // first tab selected 
		    $tabs.tabs('select', -1); // switch to third tab
				$(this).parents(".tabs").animate({ opacity: 'hide' }, "slow");
//  			return false;

//	});
	 // when clicking on a button
        $("#dialog").load($(this).attr('rel'), function() { // load remote content from its 'rel' attribute into hidden div
            $(this)
              .dialog('destroy') // destroy dialog widget (if exists)
//			  .tabs('destroy')
              .dialog({ // and recreate it with following options
			    buttons: { "Close": function() { $(this).dialog("close"); } },
				minHeight: 235,
			  	modal: "true",
				width: 380,
                title: "Add A New Phrase",
                open: function() { $(this).hijack()}
              });
        });
        $("#dialogoo").load($(this).attr('rel'), function() { // load remote content from its 'rel' attribute into hidden div
            $(this)
              .dialog('destroy') // destroy dialog widget (if exists)
//			  .tabs('destroy')
              .dialog({ // and recreate it with following options
			    buttons: { "Close": function() { $(this).dialog("close"); } },
				minHeight: 235,
			  	modal: "true",
				width: 380,
                title: "Add A New Phrase",
                open: function() { $(this).hijack()}
              });
        });		
    });
    $(".opendialognohijack").click(function() {
        $("#dialog").load($(this).attr('rel'), function() {
            $(this)
                    .dialog('destroy')
                    .dialog({ // same, but without hijacking on open
                title: "Add Stored Comments"
                });
        });
    });

});
</script>
</head>
<body>
<div id="tabs">
    <ul>        
        <li><a href="#45input" class="fg-button fg-button-icon-right">45 Form&nbsp;&nbsp;<span class="ui-icon ui-icon-volume-on"></span></a>&nbsp;</li>
        <li><a href="#soldierInput" class="fg-button fg-button-icon-right">Soldiers&nbsp;&nbsp;<span class="ui-icon ui-icon-person"></span></a></li>    
        <li><a href="#toolsTab" class="fg-button fg-button-icon-right">Tools&nbsp;&nbsp;<span class="ui-icon ui-icon-wrench"></span></a></li>           
        <li><a href="#lastTab" class="fg-button fg-button-icon-right">Help&nbsp;&nbsp;<span class="ui-icon ui-icon-help"></span></a></li>
        <li><a href="#goRight" class="fg-button fg-button-icon-right ui-state-disabled">--->&nbsp;&nbsp;<span class="ui-icon ui-icon-help"></span></a></li>
        
  </ul>
    <div id="soldierInput">
		<?php
            include('soldierForm.php'); 
        ?>
        <?php
 echo $copyRight;
 echo "<div align='center'>$gplButton</div>";
?>
    </div>  

    <div id="45input">
		<?php
            include('45form.php'); 
        ?>
        <?php
 echo $copyRight;
 echo "<div align='center'>$gplButton $flagButton</div>";
?>
    </div>
    <div id="toolsTab">
            <div id="infobox" align="center" class="ui-widget-content ui-corner-all" style="width: 100%; float: left; clear: right;">
                <div class="ui-state-default ui-widget-header">
                    <p>Welcome to TLhC version 
                    <?php
                        echo $version;
                    ?>!</p>
                </div>
                <p><img src="../images/TLhClogo70x100.png" width="70" height="100"></p>
                <p><img src="images/t4/wfFont1-E164nh.png" width="93" height="64"></p>
<span class="fg-toolbar">
<?php
echo $loadRight;
echo $searchButton;
echo $picButton;
echo $helpButton;
echo $abbrevsButton;
echo $previewButton;
echo $addCommsButton;
echo $addCommsButton2;
echo $search2;
?>
</span>

            </div>
    </div>
    <div id="lastTab">
		<?php 
			include('parts/aboutTLhC.php'); 
		?>
	</div>

</div>
</body>
</html>

