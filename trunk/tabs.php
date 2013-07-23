<html>
<head>
<?php
	include('parts/config.php');
?>
<link rel="shortcut icon" href="https://docs.google.com/file/d/0B75zYbbqQ4W4ZzNyR2dnZ1Ffb3c/edit?usp=sharing">
<link href="parts/style.css" rel="stylesheet" type="text/css" />

<link type="text/css" rel="stylesheet" href="parts/jquery/jquery-ui/css/theme/jquery-ui-1.7.1.custom.css" />
<script type="text/javascript" src="parts/jquery/jquery-1.3.2.js"></script>
<script type="text/javascript" src="parts/jquery/jquery.maxlength-1.0.2.js"></script>
<script type="text/javascript" src="parts/jquery/jquery-ui-1.7.1.js"></script>
<script type="text/javascript" src="parts/jquery/jquery-tooltipify.js"></script>
<link rel="stylesheet" href="parts/jquery/tooltipify.css"></link>
<!-- THESE ARE THE LATEST JQUERY FILES -->
<!-- 	<script src="docs/jquery-ui-1.10.3.custom/js/jquery-1.9.1.js"></script> -->
<!-- 	<script src="docs/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.js"></script> -->
<!-- 	<link href="docs/jquery-ui-1.10.3.custom/css/july12/jquery-ui-1.10.3.custom.css" rel="stylesheet"> -->

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
		$("#tabs2").tabs({
			deselectable: true,
			selected: -1			
		});
	});
		
</script>
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
			$(function(){



				// Dialog			
				$('#dialog').dialog({
					autoOpen: false,
					width: 300,
					show: "slide",
					buttons: {
						"Done": function() { 
							$(this).dialog("close"); 
						}, 
						"Close": function() { 
							$(this).dialog("close"); 
						} 
					}
				});
				
				// Dialog Link
				$('#dialog_link').click(function(){
					$('#dialog').dialog('open');
					return false;
				});


				//hover states on the static widgets
				$('#dialog_link, ul#icons li').hover(
					function() { $(this).addClass('ui-state-hover'); }, 
					function() { $(this).removeClass('ui-state-hover'); }
				);
				
			});
		</script>


</head>
<body>
<div id="tabs">
    <ul>        
        <li><a href="#toolsTab" class="fg-button fg-button-icon-right">TLhC&nbsp;&nbsp;<span class="ui-icon ui-icon-wrench"></span></a></li>    
        <li><a href="#soldierInput" class="fg-button fg-button-icon-right">Tester&nbsp;&nbsp;<span class="ui-icon ui-icon-person"></span></a></li>    

        <li><a href="#45input" class="fg-button fg-button-icon-right">45 Form&nbsp;&nbsp;<span class="ui-icon ui-icon-volume-on"></span></a>&nbsp;</li>
        <li><a href="#lastTab" class="fg-button fg-button-icon-right">About&nbsp;&nbsp;<span class="ui-icon ui-icon-help"></span></a></li>
  </ul>
    <div id="soldierInput">
		<?php
            include('soldierForm.php'); 
        ?>
    </div>  

    <div id="45input">
		<?php
            include('45form.php'); 
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
                <p><img src="images/TLhClogo70x100.png" width="70" height="100"></p>
                <p><img src="images/t4/wfFont1-E164nh.png" width="93" height="64"></p>
<span class="fg-toolbar ui-corner-all">
<?php
echo $loadRight;
echo $searchButton;
echo $picButton;
echo $helpButton;
echo $abbrevsButton;
echo $addCommsButton;
echo $search2;
echo $contactButton2;
echo $photoButton;
echo $picasaViewerButton; 
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
<?php
 echo $copyRight;
 echo "<div align='center'>$gplButton</div>";
?>

</body>
</html>

