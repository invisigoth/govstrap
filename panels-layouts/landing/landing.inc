<?php

/**
 * @file
 * Implementation for the two column bricked layout
 */

// Plugin definition
$plugin = array(
  'title' => t('NCA landing'),
  'category' => t('Columns: 3'),
  'icon' => 'landing.png',
  'theme' => 'panels_landing',
  'regions' => array(
    'row-1' => t('Row 1'),
    'row-2-col-1' => t('Row 2 Col 1'),
    'row-2-col-2' => t('Row 2 Col 2'),
    'row-2-col-3' => t('Row 2 Col 3'),
    'row-3' => t('Row 3'),
  ),
);

