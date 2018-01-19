<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div id="homepage_carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <?php foreach ($rows as $id => $row): ?>
        <?php if ($id == 0): ?>
            <li data-target="#myCarousel" data-slide-to="<?php print $id;?>" class="active"></li>
        <?php else: ?>
            <li data-target="#myCarousel" data-slide-to="<?php print $id;?>"></li>
        <?php endif; ?>
      <?php endforeach; ?>
    </ol>
    <div class="carousel-inner">
        <?php foreach ($rows as $id => $row): ?>
          <?php if ($id == 0): ?>
                <div class="item active">
                  <?php print $row; ?>
                </div>
          <?php else: ?>
                <div class="item">
                  <?php print $row; ?>
                </div>
          <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>
