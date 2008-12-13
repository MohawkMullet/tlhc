<style type="text/css">
<!--
.style3 {color: #CC0000}
-->
</style>

<h1>INSTALLATION
</h1>
<p>Some basic knowledge of HTML and maybe a good WYSIWYG html editor like Dreamweaver</p>
<p>Requirements: Apache2, MySQL, PHP5. (and of course you should run these on linux) </p>
<h3 class="style3">DO NOT INSTALL THESE FILES ON A PRODUCTION WEBSERVER.</h3>
<p>These scripts are meant to be run on a private webserver. </p>
<ol>
  <li>copy all the files in the main directory to a new directory in your public_html folder.</li>
  <li>edit the tlhc_config.php file with some basic information </li>
  <li>create a mysql database called tlhc</li>
  <li>create a mysql user named tlhcuser with the password of tlhcpass and full permissions on the new database you created above.</li>
  <li>run the included .sql file found in the INSTALL folder.</li>
  <li>fire up your web browser and point it to your new folder. </li>
</ol>
