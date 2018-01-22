<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div id="homepage-carousel" class="carousel slide" data-ride="carousel" data-interval="10000">
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

        <!-- Slide indicators -->
        <div class="carousel-indicator-wrapper">
            <ol class="carousel-indicators">
                <?php foreach ($rows as $id => $row): ?>
                    <?php if ($id == 0): ?>
                        <li data-target="#homepage-carousel" data-slide-to="<?php print $id;?>" class="active"></li>
                    <?php else: ?>
                        <li data-target="#homepage-carousel" data-slide-to="<?php print $id;?>"></li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ol>
        </div>
        <!-- Slide controls -->
        <a class="left carousel-control" href="#homepage-carousel" data-slide="prev">
            <span class="icon-larrow"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#homepage-carousel" data-slide="next">
            <span class="icon-rarrow"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>


</div>
