<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>TurboLister HTML Cheater Manual</title>
<link rel="stylesheet" href="images/emx_nav_left.css" type="text/css">
<script type="text/javascript">
<!--
var time = 3000;
var numofitems = 7;

//menu constructor
function menu(allitems,thisitem,startstate){ 
  callname= "gl"+thisitem;
  divname="subglobal"+thisitem;  
  this.numberofmenuitems = 7;
  this.caller = document.getElementById(callname);
  this.thediv = document.getElementById(divname);
  this.thediv.style.visibility = startstate;
}

//menu methods
function ehandler(event,theobj){
  for (var i=1; i<= theobj.numberofmenuitems; i++){
    var shutdiv =eval( "menuitem"+i+".thediv");
    shutdiv.style.visibility="hidden";
  }
  theobj.thediv.style.visibility="visible";
}
				
function closesubnav(event){
  if ((event.clientY <48)||(event.clientY > 107)){
    for (var i=1; i<= numofitems; i++){
      var shutdiv =eval('menuitem'+i+'.thediv');
      shutdiv.style.visibility='hidden';
    }
  }
}
// -->
</script>
</head>
<body onmousemove="closesubnav(event);"> 
<div class="skipLinks">skip to: <a href="#content">page content</a> | <a href="pageNav">links on this page</a> | <a href="#globalNav">site navigation</a> | <a href="#siteInfo">footer (site information)</a> </div>
<div id="masthead"> 
  <h1 id="siteName">TurboLister &lt;html&gt; Cheater v </h1> 
  <div id="utility"> 
    <a href="#">Utility Link</a> | <a href="#">Utility Link</a> | <a href="#">Utility
    Link</a> 
  </div> 
  <div id="globalNav"> 
    <img alt="" src="images/gblnav_left.gif" height="32" width="4" id="gnl"> <img alt="" src="images/glbnav_right.gif" height="32" width="4" id="gnr"> 
    <div id="globalLink"> 
      <a href="#" id="gl1" class="glink" onmouseover="ehandler(event,menuitem1);">global 
	  link</a><a href="#" id="gl2" class="glink" onmouseover="ehandler(event,menuitem2);">global
      link</a><a href="#" id="gl3" class="glink" onmouseover="ehandler(event,menuitem3);">global
      link</a><a href="#" id="gl4" class="glink" onmouseover="ehandler(event,menuitem4);">global
      link</a><a href="#" id="gl5" class="glink" onmouseover="ehandler(event,menuitem5);">global
      link</a><a href="#" id="gl6" class="glink" onmouseover="ehandler(event,menuitem6);">global
      link</a><a href="#" id="gl7" class="glink" onmouseover="ehandler(event,menuitem7);">global
      link</a> 
    </div> 
    <!--end globalLinks--> 
    <form id="search" action=""> 
      <input name="searchFor" type="text" size="10"> 
      <a href="">search</a> 
    </form> 
  </div> 
  <!-- end globalNav --> 
  <div id="subglobal1" class="subglobalNav"> 
    <a href="#">subglobal1 link</a> | <a href="#">subglobal1 link</a> | <a href="#">subglobal1
    link</a> | <a href="#">subglobal1 link</a> | <a href="#">subglobal1 link</a> | <a href="#">subglobal1
    link</a> | <a href="#">subglobal1 link</a> 
  </div> 
  <div id="subglobal2" class="subglobalNav"> 
    <a href="#">subglobal2 link</a> | <a href="#">subglobal2 link</a> | <a href="#">subglobal2
    link</a> | <a href="#">subglobal2 link</a> | <a href="#">subglobal2 link</a> | <a href="#">subglobal2
    link</a> | <a href="#">subglobal2 link</a> 
  </div> 
  <div id="subglobal3" class="subglobalNav"> 
    <a href="#">subglobal3 link</a> | <a href="#">subglobal3 link</a> | <a href="#">subglobal3
    link</a> | <a href="#">subglobal3 link</a> | <a href="#">subglobal3 link</a> | <a href="#">subglobal3
    link</a> | <a href="#">subglobal3 link</a> 
  </div> 
  <div id="subglobal4" class="subglobalNav"> 
    <a href="#">subglobal4 link</a> | <a href="#">subglobal4 link</a> | <a href="#">subglobal4
    link</a> | <a href="#">subglobal4 link</a> | <a href="#">subglobal4 link</a> | <a href="#">subglobal4
    link</a> | <a href="#">subglobal4 link</a> 
  </div> 
  <div id="subglobal5" class="subglobalNav"> 
    <a href="#">subglobal5 link</a> | <a href="#">subglobal5 link</a> | <a href="#">subglobal5
    link</a> | <a href="#">subglobal5 link</a> | <a href="#">subglobal5 link</a> | <a href="#">subglobal5
    link</a> | <a href="#">subglobal5 link</a> 
  </div> 
  <div id="subglobal6" class="subglobalNav"> 
    <a href="#">subglobal6 link</a> | <a href="#">subglobal6 link</a> | <a href="#">subglobal6
    link</a> | <a href="#">subglobal6 link</a> | <a href="#">subglobal6 link</a> | <a href="#">subglobal6
    link</a> | <a href="#">subglobal6 link</a> 
  </div> 
  <div id="subglobal7" class="subglobalNav"> 
    <a href="#">subglobal7 link</a> | <a href="#">subglobal7 link</a> | <a href="#">subglobal7
    link</a> | <a href="#">subglobal7 link</a> | <a href="#">subglobal7 link</a> | <a href="#">subglobal7
    link</a> | <a href="#">subglobal7 link</a> 
  </div> 
  <div id="subglobal8" class="subglobalNav"> 
    <a href="#">subglobal8 link</a> | <a href="#">subglobal8 link</a> | <a href="#">subglobal8
    link</a> | <a href="#">subglobal8 link</a> | <a href="#">subglobal8 link</a> | <a href="#">subglobal8
    link</a> | <a href="#">subglobal8 link</a> 
  </div> 
</div> 
<!-- end masthead --> 
<div id="pagecell1"> 
  <!--pagecell1--> 
  <img alt="" src="images/tl_curve_white.gif" height="6" width="6" id="tl"> <img alt="" src="images/tr_curve_white.gif" height="6" width="6" id="tr"> 
  <div id="breadCrumb"> 
    <a href="#">Breadcrumb</a> / <a href="#">Breadcrumb</a> / <a href="#">Breadcrumb</a> /
  </div> 
  <div id="pageName"> 
    <h2>TLhC version 1.7.9 -- Documentation </h2> 
    <img alt="small logo" src="" height="59" width="66"/> 
  </div> 
  <div id="pageNav"> 
    <div id="sectionLinks"> 
      <a href="#">Getting Updates </a> <a href="#">Section Link</a> <a href="#">Section
      Link</a> <a href="#">Section Link</a> <a href="#">Section Link</a> <a href="#">Section
      Link</a> 
    </div> 
    <div class="relatedLinks"> 
      <h3>The Input Forms </h3> 
      <a href="#DANGER">DANGER</a> <a href="#">Related Link</a> <a href="#">Related
      Link</a> <a href="#">Related Link</a> <a href="#">Related Link</a> <a href="#">Related
      Link</a> 
    </div> 
    <div class="relatedLinks"> 
      <h3>Related Link Category</h3> 
      <a href="#">Related Link</a> <a href="#">Related Link</a> <a href="#">Related
      Link</a> <a href="#">Related Link</a> <a href="#">Related Link</a> <a href="#">Related
      Link</a> 
    </div> 
    <div id="advert"> 
      <img src="images/1.png" alt="" width="120" height="171" /> Advertisement copy goes here.
      Advertisement copy goes here.
    </div> 
  </div> 
  <div id="content"> 
    <div class="feature"> 
      <img src="images/2.png" alt="" width="201" height="286"> 
      <h3>TLhC? Whats it for? </h3> 
      <p>
       TLhC is designed for ebay sellers who list lots of similar items and want all their listings to look professional and the same. TLhC allows a seller to use a simple web form to input their item specifics quickly and easily. It then generates a preview along with the html code to be pasted into TurboLister. Anyone who's spent much time working with TL knows that editing your listings via it's internal Description Builder leaves room for sloppy html code and uneven results.  I've tried to put together most of the basic scripts I use in a generic package that can be customized. Knowledge of HTML is probably needed. PHP knowledge is probably not critical. I've setup some pretty complex forms with plenty of output variables that have plenty of options. You can find us on ebay at http://hepvinyl.com . We sell 45's. </p>
    </div> 
    <div class="story"> 
      <h2>Now lets get the License Out Of The Way </h2> 
      <p>
       Turbo Lister HTML Cheater versions 0 -&gt; 1.7.2 is Copyright&copy; 2008 Damian C. Kelly.  mohawk digital @ gmail.com</p> 
      <p> This program is free software: you can redistribute it and/or modify<br>
  it under the terms of the GNU General Public License as published by<br>
  the Free Software Foundation, version 3 of the License, or any later version.</p>
      <p> This program is distributed in the hope that it will be useful,<br>
  but WITHOUT ANY WARRANTY; without even the implied warranty of<br>
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the<br>
  GNU General Public License for more details.</p>
      <p> You should have received a copy of the GNU General Public License<br>
  along with this program. If not, see &lt;http://www.gnu.org/licenses/&gt;.</p>
    </div> 
    <div class="story"> 
      <table width="100%" cellpadding="0" cellspacing="0" summary=""> 
        <tr valign="top"> 
          <td class="storyLeft"> <p> 
            <a href="#DANGER" class="capsule">NO WARRANTY</a> DO NOT USE THIS PROGRAM ON AN INTERNET FACING WEB SERVER.  This program was designed and built to be run on a webserver that does not face the outside world.  This software is not safe and should be considered dangerous.  Absolutely DO NOT place these scripts on a production machine.  Run this on your local box, but do not expose this outside of your lan.<br>
          </p></td> 
          <td> <p> 
            <a href="#" class="capsule">TurboLister Alternatives? </a> Check out jAOLT. It's pretty new and buggy and the developer pages seem to have most discussion in German, but it does work for the most basic listings and it does take straight html pastes without modifying the code on upload. Search code.google.com for jAOLT. </p>
          </td> 
        </tr> 
        <tr valign="top"> 
          <td class="storyLeft"><?php
		  include('formImage.php');
		  ?></td> 
          <td><?php
		  include('showRss.php');
		  ?></td> 
        </tr> 
        <tr valign="top"> 
          <td class="storyLeft"> <?php
		  include('templateDesign.php');
		  ?></td> 
          <td> <p>&nbsp; 
            </p></td> 
        </tr> 
      </table> 
    </div> 
  </div> 
   <div id="siteInfo"> 
    <img src="" width="44" height="22"> <a href="#">About Us</a> | <a href="#">Site
    Map</a> | <a href="#">Privacy Policy</a> | <a href="#">Contact Us</a> | &copy;2003
    Company Name
  </div> 
</div> 
<!--end pagecell1--> 
<br> 
<script type="text/javascript">
    <!--
      var menuitem1 = new menu(7,1,"hidden");
			var menuitem2 = new menu(7,2,"hidden");
			var menuitem3 = new menu(7,3,"hidden");
			var menuitem4 = new menu(7,4,"hidden");
			var menuitem5 = new menu(7,5,"hidden");
			var menuitem6 = new menu(7,6,"hidden");
			var menuitem7 = new menu(7,7,"hidden");
    // -->
    </script> 
</body>
</html>
