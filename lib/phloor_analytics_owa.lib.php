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

	/**
	 * It checks if the path to the OWA javascript file is valid and if the site_guid is set
	 * 
	 * @param ElggPlugin $plugin The plugin object.
	 * 
	 * @return bool True if the check was successful, false otherwise.
	 */
	function phloor_analytics_owa_check_vars(ElggPlugin $plugin) {

		/* Getting the settings from the plugin. */
		$owaPATH_setting = $plugin->getSetting('path_to_owa');
		$owaGUID_setting = $plugin->getSetting('site_guid');

		// try for 5 sec opening the specified file...
		$file = $owaPATH_setting. 'modules/base/dist/owa.tracker.js';
		$cont = stream_context_create(array(
					'http' => array(
						'method' => 'HEAD',
						'timeout' => 5
					)
				));
		$headers = @get_headers($file,false,$cont);
		$status = substr($headers[0], 9, 3);

		if (!(($status >= 200) && ($status < 400))) {

			register_error(elgg_echo('phloor_analytics_owa:couldnotopenowajavascript',array($owaPATH_setting)));
			return false;

		}

		/* check if the site_guid is empty. */
		if(empty($owaGUID_setting)) {

			register_error(elgg_echo('phloor_analytics_owa:invalidsiteguid'));
			return false;

		}
		
		return true;
	}

?>