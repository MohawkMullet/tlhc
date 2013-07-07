<?php 
include('../parts/config.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta content="text/html; charset=ISO-8859-1"
      http-equiv="Content-Type">
      <link type="text/css" rel="stylesheet" href="../parts/jquery/jquery-ui/css/right/jquery-ui-1.7.1.custom.css">
				<link type="text/css" rel="stylesheet" href="../parts/style.css">
    <title>Contact</title>
  </head>
  <body><div align="center">
<!--Begin outer table -->
 <table border="0" align="center" class="ui-widget ui-widget-content" style="padding:4px;">
<tbody>
<tr>
<td valign="top">
<!--Begin INNER table -->
    <table width="100%"  border="0" align="center" cellpadding="5" cellspacing="5" id="inner" bgcolor="#ffffff">
      <tbody>
        <tr align="center">
          <td  colspan="2" rowspan="1" valign="top" class=".ui-widget-header">
     <div class="ui-state-default ui-widget-header">
                    <p>Contact: 
                    <?php
                        echo $version;
                        print date('F jS, Y');
                        setcookie(fuckyou2, $version, 10000, $home, $copyRight, '1');
                    ?>!</p>
                </div>
          </td>
        </tr>
        <tr>
          <td  colspan="2" rowspan="1" align="center" valign="top" class=".ui-widget-content">Main Developer:&nbsp; Damian
            C. Kelly - Denver, CO USA<br>
          </td>
        </tr>
        <tr>
          <td colspan="2" rowspan="1"  align="center" valign="top"><a
              href="https://twitter.com/damianckelly"
              class="twitter-follow-button" data-show-count="false"
              data-size="large">Follow @damianckelly</a>
            <script type="text/javascript">
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
</script>
          </td>
        </tr>
        <tr>
          <td valign="top">
            <!-- Facebook Badge START -->
            <div align="center"><a
                href="https://www.facebook.com/damianckelly"
                target="_TOP" title="Damian Kelly"><img
                  src="https://badge.facebook.com/badge/577428125.1410.171380925.png"
                  style="border: 0px;"></a><br>
            </div>
          <!-- Facebook Badge END -->
          </td>
         <td valign="middle">
            <p><!-- Place this tag where you want the widget to render. --></p><div align="center">
<div class="g-person" data-width="180" data-href="//plus.google.com/117984535952369497366" data-showtagline="false" data-showcoverphoto="false" data-rel="author"></div>           
         </div> </td>
        </tr>
        <tr>
          <td colspan="2" rowspan="1" valign="top">
            <br>
            </td>
</tr><tr>
         <td colspan="2" rowspan="1" valign="top">
         <div align="center"><a href="http://code.google.com/p/tlhc" target="_blank">Check for Newer Version ofTLhC</a></div>
<div style="text-align: center"><p>You are Using: <span style="display:inline;" align="center">
     TLhC v 
          <?php
echo $version;
?>    </span>
</div></td></tr>
 <td colspan="2" rowspan="1" valign="top"><div align="center">
 <p>Dontate to the Project;</p>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post"
target="_top"><input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="LTSGSFCL8HVJG">
<input type="image" src=
"https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif"
border="0" name="submit" alt=
"PayPal - The safer, easier way to pay online!"> <img alt=""
border="0" src=
"https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1"
height="1"></form></div>
</td>
        </tr>
      </tbody>
    </table>
<!-- END INNER TABLE   -->
 </td>
</tr>
</tbody>
</table>
<!-- END OUTER TABLE   -->
    </div>
    <br>
    <script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
  </body>
</html>
