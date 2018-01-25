<?php
/**
 * @file
 * Template for a 2 column panel layout.
 *
 * This template provides a two column panel display layout, with
 * each column roughly equal in width. It is 5 rows high; the top
 * middle and bottom rows contain 1 column, while the second
 * and fourth rows contain 2 columns.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['top']: Content in the top row.
 *   - $content['left_above']: Content in the left column in row 2.
 *   - $content['right_above']: Content in the right column in row 2.
 *   - $content['middle']: Content in the middle row.
 *   - $content['left_below']: Content in the left column in row 4.
 *   - $content['right_below']: Content in the right column in row 4.
 *   - $content['right']: Content in the right column.
 *   - $content['bottom']: Content in the bottom row.
 */
?>
<div class="panel-display panel-nca-front clearfix" <?php if (!empty($css_id)) {
    print 'id="'.$css_id.'"';
} ?>>
    <div class="row homepage-panel-row-3-col">
        <div class="col-xs-12 col-sm-4">
            <div class="panel-col-content">
              <?php print $content['row-1-col-1']; ?>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="panel-col-content">
              <?php print $content['row-1-col-2']; ?>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="panel-col-content">
              <?php print $content['row-1-col-3']; ?>
            </div>
        </div>
    </div>
    <div class="row wide-image">
        <div class="col-xs-12 col-sm-12">
          <?php print $content['row-2']; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6">
          <?php print $content['row-3-col-1']; ?>
        </div>
        <div class="col-xs-12 col-sm-6">
          <?php print $content['row-3-col-2']; ?>
        </div>
    </div>
    <div class="row wide-image">
        <div class="col-xs-12 col-sm-12">
          <?php print $content['row-4']; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-4">
          <?php print $content['row-5-col-1']; ?>
        </div>
        <div class="col-xs-12 col-sm-4">
          <?php print $content['row-5-col-2']; ?>
        </div>
        <div class="col-xs-12 col-sm-4">
          <?php print $content['row-5-col-3']; ?>
        </div>
    </div>
</div>