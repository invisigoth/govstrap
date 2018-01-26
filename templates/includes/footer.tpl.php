<footer id="footer" class="footer <?php print $container_class; ?>">
    <?php if (!empty($page['footer_menu'])): ?>
        <?php print render($page['footer_menu']); ?>
    <?php endif; ?>
    <?php if (!empty($page['footer'])): ?>
        <?php print render($page['footer']); ?>
    <?php endif; ?>
</footer>