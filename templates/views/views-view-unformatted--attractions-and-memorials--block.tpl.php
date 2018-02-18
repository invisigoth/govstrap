<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<div class="list-attractions">
  <?php foreach ($rows as $id => $row): ?>
      <div class="col-md-4 attraction-tile">
        <?php print $row; ?>
      </div>
  <?php endforeach; ?>
</div>
