<?php
# Author: Peter De Decker
# Help & documentation: http://www.ipbwiki.com/Media_Wiki:Add_a_wikipedia_search_box_to_your_main_website_or_blog

###############################################################
# Parametrisation, customize this!                            #
###############################################################

# set this to the same value as $wgArticlePath in your LocalSettings.php, make sure to have a trailing /
# examples:
# $path = 'http://www.ipbwiki.com/'; // search on ipbwiki, index.php is eliminated from the url here;
 $path = 'http://en.wikipedia.org/wiki/';              // search on english wikipedia
# $path = 'http://localhost/mediawiki-1.8/index.php/';  // default article naming...
//$path = 'http://www.ipbwiki.com/';

###############################################################
# Actual code, wooo :)                                        #
###############################################################

$redirect_url = $path . 'Special:Search?search=' . $_GET['search'] . '&go=Go';
@header( "Location: ".$redirect_url );

?>