<?php

/**
 * @file
 * Implementation for the two column bricked layout
 */

// Plugin definition
$plugin = array(
  'title' => t('NCA homepage'),
  'category' => t('Columns: 3'),
  'icon' => 'homepage.png',
  'theme' => 'panels_homepage',
  'regions' => array(
    'row-1-col-1' => t('Row 1 Col 1'),
    'row-1-col-2' => t('Row 1 Col 2'),
    'row-1-col-3' => t('Row 1 Col 3'),
    'row-2' => t('Row 2'),
    'row-3-col-1' => t('Row 3 Col 1'),
    'row-3-col-2' => t('Row 3 Col 2'),
    'row-4' => t('Row 4'),
    'row-5-col-1' => t('Row 5 Col 1'),
    'row-5-col-2' => t('Row 5 Col 2'),
    'row-5-col-3' => t('Row 5 Col 3'),
  ),
);
