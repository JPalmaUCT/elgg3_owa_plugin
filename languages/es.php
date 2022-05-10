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

$spanish = array(
	"admin:plugins:category:PHLOOR" => "PHLOOR Plugins",
	"admin:plugin:settings:title" => 'Configuraciones de Open Web Analytics',

    'phloor_analytics_owa' => "Phloor Analytics OWA",
	'phloor_analytics_owa:path_to_owa:link' => 'Go to Open Web Analytics',

	'admin:statistics:phloor_analytics_owa' => 'Open Web Analytics',
	'phloor_analytics_owa:form:section:settings' => 'Settings',

	'phloor_analytics_owa:save:success' => 'Settings successfully saved. ',
	'phloor_analytics_owa:save:failure' => 'Settings could not be saved. ',

	'phloor_analytics_owa:couldnotopenowajavascript' => "No se pudo acceder al archivo 'modules/base/dist/owa.tracker.js' desde la URL especificada '%s'. ",
	'phloor_analytics_owa:invalidsiteguid' => "La guid del sitio debe ser un entero positivo (Inserta 1 si no estas seguro). ",

	'phloor_analytics_owa:enable_tracking:label' => "Activar Seguimiento? ",
	'phloor_analytics_owa:enable_tracking:description' => "Si esta opcion esta habilitada Open Web Analytics comenzara a realizar el seguimiento/tracking. ",

	'phloor_analytics_owa:path_to_owa:label' => "Ruta a la instalacion de OWA ",
	'phloor_analytics_owa:path_to_owa:description' => "Ruta de la instalacion de OWA en un servidor. Por favor asegurese que el link comience con 'http://' y termine con '/'.. e.g. 'http://www.ejemplo.com/owa/'. Esta variable le dice a todos los objetos javascript de OWA(trackers, overlay's etc.) donde el servidor de OWA esta situado. El Archivo 'modules/base/dist/owa.tracker.js' será cargado desde ahí. ",

	'phloor_analytics_owa:site_guid:label' => "ID del sitio",
	'phloor_analytics_owa:site_guid:description' => "Establece el ID del sitio que está rastreando. El ID del sitio es generado por la interfaz de administración de OWA cada vez que se agrega un nuevo sitio para rastrear.",

);

add_translation("es", $spanish);