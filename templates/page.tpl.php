<?php
/**
 * @file
 * page.tpl.php - Returns the HTML for a single Drupal page.
 */
?>
<?php include 'includes/header.tpl.php'; ?>
<nav id="navigation">
    <div class="<?php print $container_class; ?>">
      <?php print render($page['navigation']); ?>
    </div>
</nav>
<!-- /#navigation -->

<main>
    <div id="main" class="main-container <?php print $container_class; ?>">
        <div class="<?php print $highlighted_class; ?>">
          <?php if (!empty($page['highlighted'])): ?>
            <?php print render($page['highlighted']); ?>
            <?php if (!empty($breadcrumb)): ?>
                  <div class="block-crumbs">
                    <?php print $breadcrumb; ?>
                  </div>
            <?php endif; ?>
          <?php else: ?>
            <?php
            $default_header_block = module_invoke('bean', 'block_view', 'section-banner-default');
            print render($default_header_block['content']);
            ?>
          <?php endif; ?>
          <?php print render($title_prefix); ?>
          <?php if (!empty($title)): ?>
              <h1 class="page-header"><?php print $title; ?></h1>
          <?php endif; ?>
          <?php print render($title_suffix); ?>
        </div>

      <?php print $messages; ?>
        <div id="content" class="row">
          <?php if (!empty($page['sidebar_first'])): ?>
              <aside class="col-sm-4" role="complementary">
                <?php print render($page['sidebar_first']); ?>
              </aside>  <!-- /#sidebar-first -->
          <?php endif; ?>
            <section id="main-content-section" class="<?php print $content_column_class; ?>" role="main">
                <div id="main-content"></div>
              <?php if (!empty($tabs)): ?>
                <?php print render($tabs); ?>
              <?php endif; ?>
              <?php if (!empty($page['help'])): ?>
                <?php print render($page['help']); ?>
              <?php endif; ?>
              <?php if (!empty($action_links)): ?>
                  <ul class="action-links"><?php print render($action_links); ?></ul>
              <?php endif; ?>
                <div id="page-content">
                  <?php print render($page['content']); ?>
                </div>
            </section>
          <?php if (!empty($page['sidebar_second'])): ?>
              <aside class="col-sm-4" role="complementary">
                  <div class="menu-block-wrapper menu-block-active-parent menu-name-main-menu">
                    <?php print $active_page_parent; ?>
                  </div>
                <?php print render($page['sidebar_second']); ?>
              </aside>  <!-- /#sidebar-second -->
          <?php endif; ?>
        </div>
    </div>
</main>

<?php include 'includes/footer.tpl.php'; ?>
