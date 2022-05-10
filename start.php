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
require elgg_get_plugins_path( ) . 'phloor_analytics_owa/lib/phloor_analytics_owa.lib.php'; 
/**
 * 
 */
elgg_register_event_handler('init', 'system', 'phloor_analytics_owa_init');

function phloor_analytics_owa_init() {

	/**
	 * JS
	 */
	$OWA_path = elgg_get_plugin_setting('path_to_owa','phloor_analytics_owa');
	$js_url = $OWA_path.'modules/base/dist/owa.tracker.js';
			
	/**
	 * LOAD TRACKING SCRIPT
	 */
	$tracking_setting = elgg_get_plugin_setting('enable_tracking','phloor_analytics_owa');
	$plugin_entity  = elgg_get_plugin_from_id('phloor_analytics_owa');

	if($tracking_setting == '1') {
		if(phloor_analytics_owa_check_vars($plugin_entity)){
			elgg_require_js($js_url); // load owa script
			elgg_extend_view('page/elements/foot', 'phloor_analytics_owa/owa/analytics',1);
		}else{
			elgg_set_plugin_setting('enable_tracking',0,'phloor_analytics_owa');
		}
	}
	
}
