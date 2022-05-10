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

$german = array(
	"admin:plugins:category:PHLOOR" => "PHLOOR Plugins",
	"admin:plugin:settings:title" => 'Open Web Analytics Settings',

	'phloor_analytics_owa' => "Phloor Analytics OWA",
	'phloor_analytics_owa:path_to_owa:link' => 'Open Web Analytics öffnen',

	'admin:statistics:phloor_analytics_owa' => 'Open Web Analytics',
	'phloor_analytics_owa:form:section:settings' => 'Einstellungen',

	'phloor_analytics_owa:save:success' => 'Einstellungen wurden erfolgreich gespeichert. ',
	'phloor_analytics_owa:save:failure' => 'Eisntellungen konnten nicht gespeichert werden. ',

	'phloor_analytics_owa:couldnotopenowajavascript' => "Konnte die Datei 'modules/base/dist/owa.tracker.js' im angegebenen Pfrad '%s' nicht öffnen. ",
	'phloor_analytics_owa:invalidsiteguid' => "Site ID muss eine positive, ganze Zahl sein (im Zweifelsfall '1') ",

	'phloor_analytics_owa:enable_tracking:label' => "Tracking aktivieren? ",
	'phloor_analytics_owa:enable_tracking:description' => "Diese Checkbox aktiviert das Aufzeichnen der Seitennutzung mit OWA. ",

	'phloor_analytics_owa:path_to_owa:label' => "Pfad zur OWA-Installation ",
	'phloor_analytics_owa:path_to_owa:description' => "Pfad zur Open Web Analytics Installation auf Ihrem Server. Bitte vergewissern Sie sich, dass der Pfad mit 'http://' beginnt und mit '/' endet.. z.B.: 'http://www.example.com/owa/' ",

	'phloor_analytics_owa:site_guid:label' => "Site Tracking ID",
	'phloor_analytics_owa:site_guid:description' => "Positive, ganze Zahl welche die zu analysierende Seite eindeutig identifiziert. ",
);

add_translation("de", $german);
