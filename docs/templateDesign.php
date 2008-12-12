<h1>Setting up a template</h1>
<h2>We are going to create 2 main files to start. We'll need to create a stylesheet for our css and a preview file that displays our listing.</h2>
<p>There are two example files included for you to use as guides. Jump in to the directory partsOut and take a look at OutPutPreview.example.php and styles.example.php. If you'd like to use these files just rename them by removing a period and the word example. Otherwise lets create a new listing mockup and a new stylesheet. Start by opening up your favorite wisiwig html editor. If you don't have dreamweaver you can use TurboListers description editor to design your template. Draw your basic listing giving thought on how you want the layout to appear. Set aside table columns and rows for your listings typical description content blocks. </p>
<p>create your listings default style sheet. Now take the css code from the stylesheet and create a file partsOut/styles.php. Paste your css into this file. styles.php will be included inside your listing so your custom styles will be applied.</p>
<p>Next take your code for your template and paste it into a file called partsOut/OutPutPreview.php</p>
<p>at the very top of your OutPutPreview.php include this code: &lt;?php include('styles.php'); ?&gt;</p>
<p>This will insert your new style sheet you created. </p>

<img src="images/exampleTemplate2.jpeg" width="470" height="464" border="0" alt="">