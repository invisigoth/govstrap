<?php

/**
 * @file
 * theme.inc
 */

/**
 * Implements theme_breadrumb().
 */
function govstrap_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];

  if (!empty($breadcrumb)) {
    $page_type = arg(0);
    if ($page_type == 'node') {
      $node_id = arg(1);
      if (!empty($node_id) && is_numeric($node_id)) {
        $node = node_load(arg(1));
        switch ($node->type) {
          case 'webform':
            $breadcrumb[] = 'Form';
            $breadcrumb[] = $node->field_title['und'][0]['value'];
            break;
        }
      }
    }
    elseif ($page_type == 'search') {
      $breadcrumb = array('<a href="/">Home</a>', 'Search');
    }
    else {
      $breadcrumb[] = drupal_get_title();
    }

    $breadcrumbs = '<ol class="breadcrumb">';
    foreach ($breadcrumb as $key => $value) {
      $breadcrumbs .= '<li>' . $value . '</li>';
    }
    $breadcrumbs .= '</ol>';

    return $breadcrumbs;
  }
}

/**
 * Returns HTML for remaining message.
 */
function govstrap_date_display_remaining($variables) {
  $remaining_days = $variables['remaining_days'];
  $output = '';
  $show_remaining_text = t('Close in less than 1 day.');
  if ($remaining_days) {
    $show_remaining_text = format_plural($remaining_days, 'Close in 1 day', 'Close in @count days');
  }

  return '<div class="date-display-remaining"><span class="date-display-remaining">' . $show_remaining_text . '</span></div>';
}
