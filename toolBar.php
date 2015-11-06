				<span class="ui-widget-header ui-helper-reset ui-corner-all" style="padding:6px 6px 6px 25px; display:block; font-size:16px; margin-right:15pz;">Welcome to TLhC
						<?php
							echo $version;
						?>
						<span class="fg-toolbar ui-corner-all" style="font-size:14px; background: url(parts/jq/images/ui-bg_diamond-ripple_90_6e6f6f_22x22.png); display: inline; padding:.6em; position: relative; right: -150px; border: medium double #cccccc;">
						<?php
							echo $loadRight;
							echo "<span class='fg-toolbar fg-buttonset-multi' style='display: inline;'>";
							echo "$searchButton $picButton $search2 $abbrevsButton";
							echo "</span>";
							echo $previewButton;
							echo "<span class='fg-toolbar fg-buttonset-multi' style='display: inline;'>";
							echo "$addCommsButton45s $showCommsButton $addCommsButtonSoldiers $showCommsButton2 $addCommsButtonCards $showCommsButton4 $addCommsButtonTrains $showCommsButton3";
							echo "</span>";
							echo "$gplButton $helpButton";
						?>
						<button id="canOpener2" class="ui-corner-all ui-state-default tooltip" title="Open up a popup box for something" style="height:25px; position:relative;"><span class="ui-icon silk-icon-weather-lightning"></span></button>
						<button id="canOpener" class="ui-corner-all ui-state-default tooltip" title="Pop open a new box"><span class="ui-icon silk-icon-cog-delete"></span></button>
						</span><!-- END INNER BORDER SPAN -->
				</span><!-- END BUTTON BAR SPAN -->