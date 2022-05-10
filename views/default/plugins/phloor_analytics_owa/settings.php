<?php
    /**
     * The OWA plugin settings
     */
    
    $plugin = elgg_extract('entity', $vars);
    $general_fields = [
        [
            '#type' => 'checkbox',
            '#label' => elgg_echo('phloor_analytics_owa:enable_tracking:label'),
            '#help' => elgg_echo('phloor_analytics_owa:enable_tracking:description'),
            'name' => 'params[enable_tracking]',
            'value' => 1,
            'checked' => (bool) $plugin->enable_tracking,
            'switch' => true,
        ],
        [
          '#type' => 'text',
          '#label' => elgg_echo('phloor_analytics_owa:path_to_owa:label'),
          '#help' => elgg_echo('phloor_analytics_owa:path_to_owa:description'),
          'name' => 'params[path_to_owa]',
          'value' => $plugin->path_to_owa,
        ],
        [
          '#type' => 'text',
          '#label' => elgg_echo('phloor_analytics_owa:site_guid:label'),
          '#help' => elgg_echo('phloor_analytics_owa:site_guid:description'),
          'name' => 'params[site_guid]',
          'value' => $plugin->site_guid,
        ]
    ];
    
    $general_settings = '';
    foreach ($general_fields as $field) {
      $general_settings .= elgg_view_field($field);
    }
    echo elgg_view_module('info', elgg_echo('admin:plugin:settings:title'), $general_settings);
?>