<?php
/**
 * @file
 * Default theme implementation for beans.
 *
 * Available variables:
 * - $content: An array of comment items. Use render($content) to print them all, or
 *   print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $title: The (sanitized) entity label.
 * - $url: Direct url of the current entity if specified.
 * - $page: Flag for the full page state.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity-{ENTITY_TYPE}
 *   - {ENTITY_TYPE}-{BUNDLE}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 */
?>
<?php
if (isset($content["field_bean_image"]['#object']->field_link_to['und'][0]['url'])) {
  $block_link = $content["field_bean_image"]['#object']->field_link_to['und'][0]['url'];
}
$block_title = $content["field_bean_image"]['#object']->title;
$block_image = theme('image_style', array('style_name' => 'nca_square', 'path' => $content["field_bean_image"]['#object']->field_bean_image['und'][0]['uri']));
?>
<div class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <?php if (!empty($block_link)): ?>
      <div class="content landing-tile with-link"<?php print $content_attributes; ?>>
          <a href="<?php print $block_link; ?>" title="<?php print $block_title; ?>">
              <h2><?php print $block_title; ?></h2>
            <?php print $block_image; ?>
              <div class="landing-cta"><?php print $block_title; ?></div>
          </a>
      </div>
  <?php else: ?>
      <div class="content landing-tile"<?php print $content_attributes; ?>>
          <h2><?php print $block_title; ?></h2>
        <?php print $block_image; ?>
      </div>
  <?php endif; ?>
</div>
