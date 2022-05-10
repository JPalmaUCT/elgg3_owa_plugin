<?php 
/*****************************************************************************
 * Phloor Analytics OWA                                                      *
 *                                                                           *
 * Copyright (C) 2011 Alois Leitner                                          *
 *                                                                           *
 * This program is free software: you can redistribute it and/or modify      *
 * it under the terms of the GNU General Public License as published by      *
 * the Free Software Foundation, either version 2 of the License, or         *
 * (at your option) any later version.                                       *
 *                                                                           *
 * This program is distributed in the hope that it will be useful,           *
 * but WITHOUT ANY WARRANTY; without even the implied warranty of            *
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             *
 * GNU General Public License for more details.                              *
 *                                                                           *
 * You should have received a copy of the GNU General Public License         *
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.     *
 *                                                                           *
 * "When code and comments disagree both are probably wrong." (Norm Schryer) *
 *****************************************************************************/ 
?>
<?php

// show javascript trackking code if enabled in plugin settings
$tracking_setting = elgg_get_plugin_setting('enable_tracking','phloor_analytics_owa');
	if($tracking_setting == '1') {
?>	
		<!-- Start Open Web Analytics Tracker -->
		<script type="text/javascript">
			//<![CDATA[
			var owa_baseUrl = '<?php echo elgg_get_plugin_setting('path_to_owa','phloor_analytics_owa'); ?>';
			var owa_cmds = owa_cmds || [];
			owa_cmds.push(['setSiteId', '<?php echo elgg_get_plugin_setting('site_guid','phloor_analytics_owa'); ?>']);
			owa_cmds.push(['trackPageView']);
			owa_cmds.push(['trackClicks']);
			owa_cmds.push(['trackDomStream']);

		//]]>
		</script>
<?php 
	}
?>




