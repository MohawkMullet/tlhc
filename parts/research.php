<div class="ui-widget ui-widget-content ui-corner-all" style="position:relative;">
<div id="tabs" class="ui-widget ui-widget-header ui-corner-all ui-state-default" style="padding:10px; margin:10px; vertical-align:middle;">Search 45 Prices<a href="javascript:animatedcollapse.toggle('search2')" class="fg-button fg-button-icon-solo delete" title="Close this section" style="float:right; clear:none; display:inline;"><span class="ui-icon ui-icon-close"></span>&nbsp;</a></div>
<table width="100%" border="0" cellpadding="2" cellspacing="2" class="ui-corner-all" id="searchers" style="background:#ffffff">
  <tr>
    <td width="33" align="right" valign="top"><span style="margin-bottom: 0pt;"><img src="../images/MusicStackfavicon.ico" title="Search MusicStack"></span></td>
    <td>&nbsp;</td>
    <td><form name="search" action="http://www.musicstack.com/show.cgi" method="post" target="_blank" id="searchForm" autocomplete="off" style="margin-bottom: 0pt;" onSubmit="return ck(this)">
        <input id="searchText" class="ui-widget input ui-corner-all" name="find" value="" size="20" maxlength="30" onFocus="flip(1)" onBlur="flip(0)" type="text">
        <input name="find_focus" value="0" type="hidden">
        <select id="boxt" name="search_type" class="ui-widget select ui-corner-all">
          <option value="artist">Artist Search</option>
          <option value="title">Title Search </option>
          <option value="label">Label Search </option>
          <option value="genre">Genre Search </option>
          <option value="seller">Seller Search </option>
          <option value="email">E-mail Search </option>
        </select>
        <select id="box1" name="media" class="ui-widget select">
          <option value="All">All Formats</option>
          <option value="CDs">CDs only </option>
          <option value="CDsVinyl">CDs &amp; Vinyl </option>
          <option value="Vinyl">Vinyl only </option>
          <option value="Video">Videos only </option>
          <option value="2">CD&nbsp;&nbsp; </option>
          <option value="12">CDsingle&nbsp;&nbsp; </option>
          <option value="13">CD3&nbsp;&nbsp; </option>
          <option value="10">CDR&nbsp;&nbsp; </option>
          <option value="9">CDV&nbsp;&nbsp; </option>
          <option value="62">SACD&nbsp;&nbsp; </option>
          <option value="61">CD DVD&nbsp;&nbsp; </option>
          <option value="32">2CD&nbsp;&nbsp; </option>
          <option value="45">Digi Pak&nbsp;&nbsp; </option>
          <option value="72">CD Box Set&nbsp;&nbsp; </option>
          <option value="43">Box Set&nbsp;&nbsp; </option>
          <option value="11">DVD&nbsp;&nbsp; </option>
          <option value="73">DVD Box Set&nbsp;&nbsp; </option>
          <option value="23">Calendar&nbsp;&nbsp; </option>
          <option value="5">Cassette&nbsp;&nbsp; </option>
          <option value="79">Cassette+CDR&nbsp;&nbsp; </option>
          <option value="6">DAT&nbsp;&nbsp; </option>
          <option value="3">Laser Disc&nbsp;&nbsp; </option>
          <option value="4">LP&nbsp;&nbsp; </option>
          <option value="33">2LP&nbsp;&nbsp; </option>
          <option value="39">3LP&nbsp;&nbsp; </option>
          <option value="40">4LP&nbsp;&nbsp; </option>
          <option value="65">LP+CDR&nbsp;&nbsp; </option>
          <option value="46">LP Gatefold&nbsp;&nbsp; </option>
          <option value="71">LP Box Set&nbsp;&nbsp; </option>
          <option value="31">EP&nbsp;&nbsp; </option>
          <option value="42">78&nbsp;&nbsp; </option>
          <option value="80">78+CDR&nbsp;&nbsp; </option>
          <option value="56">45&nbsp;&nbsp; </option>
          <option value="14">7"&nbsp;&nbsp; </option>
          <option value="41">7" PS&nbsp;&nbsp; </option>
          <option value="36">Split 7"&nbsp;&nbsp; </option>
          <option value="68">7"+CDR&nbsp;&nbsp; </option>
          <option value="37">2X 7"&nbsp;&nbsp; </option>
          <option value="76">7" Box Set&nbsp;&nbsp; </option>
          <option value="15">10"&nbsp;&nbsp; </option>
          <option value="64">10" PS&nbsp;&nbsp; </option>
          <option value="67">10"+CDR&nbsp;&nbsp; </option>
          <option value="77">10" Box Set&nbsp;&nbsp; </option>
          <option value="16">12"&nbsp;&nbsp; </option>
          <option value="63">12" PS&nbsp;&nbsp; </option>
          <option value="66">12"+CDR&nbsp;&nbsp; </option>
          <option value="47">2X 12"&nbsp;&nbsp; </option>
          <option value="59">3X 12"&nbsp;&nbsp; </option>
          <option value="78">12" Box Set&nbsp;&nbsp; </option>
          <option value="57">8-Track&nbsp;&nbsp; </option>
          <option value="48">Mini Disc&nbsp;&nbsp; </option>
          <option value="7">VideoNTSC&nbsp;&nbsp; </option>
          <option value="17">VideoPAL&nbsp;&nbsp; </option>
          <option value="30">NTSC+PAL&nbsp;&nbsp; </option>
          <option value="74">NTSC Vid Boxset&nbsp;&nbsp; </option>
          <option value="75">PAL Vid Box Set&nbsp;&nbsp; </option>
          <option value="26">Flat&nbsp;&nbsp; </option>
          <option value="29">Flexi&nbsp;&nbsp; </option>
          <option value="20">Book&nbsp;&nbsp; </option>
          <option value="70">Booklet&nbsp;&nbsp; </option>
          <option value="69">Handbill&nbsp;&nbsp; </option>
          <option value="54">Program&nbsp;&nbsp; </option>
          <option value="21">Memorabilia&nbsp;&nbsp; </option>
          <option value="35">Pic Disc&nbsp;&nbsp; </option>
          <option value="49">7" Pic Disc&nbsp;&nbsp; </option>
          <option value="50">10" Pic Disc&nbsp;&nbsp; </option>
          <option value="51">12" Pic Disc&nbsp;&nbsp; </option>
          <option value="52">LP Pic Disc&nbsp;&nbsp; </option>
          <option value="53">ShapPicDisc&nbsp;&nbsp; </option>
          <option value="38">Photograph&nbsp;&nbsp; </option>
          <option value="19">Poster&nbsp;&nbsp; </option>
          <option value="22">Postcard&nbsp;&nbsp; </option>
          <option value="58">Press Kit&nbsp;&nbsp; </option>
          <option value="25">Patch&nbsp;&nbsp; </option>
          <option value="28">Pin&nbsp;&nbsp; </option>
          <option value="60">Reel2Reel&nbsp;&nbsp; </option>
          <option value="44">Sheet Music&nbsp;&nbsp; </option>
          <option value="24">Sticker&nbsp;&nbsp; </option>
          <option value="18">T-Shirt&nbsp;&nbsp; </option>
          <option value="55">Ticket&nbsp;&nbsp; </option>
          <option value="34">Zine&nbsp;&nbsp; </option>
          <option value="8">Any/All&nbsp;&nbsp; </option>
          <option value="27">Other&nbsp;&nbsp; </option>
        </select>
        <button type='submit' target='_blank' class='fg-button fg-button-icon-right2 ui-state-default ui-corner-all'>MusicStack<span class='ui-icon ui-icon-circle-zoomin'></span></button>
      </form></td>
  </tr>
  <tr>
    <td align="right" valign="top"><img src="../images/EBAYfavicon.ico" title="Search Ebay"></td>
    <td>&nbsp;</td>
    <td><form method="get" action="http://search.ebay.com/search/search.dll" target="_blank" style="margin-bottom: 0pt;">
        <input type="text" maxlength="300" name="satitle" size="20" class="ui-widget input">
        <button type='submit' target='_blank' class='fg-button fg-button-icon-right2 ui-state-default ui-corner-all'> Search Ebay <span class='ui-icon ui-icon-comment'></span> </button>
      </form></td>
  </tr>
  <tr>
    <td align="right" valign="top"><img src="../images/RbMfavicon.ico" title="Search Records by Mail"></td>
    <td align="left">&nbsp;</td>
    <td align="left"><form method=post action="http://www.recordsbymail.com/search.php" target="_blank">
        <select class="ui-widget select" style="width: 140;">
          <option value="artist">Artist
          <option value="keyword">Keyword(s)
          <option value="title">Title
          <option value="label">Record Label
        </select>
        <input type="hidden" name="quickSearch" value="true">
        <input type="text" size="20" name="keywords" class="ui-widget input">
        <button type='submit' target='_blank' class='fg-button fg-button-icon-right2 ui-state-default ui-corner-all'>Craig Moeor<span class='ui-icon ui-icon-calculator'></span></button>
      </form></td>
  </tr>
</table>
</td>
</tr>
</table>
<?php
echo $search2;
?>
</div>